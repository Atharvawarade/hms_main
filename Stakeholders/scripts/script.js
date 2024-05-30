document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.getElementById('nav-toggle');
    const mobileNav = document.getElementById('mobile-nav');

    navToggle.addEventListener('click', function() {
        if (mobileNav.style.display === 'block' || mobileNav.style.display === '') {
            mobileNav.style.display = 'none';
        } else {
            mobileNav.style.display = 'block';
        }
    });

    // Ensure mobile nav is hidden on larger screens
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            mobileNav.style.display = 'none';
        }
    });

    // Ensure mobile nav is hidden on load for larger screens
    if (window.innerWidth > 768) {
        mobileNav.style.display = 'none';
    }
});


window.addEventListener('resize', function() {
    document.querySelectorAll('.square_box').forEach(function(box) {
        const parentWidth = box.parentElement.offsetWidth;
        box.style.height = `${parentWidth}px`;
    });
});

window.dispatchEvent(new Event('resize')); // Trigger resize event initially


(function () {
    window.onload = function () {
        var totalProgress, progress;
        const circles = document.querySelectorAll('.progress');
        for (var i = 0; i < circles.length; i++) {
            totalProgress = circles[i].querySelector('circle').getAttribute('stroke-dasharray');
            progress = circles[i].parentElement.getAttribute('data-percent');

            circles[i].querySelector('.bar').style['stroke-dashoffset'] = totalProgress * progress / 100;

        }
    }
})();