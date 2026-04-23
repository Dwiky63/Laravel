# IDN Media - Modern Landing Page

A premium, modern landing page inspired by IDN Media - a digital platform empowering Gen Z and Millennials in Indonesia.

## 🎯 Features

✨ **Modern Design**
- Minimal and clean aesthetic with black, white, and red color scheme
- Premium look and feel inspired by tech unicorn companies
- High whitespace usage and strong typography
- Smooth animations and transitions throughout

📱 **Fully Responsive**
- Mobile-first design approach
- Optimized for all device sizes (mobile, tablet, desktop)
- Smooth scrolling navigation
- Touch-friendly interface

🎨 **Interactive Components**
- Hover effects on all interactive elements
- Smooth page transitions and animations
- Sticky navbar with smooth scroll behavior
- Dynamic section animations

⚡ **Performance Optimized**
- Fast load times with Vite
- Optimized React components
- CSS animations (GPU-accelerated)
- Minimal JavaScript footprint

## 📋 Sections

1. **Navbar** - Fixed navigation with smooth scrolling
2. **Hero** - Full-screen hero section with CTA buttons
3. **About** - Company values and key statistics
4. **Products** - 4-product ecosystem grid with hover effects
5. **News** - Latest updates and news articles
6. **Events** - Upcoming events and highlights
7. **CTA** - Strong call-to-action section
8. **Footer** - Links, contact info, and social media

## 🛠 Tech Stack

- **Frontend Framework:** React 18
- **Styling:** Tailwind CSS 3
- **Build Tool:** Vite 5
- **Backend:** Laravel (integrated)
- **Icons:** Lucide React
- **Node Package Manager:** npm

## 🚀 Installation & Setup

### Prerequisites
- Node.js 16+ installed
- npm or yarn package manager
- PHP 8.1+ (for Laravel backend)
- Composer (for Laravel dependencies)

### Steps

1. **Install Dependencies**
   ```bash
   npm install
   ```

2. **Install Tailwind CSS Dependencies**
   ```bash
   npm install -D tailwindcss postcss autoprefixer
   npm install lucide-react
   ```

3. **Start Development Server**
   ```bash
   npm run dev
   ```
   The app will be available at `http://localhost:5173`

4. **Build for Production**
   ```bash
   npm run build
   ```

## 📁 Project Structure

```
resources/
├── css/
│   └── app.css              # Tailwind CSS with custom animations
├── js/
│   ├── app.jsx              # React entry point
│   ├── App.jsx              # Main App component
│   └── components/
│       ├── Navbar.jsx       # Navigation bar
│       ├── Hero.jsx         # Hero section
│       ├── About.jsx        # About section
│       ├── Products.jsx     # Products grid
│       ├── News.jsx         # News section
│       ├── Events.jsx       # Events section
│       ├── CTA.jsx          # Call-to-action
│       └── Footer.jsx       # Footer
└── views/
    └── landing.blade.php    # Laravel Blade template

├── tailwind.config.js       # Tailwind configuration
├── postcss.config.js        # PostCSS configuration
├── vite.config.js           # Vite configuration
├── package.json             # Dependencies
```

## 🎨 Design System

### Colors
- **Primary:** Black (#000000)
- **Secondary:** White (#FFFFFF)
- **Accent:** Red (#E63946)

### Typography
- **Font Family:** Inter (Google Fonts)
- **Font Weights:** 300, 400, 500, 600, 700, 800, 900

### Animations
- **Fade In:** 0.8s ease-in
- **Slide In Up:** 0.8s ease-out
- **Slide In Down:** 0.8s ease-out
- **Scale In:** 0.6s ease-out

### Spacing
- Uses Tailwind's default spacing scale
- Consistent padding and margins throughout
- Large whitespace for premium feel

## 📝 Component Details

### Navbar
- Sticky positioning with glass morphism effect
- Responsive mobile menu with hamburger toggle
- Smooth scroll navigation to sections
- Active link highlighting

### Hero Section
- Full viewport height (100vh)
- Animated gradient background
- Large headline with gradient text
- Dual CTA buttons (primary and secondary)
- Scroll indicator animation

### About Section
- Company values grid (4 items)
- Key statistics display
- Glass morphism cards
- Hover scale animations

### Products Section
- 4-product grid with icons
- Gradient backgrounds per product
- Hover effects with scale and shadow
- "Learn More" links for each product

### News Section
- 4-news item grid (2x2 on desktop)
- Category badges
- Date display with calendar icon
- "Read More" links

### Events Section
- Featured event showcase
- Additional events grid
- Event details (date, location, attendees)
- Call-to-action buttons

### Footer
- Multi-column layout
- Social media links
- Contact information
- Back-to-top button
- Copyright notice

## 🔧 Customization

### Colors
Edit `tailwind.config.js`:
```javascript
theme: {
  extend: {
    colors: {
      primary: '#000000',
      secondary: '#FFFFFF',
      accent: '#E63946',
    }
  }
}
```

### Animations
Modify keyframes in `tailwind.config.js` or `resources/css/app.css`

### Content
Edit component files in `resources/js/components/` to update:
- Text and headlines
- Images and icons
- Links and CTAs
- Data (news, products, events)

## 📱 Responsive Breakpoints

- **Mobile:** < 640px
- **Small Tablet:** 640px - 768px
- **Tablet:** 768px - 1024px
- **Desktop:** 1024px+

## 🌟 Key Features Explained

### Smooth Scrolling Navigation
Clicking navbar links smoothly scrolls to respective sections using browser's native smooth scroll behavior.

### Hover Effects
All cards and buttons have subtle hover animations:
- Scale up on hover
- Shadow enhancement
- Color transitions
- Smooth animations (300-500ms)

### Glass Morphism
Some sections use frosted glass effect with:
- Semi-transparent background
- Backdrop blur filter
- Subtle border

### Gradient Text
Headlines use CSS `background-clip` for gradient text effect on red/black combo.

## 🚀 Performance Tips

1. **Image Optimization:** Replace placeholder gradients with optimized images
2. **Code Splitting:** Use React.lazy() for sections on large pages
3. **CSS Purging:** Tailwind automatically removes unused CSS in production
4. **Lazy Loading:** Implement lazy loading for images and sections
5. **Caching:** Configure browser caching in production

## 🔐 Security Considerations

- Sanitize all user inputs
- Use CSRF tokens in forms
- Content Security Policy (CSP) headers
- XSS protection enabled
- Secure cookies with HttpOnly flag

## 📄 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🤝 Contributing

To extend this landing page:

1. Create new components in `resources/js/components/`
2. Import in `App.jsx`
3. Style using Tailwind CSS
4. Test responsive design
5. Optimize performance

## 📞 Support & Contact

For questions or issues:
- Check documentation in code comments
- Review Tailwind CSS docs: https://tailwindcss.com
- React documentation: https://react.dev
- Vite documentation: https://vitejs.dev

## 📄 License

This project is provided as-is for educational and commercial use.

## 🎉 Credits

- Inspired by IDN Media (idn.media)
- Built with React, Tailwind CSS, and Vite
- Icons by Lucide React
- Fonts by Google Fonts

---

**Last Updated:** April 2026
**Version:** 1.0
**Status:** Production Ready

For questions or customization requests, feel free to reach out!
