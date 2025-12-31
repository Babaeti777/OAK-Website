# WordPress Theme Installation Guide

Complete guide to upload and install the OAK LLC WordPress theme.

## 📦 What's Included

The WordPress theme is ready to upload at:
```
wordpress-theme/oakllc-theme.zip
```

## 🚀 Quick Start Guide

### Prerequisites

Before you begin, make sure you have:
- ✅ WordPress installed (version 5.8 or higher)
- ✅ PHP 7.4 or higher
- ✅ Admin access to your WordPress site

### Installation Steps

#### Step 1: Download the Theme

The theme is packaged as: `wordpress-theme/oakllc-theme.zip`

#### Step 2: Upload to WordPress

1. **Log in to WordPress Admin**
   - Go to your website URL + `/wp-admin`
   - Example: `https://oakllc.co/wp-admin`

2. **Navigate to Themes**
   - In the WordPress dashboard, go to `Appearance` → `Themes`

3. **Add New Theme**
   - Click the `Add New` button at the top
   - Click `Upload Theme` button

4. **Upload ZIP File**
   - Click `Choose File`
   - Select `oakllc-theme.zip` from your computer
   - Click `Install Now`

5. **Activate Theme**
   - Once uploaded, click `Activate`
   - Your theme is now live!

## ⚙️ Theme Configuration

### 1. Basic Setup

#### Configure Site Identity
```
Dashboard → Appearance → Customize → Site Identity
```
- Set **Site Title**: "OAK LLC"
- Set **Tagline**: Your business description
- Upload **Logo** (optional, recommended: 400x100px transparent PNG)
- Upload **Site Icon** (favicon, 512x512px)

#### Configure Hero Section
```
Dashboard → Appearance → Customize → Hero Section
```
- Customize hero title
- Update hero subtitle
- Change call-to-action text

#### Set Contact Information
```
Dashboard → Appearance → Customize → Contact Information
```
- Add your **Email Address**
- Set your **Location**
- Update business hours if needed

#### Add Social Media Links
```
Dashboard → Appearance → Customize → Social Media Links
```
- LinkedIn URL
- Twitter URL
- Facebook URL

### 2. Create Navigation Menu

```
Dashboard → Appearance → Menus
```

1. **Create New Menu**
   - Menu Name: "Primary Menu"
   - Click `Create Menu`

2. **Add Custom Links** (for one-page design):
   ```
   Home       →  #home
   About      →  #about
   Services   →  #services
   Why Us     →  #why-choose-us
   Testimonials → #testimonials
   Contact    →  #contact
   ```

3. **Assign to Location**
   - Check "Primary Menu" under Menu Settings
   - Click `Save Menu`

### 3. Set Up Homepage

```
Dashboard → Settings → Reading
```
- Select "A static page" for homepage displays
- Choose a page for Homepage (create one if needed)
- Save changes

### 4. Configure Permalinks (Important for SEO)

```
Dashboard → Settings → Permalinks
```
- Select "Post name" structure
- Save changes

## 📧 Email Setup

### Configure Contact Form

The contact form sends to WordPress admin email by default.

**To test email functionality:**
1. Send a test message through the contact form
2. Check your admin email inbox

**If emails aren't sending:**
1. Install **WP Mail SMTP** plugin
2. Configure with your email provider
3. Test email delivery

### Newsletter Integration

**Option 1: Use Default (sends to admin email)**
- No additional setup needed
- All subscriptions go to admin email

**Option 2: Integrate with Email Service**
Install one of these plugins:
- **Mailchimp for WordPress** - Connect to Mailchimp
- **Newsletter** - Self-hosted newsletter
- **MailPoet** - Advanced email marketing

## 🎨 Customization Options

### Change Brand Colors

Edit theme colors via:
```
Dashboard → Appearance → Theme File Editor
→ assets/css/main.css
```

Find and modify:
```css
:root {
    --primary-color: #2563eb;      /* Your brand color */
    --secondary-color: #0f172a;    /* Dark color */
    --accent-color: #f59e0b;       /* Accent color */
}
```

### Upload Images

1. **Logo**
   - Go to `Customize → Site Identity → Select Logo`
   - Upload transparent PNG (recommended)

2. **Content Images**
   - Replace placeholder SVGs in content sections
   - Upload via Media Library
   - Update image paths in theme files

### Edit Content

The theme uses a one-page design. To edit content:

1. **Via Theme Editor**:
   ```
   Dashboard → Appearance → Theme File Editor
   → index.php
   ```

2. **Direct File Access**:
   - Use FTP/cPanel to edit files
   - Path: `/wp-content/themes/oakllc-theme/index.php`

## 🔌 Recommended Plugins

### Essential Plugins

1. **SEO** - Choose one:
   - Yoast SEO (free)
   - Rank Math (free)
   - All in One SEO (free)

2. **Performance** - Choose one:
   - WP Super Cache (free)
   - W3 Total Cache (free)
   - WP Rocket (premium)

3. **Security** - Choose one:
   - Wordfence Security (free)
   - Sucuri Security (free)
   - iThemes Security (free)

4. **Backup**:
   - UpdraftPlus (free)
   - BackupBuddy (premium)

5. **Forms** (if needed):
   - Contact Form 7 (free)
   - WPForms (free/premium)

6. **Email**:
   - WP Mail SMTP (free)

### Optional Enhancements

- **Google Analytics**: MonsterInsights or GA Google Analytics
- **Cookie Consent**: Cookie Notice & Compliance
- **Image Optimization**: Smush or EWWW Image Optimizer
- **SSL**: Really Simple SSL

## 🐛 Troubleshooting

### Theme Doesn't Look Right

**Solution 1: Clear Cache**
```
1. Clear browser cache (Ctrl+Shift+Delete)
2. If using caching plugin, clear WordPress cache
3. Hard refresh page (Ctrl+F5)
```

**Solution 2: Check Requirements**
```
- WordPress 5.8+
- PHP 7.4+
- Modern browser
```

### Contact Form Not Working

**Check 1: JavaScript Loading**
- Open browser console (F12)
- Look for JavaScript errors
- Ensure no plugin conflicts

**Check 2: Email Configuration**
- Install WP Mail SMTP plugin
- Configure SMTP settings
- Send test email

**Check 3: AJAX URL**
- Verify AJAX is working
- Check for 403/404 errors

### Mobile Menu Not Opening

**Solution:**
```
1. Clear cache
2. Check for JavaScript errors in console
3. Disable other plugins temporarily
4. Check for theme conflicts
```

### White Screen After Activation

**Solution:**
```
1. Access via FTP/cPanel
2. Rename theme folder temporarily
3. WordPress will revert to default theme
4. Check PHP error logs
5. Increase PHP memory limit
```

Add to `wp-config.php`:
```php
define('WP_MEMORY_LIMIT', '256M');
```

## 🚀 Performance Optimization

### 1. Enable Caching

Install and configure:
- WP Super Cache or W3 Total Cache
- Set cache expiration to 24 hours
- Enable GZIP compression

### 2. Optimize Images

- Install Smush or EWWW Image Optimizer
- Convert images to WebP format
- Compress existing images

### 3. Use a CDN

Free CDN options:
- Cloudflare (recommended)
- jsDelivr
- Photon (Jetpack)

### 4. Minimize Plugins

- Only keep essential plugins active
- Remove unused plugins
- Combine functionality where possible

### 5. Database Optimization

- Install WP-Optimize
- Clean up revisions, drafts, spam
- Optimize database tables

## 🔒 Security Best Practices

1. **Keep Everything Updated**
   - WordPress core
   - Themes
   - Plugins

2. **Use Strong Passwords**
   - 12+ characters
   - Mix of letters, numbers, symbols
   - Unique for each account

3. **Limit Login Attempts**
   - Install Limit Login Attempts Reloaded
   - Block brute force attacks

4. **Enable SSL**
   - Install SSL certificate
   - Force HTTPS
   - Use Really Simple SSL plugin

5. **Regular Backups**
   - Daily automatic backups
   - Store off-site
   - Test restoration process

## 📱 Mobile Responsiveness

The theme is fully responsive. To test:

1. **Browser DevTools**:
   - Press F12
   - Click mobile device icon
   - Test various screen sizes

2. **Google Mobile-Friendly Test**:
   - Visit: https://search.google.com/test/mobile-friendly
   - Enter your website URL
   - Review results

## 🎯 SEO Optimization

### Built-in Features

- ✅ Structured data (JSON-LD)
- ✅ Open Graph tags
- ✅ Twitter Cards
- ✅ Semantic HTML5
- ✅ Mobile-friendly
- ✅ Fast loading

### Additional Steps

1. **Install SEO Plugin** (Yoast SEO or Rank Math)

2. **Submit Sitemap**:
   ```
   Google Search Console → Add sitemap
   Sitemap URL: https://yoursite.com/sitemap.xml
   ```

3. **Optimize Content**:
   - Use descriptive titles
   - Write meta descriptions
   - Add alt text to images
   - Use heading hierarchy (H1, H2, H3)

4. **Google Analytics**:
   - Install MonsterInsights or GA plugin
   - Add tracking code
   - Monitor traffic

## 📊 Testing Checklist

Before going live, test:

- [ ] All navigation links work
- [ ] Contact form submits successfully
- [ ] Newsletter subscription works
- [ ] Mobile menu opens/closes
- [ ] Responsive on mobile devices
- [ ] Cross-browser compatibility
- [ ] Page load speed (under 3 seconds)
- [ ] SSL certificate active (HTTPS)
- [ ] 404 pages display correctly
- [ ] Images load properly
- [ ] No JavaScript console errors
- [ ] Forms validate correctly
- [ ] Social links work
- [ ] SEO plugin configured
- [ ] Google Analytics tracking

## 🆘 Getting Help

### Documentation
- WordPress Codex: https://codex.wordpress.org/
- Theme README: `/wordpress-theme/oakllc-theme/README.md`

### Support Channels
- WordPress Support Forums: https://wordpress.org/support/
- Theme Support: info@oakllc.co

### Common Issues
Check the Troubleshooting section above for:
- Theme display issues
- Contact form problems
- Mobile menu not working
- Email delivery issues

## 📞 Contact

For custom development or theme support:
- **Email**: info@oakllc.co
- **Website**: https://oakllc.co

---

## Quick Reference

### File Locations
```
Theme Files: /wp-content/themes/oakllc-theme/
CSS: /wp-content/themes/oakllc-theme/assets/css/main.css
JS: /wp-content/themes/oakllc-theme/assets/js/main.js
Functions: /wp-content/themes/oakllc-theme/functions.php
```

### Important Settings
```
Permalinks: Settings → Permalinks → Post name
Homepage: Settings → Reading → Static page
Menus: Appearance → Menus
Customizer: Appearance → Customize
```

### Plugin Recommendations
```
SEO: Yoast SEO or Rank Math
Cache: WP Super Cache
Security: Wordfence
Backup: UpdraftPlus
Email: WP Mail SMTP
```

---

**Ready to launch?** Follow the installation steps above and your OAK LLC website will be live! 🚀
