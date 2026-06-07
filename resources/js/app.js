import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

import Swiper from 'swiper';
import 'swiper/css/bundle';

// gsap.registerPlugin(ScrollTrigger);
window.addEventListener("load", () => {

    const preloader = document.getElementById("preloader");
    const moon = document.getElementById("moon");

    moon.classList.add("moon-slide");

    setTimeout(() => {
        preloader.style.opacity = "0";
        preloader.style.transition = "opacity .5s ease";
    }, 1500);

    setTimeout(() => {
        preloader.remove();
    }, 2000);

});


// stones and jupiter animation

document.addEventListener("mousemove", (e) => {

    const x = (window.innerWidth / 2 - e.clientX) / 100;
    const y = (window.innerHeight / 2 - e.clientY) / 100;

    const redStone = document.getElementById("redStone");
    const blackStone = document.getElementById("blackStone");
    const jupiter = document.getElementById("jupiter");
    // const goldStone = document.getElementById("goldStone");

    if (redStone) {
        redStone.style.transform =
            `translate(${x * 0.8}px, ${y * 0.8}px)`;
    }

    if (blackStone) {
        blackStone.style.transform =
            `translate(${x * 1.2}px, ${y * 1.2}px)`;
    }

    //  if (goldStone) {
    //     goldStone.style.transform =
    //         `translate(${x * 1.2}px, ${y * 1.2}px)`;
    // }
    if (jupiter) {
        jupiter.style.transform =
            `translate(${x}px, ${y}px) rotate(${x * 0.1}deg)`;
    }

});


// for gold stone animation

let goldAngle = 0;
let targetX = 0;
let targetY = 0;

document.addEventListener("mousemove", (e) => {

    const x = (window.innerWidth / 2 - e.clientX) / 100;
    const y = (window.innerHeight / 2 - e.clientY) / 100;

    targetX = x;
    targetY = y;

    const goldStone = document.getElementById("goldStone");

    if (goldStone) {
        goldStone.style.transform =
            `translate(${x * 1.5}px, ${y * 1.5}px) rotate(${goldAngle}deg)`;
    }
});


// Smooth animation loop
function animateGold() {
    const goldStone = document.getElementById("goldStone");

    if (goldStone) {

        // smooth random rotation
        goldAngle += (Math.random() * 6 - 3); // fast random twist

        // clamp rotation for natural feel
        if (goldAngle > 25) goldAngle = 25;
        if (goldAngle < -25) goldAngle = -25;

        goldStone.style.transform =
            `translate(${targetX * 1.5}px, ${targetY * 1.5}px) rotate(${goldAngle}deg)`;
    }

    requestAnimationFrame(animateGold);
}

animateGold();


// for silver stone animation



document.addEventListener("mousemove", (e) => {

    const silverStone = document.getElementById("silverStone");

    if (!silverStone) return;

    const x = (window.innerWidth / 2 - e.clientX) / 40;
    const y = (window.innerHeight / 2 - e.clientY) / 40;

    gsap.to(silverStone, {
        x: x,
        y: y,
        duration: 1,
        ease: "power2.out"
    });

});

// let silverAngle = 0;
// let targetX = 0;
// let targetY = 0;

// document.addEventListener("mousemove", (e) => {

//     const x = (window.innerWidth / 2 - e.clientX) / 100;
//     const y = (window.innerHeight / 2 - e.clientY) / 100;

//     targetX = x;
//     targetY = y;

//     const silverStone = document.getElementById("silverStone");

//     if (silverStone) {
//         silverStone.style.transform =
//             `translate(${x * 1.5}px, ${y * 1.5}px) rotate(${silverAngle}deg)`;
//     }
// });


// function animateSilver() {
//     const silverStone = document.getElementById("silverStone");

//     if (silverStone) {

//         // smooth random rotation
//         silverAngle += (Math.random() * 6 - 3); // fast random twist

//         // clamp rotation for natural feel
//         if (silverAngle > 25) silverAngle = 25;
//         if (silverAngle < -25) silverAngle = -25;

//         silverStone.style.transform =
//             `translate(${targetX * 1.5}px, ${targetY * 1.5}px) rotate(${silverAngle}deg)`;
//     }

//     requestAnimationFrame(animateSilver);
// }

// animateSilver();


// GSAP ScrollTrigger animations for service cards
gsap.registerPlugin(ScrollTrigger);

const cards = gsap.utils.toArray(".service-card");

cards.forEach((card, index) => {

    gsap.to(card, {
        scale: 1 - (cards.length - index - 1) * 0.05,
        transformOrigin: "top center",
        ease: "none",
        scrollTrigger: {
            trigger: card,
            start: "top 120px",
            end: "+=500",
            scrub: true,
        }
    });

});


// testimonial slider script 




// resources/js/app.js - CORRECT VERSION


document.addEventListener('DOMContentLoaded', function () {
    // Initialize Swiper slider
    const swiper = new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 28,
            }
        }
    });

    // Custom navigation buttons
    const prevBtn = document.querySelector('.swiper-button-prev-custom');
    const nextBtn = document.querySelector('.swiper-button-next-custom');

    if (prevBtn) {
        prevBtn.addEventListener('click', () => swiper.slidePrev());
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => swiper.slideNext());
    }

    // Optional: Autoplay progress ring
    const progressRing = document.getElementById('autoplayProgress');
    if (progressRing) {
        progressRing.addEventListener('click', () => {
            if (swiper.autoplay.running) {
                swiper.autoplay.stop();
                const span = progressRing.querySelector('span');
                if (span) span.innerHTML = '▶';
            } else {
                swiper.autoplay.start();
                const span = progressRing.querySelector('span');
                if (span) span.innerHTML = '❚❚';
            }
        });
    }
});



// contact form validation and submission

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');
    const btnIcon = document.getElementById('btnIcon');
    const formMessage = document.getElementById('formMessage');

    if (form) {
        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            // Validate required fields
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !service || !message) {
                showMessage('Please fill in all required fields.', 'error');
                return;
            }

            // Validate email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showMessage('Please enter a valid email address.', 'error');
                return;
            }

            // Show loading state
            submitBtn.disabled = true;
            btnText.textContent = 'Sending...';
            btnIcon.classList.add('hidden');

            // Simulate form submission (replace with actual AJAX call)
            setTimeout(() => {
                // Success response
                showMessage('Thank you! Your message has been sent successfully. We\'ll get back to you soon.', 'success');
                form.reset();

                // Reset button
                submitBtn.disabled = false;
                btnText.textContent = 'Send Message';
                btnIcon.classList.remove('hidden');

                // Optional: Redirect or clear form
            }, 1500);

            // Actual AJAX submission example (uncomment when backend is ready)
            /*
            try {
                const response = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ name, email, phone, service, message })
                });
                
                if (response.ok) {
                    showMessage('Message sent successfully!', 'success');
                    form.reset();
                } else {
                    showMessage('Something went wrong. Please try again.', 'error');
                }
            } catch (error) {
                showMessage('Network error. Please check your connection.', 'error');
            } finally {
                submitBtn.disabled = false;
                btnText.textContent = 'Send Message';
                btnIcon.classList.remove('hidden');
            }
            */
        });
    }

    function showMessage(msg, type) {
        formMessage.textContent = msg;
        formMessage.classList.remove('hidden', 'bg-green-50', 'text-green-800', 'bg-red-50', 'text-red-800', 'bg-yellow-50', 'text-yellow-800');

        if (type === 'success') {
            formMessage.classList.add('bg-green-50', 'text-green-800', 'border', 'border-green-200');
        } else if (type === 'error') {
            formMessage.classList.add('bg-red-50', 'text-red-800', 'border', 'border-red-200');
        } else {
            formMessage.classList.add('bg-yellow-50', 'text-yellow-800', 'border', 'border-yellow-200');
        }

        // Auto hide after 5 seconds
        setTimeout(() => {
            formMessage.classList.add('hidden');
        }, 5000);
    }

    // Input focus effects
    const inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', function () {
            this.parentElement.querySelector('label')?.classList.add('text-purple-600');
        });
        input.addEventListener('blur', function () {
            this.parentElement.querySelector('label')?.classList.remove('text-purple-600');
        });
    });
});