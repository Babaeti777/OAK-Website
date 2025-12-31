# OAK LLC WordPress Theme

A modern, professional WordPress theme for OAK LLC featuring responsive design, smooth animations, and comprehensive SEO optimization.

## Features

- ✨ Modern, clean design with smooth animations
- 📱 Fully responsive (mobile, tablet, desktop)
- 🔍 SEO optimized with structured data
- ⚡ Fast loading and performance optimized
- ♿ Accessibility features (WCAG compliant)
- 🎨 WordPress Customizer integration
- 📧 Contact form with AJAX submission
- 📰 Newsletter subscription
- 🎭 Auto-rotating testimonials slider
- 🔄 Smooth parallax scrolling effects

## Installation Instructions

### Method 1: Upload via WordPress Admin (Recommended)

1. **Download the theme**
   - Download the `oakllc-theme.zip` file

2. **Upload to WordPress**
   - Log in to your WordPress admin panel
   - Go to `Appearance` → `Themes`
   - Click `Add New` → `Upload Theme`
   - Choose the `oakllc-theme.zip` file
   - Click `Install Now`

3. **Activate the theme**
   - After installation, click `Activate`

### Method 2: Manual Installation via FTP

1. **Extract the theme**
   - Unzip the `oakllc-theme.zip` file
   - You should have a folder named `oakllc-theme`

2. **Upload via FTP**
   - Connect to your server via FTP
   - Navigate to `/wp-content/themes/`
   - Upload the `oakllc-theme` folder

3. **Activate the theme**
   - Log in to WordPress admin
   - Go to `Appearance` → `Themes`
   - Find "OAK LLC" theme and click `Activate`

## Theme Setup

### 1. Configure Basic Settings

#### Site Identity
- Go to `Appearance` → `Customize` → `Site Identity`
- Set your **Site Title**: "OAK LLC"
- Set your **Tagline**: Your company description
- Upload a **Logo** (optional - recommended size: 400x100px)
- Upload a **Site Icon** (favicon - 512x512px)

#### Hero Section
- Go to `Appearance` → `Customize` → `Hero Section`
- Customize the hero title and subtitle

#### Contact Information
- Go to `Appearance` → `Customize` → `Contact Information`
- Set your email address
- Set your location

#### Social Media Links
- Go to `Appearance` → `Customize` → `Social Media Links`
- Add your LinkedIn, Twitter, and Facebook URLs

### 2. Set Up Menus

#### Primary Menu
- Go to `Appearance` → `Menus`
- Create a new menu called "Primary Menu"
- Add custom links for single-page sections:
  - **Home**: `#home`
  - **About**: `#about`
  - **Services**: `#services`
  - **Why Us**: `#why-choose-us`
  - **Testimonials**: `#testimonials`
  - **Contact**: `#contact`
- Assign to "Primary Menu" location
- Save the menu

#### Footer Menu (Optional)
- Create another menu for footer links
- Add pages like Privacy Policy, Terms of Service
- Assign to "Footer Menu" location

### 3. Configure Widgets

#### Footer Widgets
- Go to `Appearance` → `Widgets`
- Drag widgets to:
  - **Footer Widget 1**: Navigation or custom links
  - **Footer Widget 2**: Services list or custom menu
  - **Footer Widget 3**: Newsletter or custom content

### 4. Set Homepage

- Go to `Settings` → `Reading`
- Set "Your homepage displays" to "A static page"
- Select a page for Homepage (or create a new one)
- Save changes

### 5. Configure Permalinks

- Go to `Settings` → `Permalinks`
- Choose "Post name" structure (recommended for SEO)
- Save changes

## Customization

### Changing Colors

Edit `/assets/css/main.css` and modify the CSS variables:

```css
:root {
    --primary-color: #2563eb;      /* Main brand color */
    --secondary-color: #0f172a;    /* Secondary color */
    --accent-color: #f59e0b;       /* Accent highlights */
}
```

### Adding Your Logo

1. Go to `Appearance` → `Customize` → `Site Identity`
2. Click "Select Logo"
3. Upload your logo image (transparent PNG recommended)
4. Adjust logo size if needed

### Updating Content

The theme uses a one-page design. To update content:

1. Edit `index.php` for main content
2. Or use WordPress Customizer for dynamic content
3. Modify sections directly in the template files

### Adding Images

1. Upload images to Media Library
2. Replace placeholder SVGs in `index.php`
3. Update image paths to use WordPress functions:
   ```php
   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/your-image.jpg" alt="">
   ```

## Email Configuration

### Contact Form Setup

The contact form sends emails to the WordPress admin email by default.

**To change the recipient:**
Edit `functions.php`, find the `oakllc_handle_contact_form` function:

```php
$to = get_option('admin_email'); // Change this to your email
```

### Newsletter Integration

To integrate with an email service provider:

1. Install a plugin like:
   - Mailchimp for WordPress
   - Newsletter
   - MailPoet

2. Or edit `functions.php` function `oakllc_handle_newsletter` to connect to your service API

## Troubleshooting

### Theme Not Showing Correctly

1. **Clear cache**:
   - Clear browser cache (Ctrl+Shift+Del)
   - Clear WordPress cache if using a caching plugin

2. **Check WordPress version**:
   - Requires WordPress 5.8 or higher

3. **PHP version**:
   - Requires PHP 7.4 or higher

### Forms Not Working

1. **Check AJAX URL**:
   - Ensure JavaScript is loading
   - Check browser console for errors

2. **Email not sending**:
   - Install WP Mail SMTP plugin
   - Configure SMTP settings
   - Test email delivery

### Mobile Menu Not Working

1. **JavaScript errors**:
   - Check browser console
   - Ensure no plugin conflicts

2. **Clear cache and reload page**

## Browser Support

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## SEO Optimization

### Built-in SEO Features

- ✅ Structured data (JSON-LD)
- ✅ Open Graph meta tags
- ✅ Twitter Card support
- ✅ Semantic HTML5 markup
- ✅ Mobile-friendly design

### Recommended Plugins

- **Yoast SEO** or **Rank Math**: Advanced SEO features
- **WP Super Cache** or **W3 Total Cache**: Performance optimization
- **Smush**: Image optimization
- **WP Mail SMTP**: Reliable email delivery

## Performance Optimization

### Recommended Optimizations

1. **Install a caching plugin**:
   - WP Super Cache
   - W3 Total Cache
   - WP Rocket (premium)

2. **Optimize images**:
   - Use WebP format
   - Install Smush or EWWW Image Optimizer

3. **Use a CDN**:
   - Cloudflare (free)
   - StackPath
   - KeyCDN

4. **Minimize plugins**:
   - Only use essential plugins
   - Deactivate unused plugins

## Backup & Security

### Recommended Security Practices

1. **Keep WordPress updated**
2. **Use strong passwords**
3. **Install security plugin**:
   - Wordfence Security
   - Sucuri Security
   - iThemes Security

4. **Regular backups**:
   - UpdraftPlus
   - BackupBuddy
   - VaultPress

## Theme Structure

```
oakllc-theme/
├── style.css              # Theme header
├── functions.php          # Theme functions
├── index.php              # Main template
├── header.php             # Header template
├── footer.php             # Footer template
├── assets/
│   ├── css/
│   │   └── main.css       # Main stylesheet
│   ├── js/
│   │   └── main.js        # Main JavaScript
│   └── images/            # Theme images
├── inc/                   # Additional functions
├── template-parts/        # Template partials
└── README.md              # This file
```

## Support & Documentation

### Getting Help

- **Theme Documentation**: This README file
- **WordPress Codex**: https://codex.wordpress.org/
- **WordPress Support Forums**: https://wordpress.org/support/

### Customization Services

For custom development or modifications:
- Email: info@oakllc.co
- Website: https://oakllc.co

## Changelog

### Version 1.0.0
- Initial release
- Modern responsive design
- SEO optimization
- Contact form with AJAX
- Newsletter subscription
- Testimonials slider
- WordPress Customizer integration

## Credits

- **Fonts**: Google Fonts (Inter, Playfair Display)
- **Icons**: Custom SVG icons
- **Framework**: WordPress

## License

This theme is licensed under the GPL v2 or later.

© 2024 OAK LLC. All rights reserved.

---

**Need help?** Contact us at info@oakllc.co
