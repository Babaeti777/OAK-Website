<?php
/**
 * The main template file
 *
 * @package OAK_LLC
 * @since 1.0.0
 */

get_header();
?>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="animated-bg">
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="title-line"><?php esc_html_e('Transform Your', 'oakllc'); ?></span>
                    <span class="title-line highlight"><?php esc_html_e('Business Vision', 'oakllc'); ?></span>
                    <span class="title-line"><?php esc_html_e('Into Reality', 'oakllc'); ?></span>
                </h1>
                <p class="hero-subtitle">
                    <?php echo esc_html(get_theme_mod('hero_subtitle', 'Expert consulting and innovative solutions that drive growth, efficiency, and sustainable success for your organization.')); ?>
                </p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary"><?php esc_html_e('Get Started', 'oakllc'); ?></a>
                    <a href="#services" class="btn btn-secondary"><?php esc_html_e('Our Services', 'oakllc'); ?></a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number" data-target="500">0</span>
                        <span class="stat-label"><?php esc_html_e('Projects Completed', 'oakllc'); ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="250">0</span>
                        <span class="stat-label"><?php esc_html_e('Happy Clients', 'oakllc'); ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="15">0</span>
                        <span class="stat-label"><?php esc_html_e('Years Experience', 'oakllc'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <span><?php esc_html_e('Scroll Down', 'oakllc'); ?></span>
            <div class="mouse"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><?php esc_html_e('About Us', 'oakllc'); ?></span>
                <h2 class="section-title"><?php esc_html_e('Building Success Through Innovation', 'oakllc'); ?></h2>
                <p class="section-description">
                    <?php esc_html_e('At OAK LLC, we combine industry expertise with cutting-edge solutions to help businesses thrive in an ever-evolving marketplace.', 'oakllc'); ?>
                </p>
            </div>
            <div class="about-content">
                <div class="about-image">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                            <svg viewBox="0 0 400 500" xmlns="http://www.w3.org/2000/svg">
                                <rect width="400" height="500" fill="#f0f4f8"/>
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#64748b" font-size="24" font-family="Inter, sans-serif">About OAK LLC</text>
                            </svg>
                        </div>
                        <div class="image-decoration"></div>
                    </div>
                </div>
                <div class="about-text">
                    <h3><?php esc_html_e('Who We Are', 'oakllc'); ?></h3>
                    <p>
                        <?php esc_html_e('OAK LLC is a premier consulting firm dedicated to delivering exceptional business solutions. With over 15 years of experience, we\'ve helped hundreds of organizations achieve their goals through strategic planning, operational excellence, and innovative thinking.', 'oakllc'); ?>
                    </p>
                    <p>
                        <?php esc_html_e('Our team of seasoned professionals brings diverse expertise across multiple industries, ensuring that we can tackle any challenge with confidence and deliver results that exceed expectations.', 'oakllc'); ?>
                    </p>
                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-icon">✓</div>
                            <div class="feature-content">
                                <h4><?php esc_html_e('Expert Team', 'oakllc'); ?></h4>
                                <p><?php esc_html_e('Seasoned professionals with proven track records', 'oakllc'); ?></p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">✓</div>
                            <div class="feature-content">
                                <h4><?php esc_html_e('Proven Results', 'oakllc'); ?></h4>
                                <p><?php esc_html_e('Measurable outcomes that drive real business value', 'oakllc'); ?></p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">✓</div>
                            <div class="feature-content">
                                <h4><?php esc_html_e('Client-Focused', 'oakllc'); ?></h4>
                                <p><?php esc_html_e('Your success is our top priority', 'oakllc'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><?php esc_html_e('What We Do', 'oakllc'); ?></span>
                <h2 class="section-title"><?php esc_html_e('Our Services', 'oakllc'); ?></h2>
                <p class="section-description">
                    <?php esc_html_e('Comprehensive solutions tailored to your unique business needs', 'oakllc'); ?>
                </p>
            </div>
            <div class="services-grid">
                <?php
                $services = array(
                    array(
                        'title' => __('Business Consulting', 'oakllc'),
                        'description' => __('Strategic guidance to optimize operations, increase efficiency, and drive sustainable growth for your organization.', 'oakllc'),
                        'icon' => '<path d="M9 3H15L21 9V19C21 20.1 20.1 21 19 21H5C3.9 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 3V9H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'
                    ),
                    array(
                        'title' => __('Strategic Planning', 'oakllc'),
                        'description' => __('Develop comprehensive strategies aligned with your vision and market opportunities for long-term success.', 'oakllc'),
                        'icon' => '<path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'
                    ),
                    array(
                        'title' => __('Project Management', 'oakllc'),
                        'description' => __('End-to-end project oversight ensuring timely delivery, budget adherence, and quality outcomes.', 'oakllc'),
                        'icon' => '<circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>'
                    ),
                    array(
                        'title' => __('Financial Analysis', 'oakllc'),
                        'description' => __('In-depth financial insights and analysis to make informed decisions and maximize profitability.', 'oakllc'),
                        'icon' => '<path d="M21 16V8C21 6.9 20.1 6 19 6H5C3.9 6 3 6.9 3 8V16C3 17.1 3.9 18 5 18H19C20.1 18 21 17.1 21 16Z" stroke="currentColor" stroke-width="2"/><path d="M3 10H21" stroke="currentColor" stroke-width="2"/>'
                    ),
                    array(
                        'title' => __('Team Development', 'oakllc'),
                        'description' => __('Build high-performing teams through training, coaching, and organizational development programs.', 'oakllc'),
                        'icon' => '<path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M23 21V19C23 18 22.7 17 22.2 16.2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89317 18.7122 8.75608 18.1676 9.45768C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'
                    ),
                    array(
                        'title' => __('Digital Transformation', 'oakllc'),
                        'description' => __('Leverage technology and innovation to modernize your business and stay ahead of the competition.', 'oakllc'),
                        'icon' => '<path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'
                    ),
                );

                foreach ($services as $service) :
                ?>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <?php echo $service['icon']; ?>
                        </svg>
                    </div>
                    <h3><?php echo esc_html($service['title']); ?></h3>
                    <p><?php echo esc_html($service['description']); ?></p>
                    <a href="#contact" class="service-link"><?php esc_html_e('Learn More →', 'oakllc'); ?></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="why-choose">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><?php esc_html_e('Our Advantages', 'oakllc'); ?></span>
                <h2 class="section-title"><?php esc_html_e('Why Choose OAK LLC', 'oakllc'); ?></h2>
                <p class="section-description">
                    <?php esc_html_e('Discover what sets us apart from the competition', 'oakllc'); ?>
                </p>
            </div>
            <div class="why-grid">
                <div class="why-card">
                    <div class="why-number">01</div>
                    <h3><?php esc_html_e('Industry Expertise', 'oakllc'); ?></h3>
                    <p><?php esc_html_e('Our team brings decades of combined experience across various industries, ensuring deep understanding of your unique challenges.', 'oakllc'); ?></p>
                </div>
                <div class="why-card">
                    <div class="why-number">02</div>
                    <h3><?php esc_html_e('Customized Solutions', 'oakllc'); ?></h3>
                    <p><?php esc_html_e('We don\'t believe in one-size-fits-all. Every solution is tailored specifically to your business needs and goals.', 'oakllc'); ?></p>
                </div>
                <div class="why-card">
                    <div class="why-number">03</div>
                    <h3><?php esc_html_e('Proven Track Record', 'oakllc'); ?></h3>
                    <p><?php esc_html_e('With 500+ successful projects and 250+ satisfied clients, our results speak for themselves.', 'oakllc'); ?></p>
                </div>
                <div class="why-card">
                    <div class="why-number">04</div>
                    <h3><?php esc_html_e('Ongoing Support', 'oakllc'); ?></h3>
                    <p><?php esc_html_e('We\'re with you every step of the way, providing continuous support and guidance long after project completion.', 'oakllc'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><?php esc_html_e('Client Reviews', 'oakllc'); ?></span>
                <h2 class="section-title"><?php esc_html_e('What Our Clients Say', 'oakllc'); ?></h2>
                <p class="section-description">
                    <?php esc_html_e('Don\'t just take our word for it - hear from those we\'ve helped', 'oakllc'); ?>
                </p>
            </div>
            <div class="testimonials-slider">
                <div class="testimonial-track" id="testimonialTrack">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <p class="testimonial-text">
                            <?php esc_html_e('"OAK LLC transformed our business operations completely. Their strategic insights and hands-on approach helped us increase efficiency by 40% in just six months."', 'oakllc'); ?>
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">JS</div>
                            <div class="author-info">
                                <h4><?php esc_html_e('John Smith', 'oakllc'); ?></h4>
                                <p><?php esc_html_e('CEO, Tech Innovations Inc.', 'oakllc'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <p class="testimonial-text">
                            <?php esc_html_e('"Professional, knowledgeable, and results-driven. The team at OAK LLC exceeded our expectations and delivered exceptional value for our investment."', 'oakllc'); ?>
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">MJ</div>
                            <div class="author-info">
                                <h4><?php esc_html_e('Maria Johnson', 'oakllc'); ?></h4>
                                <p><?php esc_html_e('COO, Global Enterprises', 'oakllc'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-rating">★★★★★</div>
                        <p class="testimonial-text">
                            <?php esc_html_e('"Their expertise in digital transformation was exactly what we needed. OAK LLC helped us modernize our processes and stay competitive in our industry."', 'oakllc'); ?>
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">RW</div>
                            <div class="author-info">
                                <h4><?php esc_html_e('Robert Williams', 'oakllc'); ?></h4>
                                <p><?php esc_html_e('Founder, StartUp Solutions', 'oakllc'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-controls">
                    <button class="testimonial-prev" aria-label="<?php esc_attr_e('Previous testimonial', 'oakllc'); ?>">‹</button>
                    <button class="testimonial-next" aria-label="<?php esc_attr_e('Next testimonial', 'oakllc'); ?>">›</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><?php esc_html_e('Get In Touch', 'oakllc'); ?></span>
                <h2 class="section-title"><?php esc_html_e('Let\'s Start a Conversation', 'oakllc'); ?></h2>
                <p class="section-description">
                    <?php esc_html_e('Ready to transform your business? Contact us today for a free consultation.', 'oakllc'); ?>
                </p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3><?php esc_html_e('Contact Information', 'oakllc'); ?></h3>
                    <p><?php esc_html_e('We\'re here to help and answer any questions you might have. We look forward to hearing from you!', 'oakllc'); ?></p>
                    <div class="info-items">
                        <div class="info-item">
                            <div class="info-icon">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="info-text">
                                <h4><?php esc_html_e('Office Location', 'oakllc'); ?></h4>
                                <p><?php echo esc_html(get_theme_mod('contact_location', 'United States')); ?></p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="info-text">
                                <h4><?php esc_html_e('Email Address', 'oakllc'); ?></h4>
                                <p><a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'info@oakllc.co')); ?>"><?php echo esc_html(get_theme_mod('contact_email', 'info@oakllc.co')); ?></a></p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 16.92V19.92C22 20.4728 21.5523 20.92 21 20.92H3C2.44772 20.92 2 20.4728 2 19.92V16.92" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="info-text">
                                <h4><?php esc_html_e('Business Hours', 'oakllc'); ?></h4>
                                <p><?php esc_html_e('Mon - Fri: 9:00 AM - 6:00 PM', 'oakllc'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name"><?php esc_html_e('Your Name', 'oakllc'); ?></label>
                        <input type="text" id="name" name="name" required placeholder="<?php esc_attr_e('John Doe', 'oakllc'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="email"><?php esc_html_e('Email Address', 'oakllc'); ?></label>
                        <input type="email" id="email" name="email" required placeholder="<?php esc_attr_e('john@example.com', 'oakllc'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="subject"><?php esc_html_e('Subject', 'oakllc'); ?></label>
                        <input type="text" id="subject" name="subject" required placeholder="<?php esc_attr_e('How can we help?', 'oakllc'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="message"><?php esc_html_e('Message', 'oakllc'); ?></label>
                        <textarea id="message" name="message" rows="5" required placeholder="<?php esc_attr_e('Tell us about your project...', 'oakllc'); ?>"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php esc_html_e('Send Message', 'oakllc'); ?></button>
                </form>
            </div>
        </div>
    </section>

<?php
get_footer();
