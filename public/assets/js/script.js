// Mobile Navigation Toggles ::::::::::::::::::::::::::::::::::::::::
// Mobile Navigation Toggles ::::::::::::::::::::::::::::::::::::::::
// Mobile Navigation Toggles ::::::::::::::::::::::::::::::::::::::::

document.addEventListener('DOMContentLoaded', function() {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const menuBtn = document.getElementById('menuBtn');
    const mobileSubNav = document.getElementById('mobileSubNav');
    const mobileTopNav = document.getElementById('mobileTopNav');

    const serviceDetails = document.querySelectorAll('.service-detail');
    
    hamburgerBtn.addEventListener('click', function() {
        mobileSubNav.classList.toggle('show');
        if (mobileTopNav.classList.contains('show')) {
            mobileTopNav.classList.remove('show');
        }
    });
    
    menuBtn.addEventListener('click', function() {
        mobileTopNav.classList.toggle('show');
        if (mobileSubNav.classList.contains('show')) {
            mobileSubNav.classList.remove('show');
        }
    });
    
    document.addEventListener('click', function(event) {
        if (!mobileSubNav.contains(event.target) && 
            event.target !== hamburgerBtn && 
            !hamburgerBtn.contains(event.target) && 
            mobileSubNav.classList.contains('show')) {
            mobileSubNav.classList.remove('show');
        }
        
        if (!mobileTopNav.contains(event.target) && 
            event.target !== menuBtn && 
            !menuBtn.contains(event.target) && 
            mobileTopNav.classList.contains('show')) {
            mobileTopNav.classList.remove('show');
        }
    });


    setTimeout(() => {
        serviceDetails.forEach(item => {
            item.style.opacity = 1;
            item.style.transform = 'translateY(0)';
        });
    }, 500);
    
    const actionBtn = document.querySelector('.action-btn');
    actionBtn.addEventListener('mouseenter', function() {
        this.classList.add('animate__pulse');
    });
    actionBtn.addEventListener('mouseleave', function() {
        this.classList.remove('animate__pulse');
    });

});   

// Joining form ::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Joining form ::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Joining form ::::::::::::::::::::::::::::::::::::::::::::::::::::::::

class MultiStepForm {
    constructor() {
        this.currentStep = 1;
        this.totalSteps = 4;
        this.formData = {};
        
        this.init();
    }

    init() {
        this.bindEvents();
        this.updateProgressBar();
        this.updateButtons();
    }

    bindEvents() {
        document.getElementById('nextBtn').addEventListener('click', () => this.nextStep());
        document.getElementById('prevBtn').addEventListener('click', () => this.prevStep());

        document.querySelectorAll('.radio-item').forEach(item => {
            item.addEventListener('click', () => {
                const input = item.querySelector('input[type="radio"]');
                input.checked = true;
                
                document.querySelectorAll('.radio-item').forEach(i => i.classList.remove('selected'));
                item.classList.add('selected');
                
                this.toggleFields(input.value);
            });
        });

        document.querySelectorAll('.step-indicator').forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                if (index + 1 <= this.currentStep || this.isStepValid(this.currentStep)) {
                    this.goToStep(index + 1);
                }
            });
        });

        this.addInputValidation();
    }

    addInputValidation() {
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('blur', () => this.validateField(input));
            input.addEventListener('input', () => this.clearError(input));
        });
    }

    validateField(field) {
        const value = field.value.trim();
        let isValid = true;
        let errorMessage = '';

        if (field.hasAttribute('required') && !value) {
            isValid = false;
            errorMessage = `Please enter ${field.labels[0].textContent.replace(/.*\s/, '').toLowerCase()}`;
        } else if (field.type === 'email' && value && !this.isValidEmail(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid email address';
        }

        if (!isValid) {
            this.showError(field, errorMessage);
        } else {
            this.clearError(field);
        }

        return isValid;
    }

    isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    showError(field, message) {
        field.classList.add('error');
        const errorDiv = document.getElementById(field.id + 'Error');
        if (errorDiv) {
            errorDiv.textContent = message;
            errorDiv.style.display = 'block';
        }
    }

    clearError(field) {
        field.classList.remove('error');
        const errorDiv = document.getElementById(field.id + 'Error');
        if (errorDiv) {
            errorDiv.style.display = 'none';
        }
    }

    toggleFields(type) {
        const orgFields = document.getElementById('orgFields');
        const individualFields = document.getElementById('individualFields');
        
        if (type === 'organization') {
            orgFields.style.display = 'block';
            individualFields.style.display = 'none';
            
            document.getElementById('company').required = true;
            document.getElementById('position').required = true;
            document.getElementById('project').required = false;
        } else {
            orgFields.style.display = 'none';
            individualFields.style.display = 'block';
            
            document.getElementById('company').required = false;
            document.getElementById('position').required = false;
            document.getElementById('project').required = true;
        }
    }

    isStepValid(stepNumber) {
        const step = document.getElementById(`step${stepNumber}`);
        const requiredFields = step.querySelectorAll('[required]');
        let isValid = true;

        requiredFields.forEach(field => {
            if (!this.validateField(field)) {
                isValid = false;
            }
        });

        return isValid;
    }

    nextStep() {
        if (this.currentStep < this.totalSteps) {
            if (this.isStepValid(this.currentStep)) {
                this.saveCurrentStepData();
                this.currentStep++;
                this.showStep(this.currentStep);
                this.updateProgressBar();
                this.updateButtons();
            }
        } else {
            this.submitForm();
        }
    }

    prevStep() {
        if (this.currentStep > 1) {
            this.currentStep--;
            this.showStep(this.currentStep);
            this.updateProgressBar();
            this.updateButtons();
        }
    }

    goToStep(stepNumber) {
        this.currentStep = stepNumber;
        this.showStep(this.currentStep);
        this.updateProgressBar();
        this.updateButtons();
    }

    showStep(stepNumber) {
        document.querySelectorAll('.step').forEach(step => {
            step.classList.remove('active');
        });

        document.getElementById(`step${stepNumber}`).classList.add('active');
    }

    updateProgressBar() {
        const progressLine = document.getElementById('progressLine');
        const indicators = document.querySelectorAll('.step-indicator');
        
        const progressPercentage = ((this.currentStep - 1) / (this.totalSteps - 1)) * 100;
        progressLine.style.width = `${progressPercentage}%`;

        indicators.forEach((indicator, index) => {
            indicator.classList.remove('active', 'completed');
            
            if (index + 1 < this.currentStep) {
                indicator.classList.add('completed');
                indicator.innerHTML = '<i class="fas fa-check"></i>';
            } else if (index + 1 === this.currentStep) {
                indicator.classList.add('active');
                indicator.textContent = index + 1;
            } else {
                indicator.textContent = index + 1;
            }
        });
    }

    updateButtons() {
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        // Update previous button
        prevBtn.disabled = this.currentStep === 1;

        // Update next button
        if (this.currentStep === this.totalSteps) {
            nextBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit';
            nextBtn.classList.add('btn-success');
        } else {
            nextBtn.innerHTML = 'Next <i class="fas fa-arrow-right"></i>';
            nextBtn.classList.remove('btn-success');
        }
    }

    saveCurrentStepData() {
        const currentStepElement = document.getElementById(`step${this.currentStep}`);
        const inputs = currentStepElement.querySelectorAll('input, select, textarea');
        
        inputs.forEach(input => {
            if (input.type === 'radio') {
                if (input.checked) {
                    this.formData[input.name] = input.value;
                }
            } else {
                this.formData[input.id] = input.value;
            }
        });
    }

    submitForm() {
        this.saveCurrentStepData();
        
        const nextBtn = document.getElementById('nextBtn');
        nextBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
        nextBtn.disabled = true;

        setTimeout(() => {
            alert('Form submitted successfully! Welcome to our Responsible AI Initiative.');
            console.log('Form Data:', this.formData);
            
            this.resetForm();
        }, 2000);
    }

    resetForm() {
        this.currentStep = 1;
        this.formData = {};
        document.getElementById('joinForm').reset();
        this.showStep(1);
        this.updateProgressBar();
        this.updateButtons();
        
        const nextBtn = document.getElementById('nextBtn');
        nextBtn.innerHTML = 'Next <i class="fas fa-arrow-right"></i>';
        nextBtn.disabled = false;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new MultiStepForm();
});


// LOGIN FORM :::::::::::::::::::::::::::::::::::::::::::::::::
// LOGIN FORM :::::::::::::::::::::::::::::::::::::::::::::::::
// LOGIN FORM :::::::::::::::::::::::::::::::::::::::::::::::::

// document.getElementById('loginForm').addEventListener('submit', function(e) {
//     e.preventDefault();
    
//     const email = document.getElementById('email').value;
//     const password = document.getElementById('password').value;
//     const remember = document.getElementById('remember').checked;
    
//     console.log('Login attempt:', { email, password, remember });
    
//     const statusDiv = document.getElementById('sessionStatus');
//     statusDiv.textContent = 'Processing login...';
//     statusDiv.style.display = 'block';
    
//     setTimeout(() => {
//         statusDiv.textContent = 'Login successful! Redirecting...';
//     }, 2000);
// });

// document.querySelectorAll('.form-input').forEach(input => {
//     input.addEventListener('focus', function() {
//         this.parentElement.style.transform = 'scale(1.02)';
//     });
    
//     input.addEventListener('blur', function() {
//         this.parentElement.style.transform = 'scale(1)';
//     });
// });