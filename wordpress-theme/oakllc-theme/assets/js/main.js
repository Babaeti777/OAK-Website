// ===================================
// Preloader
// ===================================
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    setTimeout(() => {
        preloader.classList.add('hidden');
    }, 500);
});

// ===================================
// Navigation
// ===================================
const navbar = document.getElementById('navbar');
const mobileMenuToggle = document.getElementById('mobileMenuToggle');
const navMenu = document.getElementById('navMenu');
const navLinks = document.querySelectorAll('.nav-link, .menu-item a');

// Navbar scroll effect
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Mobile menu toggle
if (mobileMenuToggle) {
    mobileMenuToggle.addEventListener('click', () => {
        mobileMenuToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
        document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
    });
}

// Close mobile menu when clicking on a link
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (mobileMenuToggle) {
            mobileMenuToggle.classList.remove('active');
        }
        navMenu.classList.remove('active');
        document.body.style.overflow = '';
    });
});

// Active nav link on scroll
const sections = document.querySelectorAll('section[id]');

const updateActiveNavLink = () => {
    const scrollY = window.pageYOffset;

    sections.forEach(section => {
        const sectionHeight = section.offsetHeight;
        const sectionTop = section.offsetTop - 100;
        const sectionId = section.getAttribute('id');
        const navLink = document.querySelector(`.nav-link[href="#${sectionId}"], .menu-item a[href*="#${sectionId}"]`);

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            navLinks.forEach(link => link.classList.remove('active'));
            if (navLink) navLink.classList.add('active');
        }
    });
};

window.addEventListener('scroll', updateActiveNavLink);

// ===================================
// Smooth Scrolling
// ===================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href === '#' || href === '#0') return;

        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
            const offsetTop = target.offsetTop - 80;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// ===================================
// Counter Animation
// ===================================
const animateCounter = (element, target, duration = 2000) => {
    let start = 0;
    const increment = target / (duration / 16);
    const timer = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.textContent = target;
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(start);
        }
    }, 16);
};

// Intersection Observer for counter animation
const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
            const target = parseInt(entry.target.getAttribute('data-target'));
            animateCounter(entry.target, target);
            entry.target.classList.add('counted');
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('.stat-number').forEach(counter => {
    counterObserver.observe(counter);
});

// ===================================
// Testimonials Slider
// ===================================
const testimonialTrack = document.getElementById('testimonialTrack');
const testimonialPrev = document.querySelector('.testimonial-prev');
const testimonialNext = document.querySelector('.testimonial-next');
const testimonialCards = document.querySelectorAll('.testimonial-card');

if (testimonialCards.length > 0) {
    let currentTestimonial = 0;
    const totalTestimonials = testimonialCards.length;

    const updateTestimonialSlider = () => {
        const cardWidth = testimonialCards[0].offsetWidth;
        const gap = 30;
        const offset = -(currentTestimonial * (cardWidth + gap));
        testimonialTrack.style.transform = `translateX(${offset}px)`;
    };

    if (testimonialNext) {
        testimonialNext.addEventListener('click', () => {
            currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
            updateTestimonialSlider();
        });
    }

    if (testimonialPrev) {
        testimonialPrev.addEventListener('click', () => {
            currentTestimonial = (currentTestimonial - 1 + totalTestimonials) % totalTestimonials;
            updateTestimonialSlider();
        });
    }

    // Auto-slide testimonials
    let testimonialInterval = setInterval(() => {
        currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
        updateTestimonialSlider();
    }, 5000);

    // Reset interval on manual navigation
    [testimonialNext, testimonialPrev].forEach(btn => {
        if (btn) {
            btn.addEventListener('click', () => {
                clearInterval(testimonialInterval);
                testimonialInterval = setInterval(() => {
                    currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
                    updateTestimonialSlider();
                }, 5000);
            });
        }
    });

    // Update slider on window resize
    window.addEventListener('resize', updateTestimonialSlider);
}

// ===================================
// Contact Form - WordPress AJAX
// ===================================
const contactForm = document.getElementById('contactForm');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;

        // Get form data
        const formData = new FormData(contactForm);
        formData.append('action', 'oakllc_contact_form');
        formData.append('nonce', oakllc_ajax.nonce);

        // Send AJAX request
        fetch(oakllc_ajax.ajax_url, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.data.message);
                contactForm.reset();
            } else {
                alert(data.data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Sorry, there was an error sending your message. Please try again.');
        })
        .finally(() => {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        });
    });
}

// ===================================
// Newsletter Form - WordPress AJAX
// ===================================
const newsletterForm = document.getElementById('newsletterForm');

if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const email = newsletterForm.querySelector('input[type="email"]').value;
        const submitBtn = newsletterForm.querySelector('button[type="submit"]');
        submitBtn.disabled = true;

        const formData = new FormData();
        formData.append('action', 'oakllc_newsletter');
        formData.append('email', email);
        formData.append('nonce', oakllc_ajax.nonce);

        fetch(oakllc_ajax.ajax_url, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.data.message);
                newsletterForm.reset();
            } else {
                alert(data.data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Sorry, there was an error. Please try again.');
        })
        .finally(() => {
            submitBtn.disabled = false;
        });
    });
}

// ===================================
// Back to Top Button
// ===================================
const backToTop = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTop.classList.add('visible');
    } else {
        backToTop.classList.remove('visible');
    }
});

if (backToTop) {
    backToTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// ===================================
// Fade-in Animation on Scroll
// ===================================
const fadeInObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
});

// Add fade-in class to elements
const fadeInElements = document.querySelectorAll('.service-card, .why-card, .testimonial-card, .feature-item');
fadeInElements.forEach((el, index) => {
    el.classList.add('fade-in');
    el.style.transitionDelay = `${index * 0.1}s`;
    fadeInObserver.observe(el);
});

// ===================================
// Service Cards Hover Effect
// ===================================
const serviceCards = document.querySelectorAll('.service-card');

serviceCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-8px) scale(1.02)';
    });

    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(-8px)';
    });
});

// ===================================
// Parallax Effect for Hero Section
// ===================================
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const heroContent = document.querySelector('.hero-content');
    const circles = document.querySelectorAll('.circle');

    if (heroContent && scrolled < window.innerHeight) {
        heroContent.style.transform = `translateY(${scrolled * 0.5}px)`;
        heroContent.style.opacity = 1 - (scrolled / window.innerHeight) * 1.5;
    }

    circles.forEach((circle, index) => {
        const speed = 0.3 + (index * 0.1);
        circle.style.transform = `translate(${scrolled * speed}px, ${scrolled * speed}px)`;
    });
});

// ===================================
// Performance Optimization
// ===================================
// Debounce function for scroll events
const debounce = (func, wait = 10) => {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
};

// Apply debounce to scroll handlers
const debouncedScroll = debounce(() => {
    updateActiveNavLink();
}, 10);

window.addEventListener('scroll', debouncedScroll);

// ===================================
// Accessibility Enhancements
// ===================================
// Add keyboard navigation for testimonial slider
document.addEventListener('keydown', (e) => {
    if (testimonialPrev && testimonialNext) {
        if (e.key === 'ArrowLeft') {
            testimonialPrev.click();
        } else if (e.key === 'ArrowRight') {
            testimonialNext.click();
        }
    }
});

// Focus management for mobile menu
if (navMenu) {
    navMenu.addEventListener('transitionend', function() {
        if (this.classList.contains('active')) {
            const firstLink = this.querySelector('.nav-link, .menu-item a');
            if (firstLink) firstLink.focus();
        }
    });
}

// ===================================
// Form Validation Enhancement
// ===================================
const validateEmail = (email) => {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
};

const formInputs = document.querySelectorAll('.contact-form input, .contact-form textarea');

formInputs.forEach(input => {
    input.addEventListener('blur', function() {
        if (this.value.trim() === '' && this.hasAttribute('required')) {
            this.style.borderColor = '#ef4444';
        } else if (this.type === 'email' && !validateEmail(this.value)) {
            this.style.borderColor = '#ef4444';
        } else {
            this.style.borderColor = '';
        }
    });

    input.addEventListener('focus', function() {
        this.style.borderColor = '';
    });
});

// ===================================
// Console Welcome Message
// ===================================
console.log('%c OAK LLC Website ', 'background: #2563eb; color: white; font-size: 20px; padding: 10px; border-radius: 5px;');
console.log('%c Built with WordPress and modern web technologies ', 'font-size: 12px; color: #64748b;');

// ===================================
// Loading Animation Complete
// ===================================
document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.add('loaded');

    // Initialize AOS (Animate On Scroll) alternative
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all sections
    document.querySelectorAll('section').forEach(section => {
        observer.observe(section);
    });
});
