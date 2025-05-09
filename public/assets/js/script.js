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
});