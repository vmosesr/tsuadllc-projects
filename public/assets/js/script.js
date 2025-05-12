// Mobile Navigation Toggles
document.addEventListener('DOMContentLoaded', function() {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const menuBtn = document.getElementById('menuBtn');
    const mobileSubNav = document.getElementById('mobileSubNav');
    const mobileTopNav = document.getElementById('mobileTopNav');

    const serviceDetails = document.querySelectorAll('.service-detail');
    
    // Hamburger button toggle (for sub navigation)
    hamburgerBtn.addEventListener('click', function() {
        mobileSubNav.classList.toggle('show');
        // Close top nav if open
        if (mobileTopNav.classList.contains('show')) {
            mobileTopNav.classList.remove('show');
        }
    });
    
    // Menu button toggle (for top navigation)
    menuBtn.addEventListener('click', function() {
        mobileTopNav.classList.toggle('show');
        // Close sub nav if open
        if (mobileSubNav.classList.contains('show')) {
            mobileSubNav.classList.remove('show');
        }
    });
    
    // Close mobile menus when clicking outside
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


    // Animate items when page loads
    setTimeout(() => {
        serviceDetails.forEach(item => {
            item.style.opacity = 1;
            item.style.transform = 'translateY(0)';
        });
    }, 500);
    
    // Add hover animation to the button
    const actionBtn = document.querySelector('.action-btn');
    actionBtn.addEventListener('mouseenter', function() {
        this.classList.add('animate__pulse');
    });
    actionBtn.addEventListener('mouseleave', function() {
        this.classList.remove('animate__pulse');
    });



    // Joining form

    let currentStep = 0;
    const steps = document.querySelectorAll(".step");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    function showStep(n) {
        steps.forEach((step, i) => {
        step.classList.toggle("active", i === n);
        });
        prevBtn.style.display = n === 0 ? "none" : "inline-block";
        nextBtn.innerText = n === steps.length - 1 ? "Submit" : "Next";
    }

    function nextPrev(n) {
        if (n === 1 && currentStep === steps.length - 1) {
        document.getElementById("joinForm").submit();
        return;
        }
        currentStep += n;
        if (currentStep >= steps.length) currentStep = steps.length - 1;
        if (currentStep < 0) currentStep = 0;
        showStep(currentStep);
    }

    showStep(currentStep);

    // Toggle org vs individual fields
    const orgRadio = document.getElementById("organization");
    const indRadio = document.getElementById("individual");
    const orgFields = document.getElementById("orgFields");
    const indFields = document.getElementById("individualFields");

    document.querySelectorAll("input[name='type']").forEach((radio) => {
        radio.addEventListener("change", () => {
            if (orgRadio.checked) {
                orgFields.style.display = "block";
                indFields.style.display = "none";
            } else {
                orgFields.style.display = "none";
                indFields.style.display = "block";
            }
        });
    });
    
});