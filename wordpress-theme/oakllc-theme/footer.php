<?php
/**
 * The footer for OAK LLC theme
 *
 * @package OAK_LLC
 * @since 1.0.0
 */
?>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <div class="footer-logo">
                        <?php if (has_custom_logo()) :
                            the_custom_logo();
                        else : ?>
                            <span class="logo-text">OAK</span>
                            <span class="logo-subtitle">LLC</span>
                        <?php endif; ?>
                    </div>
                    <p><?php echo esc_html(get_bloginfo('description')); ?></p>
                    <div class="social-links">
                        <?php
                        $social_networks = array(
                            'linkedin' => '<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>',
                            'twitter'  => '<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>',
                            'facebook' => '<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>'
                        );

                        foreach ($social_networks as $network => $path) {
                            $url = get_theme_mod('social_' . $network, '#');
                            if ($url && $url !== '#') : ?>
                                <a href="<?php echo esc_url($url); ?>" aria-label="<?php echo esc_attr(ucfirst($network)); ?>" class="social-link" target="_blank" rel="noopener noreferrer">
                                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <?php echo $path; ?>
                                    </svg>
                                </a>
                            <?php endif;
                        }
                        ?>
                    </div>
                </div>

                <?php if (is_active_sidebar('footer-1')) : ?>
                    <div class="footer-col">
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>
                <?php else : ?>
                    <div class="footer-col">
                        <h3><?php esc_html_e('Quick Links', 'oakllc'); ?></h3>
                        <ul>
                            <li><a href="#home"><?php esc_html_e('Home', 'oakllc'); ?></a></li>
                            <li><a href="#about"><?php esc_html_e('About Us', 'oakllc'); ?></a></li>
                            <li><a href="#services"><?php esc_html_e('Services', 'oakllc'); ?></a></li>
                            <li><a href="#contact"><?php esc_html_e('Contact', 'oakllc'); ?></a></li>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-2')) : ?>
                    <div class="footer-col">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                <?php else : ?>
                    <div class="footer-col">
                        <h3><?php esc_html_e('Services', 'oakllc'); ?></h3>
                        <ul>
                            <li><a href="#services"><?php esc_html_e('Business Consulting', 'oakllc'); ?></a></li>
                            <li><a href="#services"><?php esc_html_e('Strategic Planning', 'oakllc'); ?></a></li>
                            <li><a href="#services"><?php esc_html_e('Project Management', 'oakllc'); ?></a></li>
                            <li><a href="#services"><?php esc_html_e('Digital Transformation', 'oakllc'); ?></a></li>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-3')) : ?>
                    <div class="footer-col">
                        <?php dynamic_sidebar('footer-3'); ?>
                    </div>
                <?php else : ?>
                    <div class="footer-col">
                        <h3><?php esc_html_e('Newsletter', 'oakllc'); ?></h3>
                        <p><?php esc_html_e('Subscribe to our newsletter for updates and insights.', 'oakllc'); ?></p>
                        <form class="newsletter-form" id="newsletterForm">
                            <input type="email" name="newsletter_email" placeholder="<?php esc_attr_e('Your email', 'oakllc'); ?>" required>
                            <button type="submit" aria-label="<?php esc_attr_e('Subscribe', 'oakllc'); ?>">→</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'oakllc'); ?></p>
                <div class="footer-links">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'depth'          => 1,
                        'fallback_cb'    => false,
                    ));
                    ?>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top" aria-label="<?php esc_attr_e('Back to top', 'oakllc'); ?>">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 19V5M5 12L12 5L19 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

<?php wp_footer(); ?>
</body>
</html>
