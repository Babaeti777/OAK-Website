<?php
/**
 * The header for OAK LLC theme
 *
 * @package OAK_LLC
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head(); ?>

    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "<?php bloginfo('name'); ?>",
      "url": "<?php echo esc_url(home_url('/')); ?>",
      "logo": "<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>",
      "description": "<?php bloginfo('description'); ?>",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "US"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Business Inquiries",
        "email": "<?php echo esc_attr(get_theme_mod('contact_email', 'info@oakllc.co')); ?>"
      }
    }
    </script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php if (has_custom_logo()) :
                            the_custom_logo();
                        else : ?>
                            <span class="logo-text">OAK</span>
                            <span class="logo-subtitle">LLC</span>
                        <?php endif; ?>
                    </a>
                </div>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'navMenu',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'fallback_cb'    => 'oakllc_default_menu',
                ));
                ?>

                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="<?php esc_attr_e('Toggle mobile menu', 'oakllc'); ?>">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

<?php
/**
 * Fallback menu if no menu is set
 */
function oakllc_default_menu() {
    echo '<ul class="nav-menu" id="navMenu">';
    echo '<li><a href="#home" class="nav-link active">' . esc_html__('Home', 'oakllc') . '</a></li>';
    echo '<li><a href="#about" class="nav-link">' . esc_html__('About', 'oakllc') . '</a></li>';
    echo '<li><a href="#services" class="nav-link">' . esc_html__('Services', 'oakllc') . '</a></li>';
    echo '<li><a href="#why-choose-us" class="nav-link">' . esc_html__('Why Us', 'oakllc') . '</a></li>';
    echo '<li><a href="#testimonials" class="nav-link">' . esc_html__('Testimonials', 'oakllc') . '</a></li>';
    echo '<li><a href="#contact" class="nav-link">' . esc_html__('Contact', 'oakllc') . '</a></li>';
    echo '</ul>';
}
