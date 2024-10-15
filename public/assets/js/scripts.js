//{ Start Page Background Changed}
// Define scroll thresholds for different screen sizes
const desktopThreshold = 2200
const tabletThreshold = 1300
const mobileThreshold = 1800
const screenThreshold = 1900

// Function to get the appropriate scroll threshold based on the screen size
const getScrollThreshold = () => {
    if (window.innerWidth <= 480) return mobileThreshold // Mobile
    if (window.innerWidth <= 900) return tabletThreshold // Tablet
    if (window.innerWidth <= 1420) return screenThreshold // 1280
    return desktopThreshold // Desktop
}

// Get the background div element
const backgroundDiv = document.querySelector('.background')

// Listen for the scroll event
window.addEventListener('scroll', () => {
    // Get the current scroll position
    const scrollPosition = window.scrollY

    // Get the appropriate threshold for the current screen size
    const scrollThreshold = getScrollThreshold()

    // Change the background image based on scroll position
    if (scrollPosition > scrollThreshold) {
        backgroundDiv.style.backgroundImage = 'url(/assets/images/bg-changed.png)'
    } else {
        backgroundDiv.style.backgroundImage = 'url(/assets/images/SERVCES.png)'
    }
})

// Listen for window resize event to dynamically adjust the threshold on screen resize
window.addEventListener('resize', () => {
    getScrollThreshold() // Recalculate threshold on resize
})
//{ End Page Background Changed}


// {Start Animation}
document.addEventListener('scroll', function () {
    const Sections = document.querySelectorAll('.Section');

    Sections.forEach(Section => {
        const SectionPosition = Section.getBoundingClientRect().top;
        const ScreenPosition = window.innerHeight / 2;

        if (SectionPosition < ScreenPosition) {
            Section.classList.add('fade-in-right-big');
        }
    });
});


document.addEventListener('scroll', function () {
    const Section2 = document.querySelectorAll('.Section2');

    Section2.forEach(Section2 => {
        const SectionPosition = Section2.getBoundingClientRect().top;
        const ScreenPosition = window.innerHeight / 1.5;

        if (SectionPosition < ScreenPosition) {
            Section2.classList.add('flip-in-x');
        }
    });
});


document.addEventListener('scroll', function () {
    const Section3 = document.querySelectorAll('.Section3');

    Section3.forEach(Section3 => {
        const sectionPosition = Section3.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 2;

        if (sectionPosition < screenPosition) {
            Section3.classList.add('fade-in');
        }
    });
});
// {End Animation} */


/*  {Start Number in about us} */
function animateValue(id, start, end, duration) {
    const obj = document.getElementById(id);
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerText = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

function animateOnScroll() {
    if (window.scrollY >= 200) { // Check if the page has been scrolled 650px or more
        animateValue("employees", 0, 50, 3000);
        animateValue("experience", 0, 22, 3000);
        animateValue("clients", 0, 1000, 3000);

        // Remove the scroll event listener after the animation has started to prevent it from firing again
        window.removeEventListener("scroll", animateOnScroll);
    }
}
// Listen for scroll events
window.addEventListener("scroll", animateOnScroll);
// Optional: Check the scroll position on page load in case the user has already scrolled down
document.addEventListener("DOMContentLoaded", animateOnScroll);
/*  {End Number in about us} */



// {Start Animation Hiring}
document.addEventListener("DOMContentLoaded", function () {
    const jobCards = document.querySelectorAll('.job-card');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('zoom-in');
                observer.unobserve(entry.target); // Stop observing once zoomed in (optional)
            }
        });
    }, {
        threshold: 0.5 // Adjust the threshold to determine when the animation should trigger
    });

    jobCards.forEach(card => {
        observer.observe(card);
    });
});
// {End Animation Hiring}




// {Start FORM contactus button fixed}
document.getElementById('triggerButton').addEventListener('click', function (event) {
    event.preventDefault(); // Prevent default link behavior
    // Show the form page
    const formPage = document.getElementById('contactFormPage');
    formPage.classList.toggle('hidden');
    formPage.classList.toggle('visible');
});
// Optional: Close the form when clicking outside the form container
window.addEventListener('click', function (event) {
    const formPage = document.getElementById('contactFormPage');
    if (!formPage.contains(event.target) && !event.target.closest('#triggerButton')) {
        formPage.classList.add('hidden');
    }
});
// From Alert
document.getElementById('applyForm').addEventListener('submit', function (event) {
    event.preventDefault();
    alert('Your application has been submitted!');
    // Add your form submission logic here
    document.querySelector('#applyModal .btn-close').click(); // Close the modal
});
// {End FORM contactus button fixed}



// {Start Video Scrolling}
const videos = [
    "https://www.youtube.com/embed/VIDEO_ID_1",
    "https://www.youtube.com/embed/VIDEO_ID_2",
    "https://www.youtube.com/embed/VIDEO_ID_3"
];
let currentVideo = 0;

const videoPlayer = document.getElementById('videoPlayer');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

function changeVideo(index) {
    currentVideo = index;
    videoPlayer.src = videos[currentVideo]; // Change the iframe src
}

prevBtn.addEventListener('click', () => {
    currentVideo = (currentVideo === 0) ? videos.length - 1 : currentVideo - 1;
    changeVideo(currentVideo);
});

nextBtn.addEventListener('click', () => {
    currentVideo = (currentVideo === videos.length - 1) ? 0 : currentVideo + 1;
    changeVideo(currentVideo);
});
//{End Video Scrolling}



