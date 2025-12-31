# OAK LLC Website

A modern, responsive, and SEO-optimized website for OAK LLC - a professional business consulting firm.

## Features

### Design & UI
- ✨ Modern, clean, and professional design
- 🎨 Beautiful gradient backgrounds and animations
- 📱 Fully responsive layout (mobile, tablet, desktop)
- 🌈 Smooth transitions and hover effects
- 🎭 Interactive elements with parallax scrolling
- 💫 Animated statistics counter
- 🔄 Auto-rotating testimonials slider

### Performance
- ⚡ Fast loading times
- 🚀 Optimized assets
- 📦 Minimal dependencies (no heavy frameworks)
- 🔧 Vanilla JavaScript for maximum performance

### SEO Optimization
- 🔍 Comprehensive meta tags (Open Graph, Twitter Cards)
- 📊 Structured data (JSON-LD schema)
- 🗺️ XML sitemap for search engines
- 🤖 robots.txt configuration
- 📱 Mobile-friendly and responsive
- ♿ Accessibility features (ARIA labels, semantic HTML)
- 🔗 Clean URLs and proper heading hierarchy

### Sections
1. **Hero Section** - Eye-catching introduction with animated background
2. **About Us** - Company overview and core values
3. **Services** - Six key service offerings with icons
4. **Why Choose Us** - Four compelling reasons to work with OAK LLC
5. **Testimonials** - Client reviews with auto-rotating slider
6. **Contact** - Contact form and company information
7. **Footer** - Quick links, social media, and newsletter signup

## Project Structure

```
OAK-Website/
├── index.html          # Main HTML file
├── css/
│   └── styles.css      # All styles and animations
├── js/
│   └── main.js         # Interactive features and functionality
├── images/             # Image assets (to be added)
├── assets/             # Additional assets
├── sitemap.xml         # SEO sitemap
├── robots.txt          # Search engine crawling rules
├── .gitignore          # Git ignore file
└── README.md           # This file
```

## Setup Instructions

### Quick Start

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd OAK-Website
   ```

2. **Open the website**
   - Simply open `index.html` in your web browser
   - Or use a local web server for the best experience

### Using a Local Web Server (Recommended)

#### Option 1: Python
```bash
# Python 3
python -m http.server 8000

# Python 2
python -m SimpleHTTPServer 8000
```

#### Option 2: Node.js (http-server)
```bash
npx http-server -p 8000
```

#### Option 3: VS Code Live Server
- Install the "Live Server" extension in VS Code
- Right-click on `index.html` and select "Open with Live Server"

3. **Access the website**
   ```
   http://localhost:8000
   ```

## Customization Guide

### Updating Content

#### Company Information
Edit `index.html` to update:
- Company name and tagline
- Services descriptions
- Testimonials
- Contact information

#### Colors and Branding
Edit `css/styles.css` CSS variables at the top:
```css
:root {
    --primary-color: #2563eb;      /* Main brand color */
    --secondary-color: #0f172a;    /* Secondary color */
    --accent-color: #f59e0b;       /* Accent highlights */
}
```

#### Images
1. Add your images to the `images/` folder
2. Update image references in `index.html`
3. Recommended images:
   - Logo (transparent PNG)
   - About section image
   - Favicon (16x16, 32x32, 180x180)
   - Open Graph image (1200x630)

### SEO Optimization

#### Update Meta Tags
In `index.html`, update:
- Page title
- Meta description
- Keywords
- Open Graph tags
- Twitter Card tags

#### Update Sitemap
In `sitemap.xml`, update:
- Domain URL
- Last modification dates
- Page priorities

#### Structured Data
Update the JSON-LD schema in `index.html`:
- Organization name
- Contact information
- Business address

## Features Deep Dive

### 1. Navigation
- Sticky navigation bar
- Smooth scroll to sections
- Active section highlighting
- Mobile-responsive hamburger menu
- Transparent on hero, white on scroll

### 2. Animations
- Fade-in on scroll animations
- Counter animations for statistics
- Parallax effect on hero section
- Floating background elements
- Smooth hover transitions

### 3. Forms
- Contact form with validation
- Newsletter subscription
- Client-side validation
- Ready for backend integration

### 4. Testimonials Slider
- Auto-rotating every 5 seconds
- Manual navigation (previous/next)
- Keyboard navigation (arrow keys)
- Responsive on all devices

### 5. Accessibility
- Semantic HTML5 elements
- ARIA labels and roles
- Keyboard navigation support
- Focus management
- Screen reader friendly

## Browser Support

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Tips

1. **Optimize Images**
   - Use WebP format for smaller file sizes
   - Compress images before uploading
   - Use appropriate image dimensions

2. **Enable Caching**
   - Configure server-side caching
   - Use CDN for static assets

3. **Minify Assets**
   - Minify CSS and JavaScript for production
   - Consider using a build tool (Gulp, Webpack)

## Backend Integration

The contact form and newsletter are ready for backend integration:

1. **Contact Form**
   - Form data is collected in `js/main.js`
   - Integrate with your email service or API
   - Examples: EmailJS, FormSpree, custom backend

2. **Newsletter**
   - Email collection ready
   - Integrate with Mailchimp, SendGrid, etc.

## Deployment

### GitHub Pages
```bash
# Push to GitHub
git add .
git commit -m "Initial website setup"
git push origin main

# Enable GitHub Pages in repository settings
# Select main branch and root folder
```

### Netlify
1. Connect your GitHub repository
2. Build command: (none needed)
3. Publish directory: `/`

### Vercel
```bash
vercel --prod
```

### Traditional Hosting
1. Upload all files via FTP/SFTP
2. Point domain to hosting server
3. Ensure HTTPS is enabled

## SEO Checklist

- ✅ Semantic HTML structure
- ✅ Meta tags (title, description, keywords)
- ✅ Open Graph tags for social sharing
- ✅ Structured data (JSON-LD)
- ✅ XML sitemap
- ✅ robots.txt
- ✅ Mobile-responsive design
- ✅ Fast loading speed
- ✅ Accessible (WCAG compliant)
- ✅ Clean URLs
- ✅ Alt tags for images (add when images are included)

## Future Enhancements

Consider adding:
- [ ] Blog section for content marketing
- [ ] Case studies page
- [ ] Team member profiles
- [ ] FAQ section
- [ ] Live chat integration
- [ ] Multi-language support
- [ ] Dark mode toggle
- [ ] Analytics integration (Google Analytics)
- [ ] Cookie consent banner (GDPR)
- [ ] Service worker for offline support

## Support

For questions or support:
- Email: info@oakllc.co
- Website: https://oakllc.co

## License

© 2024 OAK LLC. All rights reserved.

---

Built with ❤️ using modern web technologies
