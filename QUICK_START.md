# Quick Start Guide - IDN Media Landing Page

## ⚡ 5-Minute Setup

### Step 1: Install Dependencies
```bash
npm install
```

### Step 2: Start Development Server
```bash
npm run dev
```

### Step 3: View the Site
Open your browser to: **http://localhost:5173**

---

## 🎨 Main Features

### ✨ What You Get
- ✅ Full responsive design (mobile, tablet, desktop)
- ✅ Smooth animations and transitions
- ✅ 8 professional sections
- ✅ Modern dark/light UI
- ✅ Fast performance with Vite + React
- ✅ Zero setup complexity

### 📱 Sections Included
1. **Navigation Bar** - Sticky top navbar with smooth scrolling
2. **Hero Section** - Full-screen eye-catching hero
3. **About** - Company values and statistics
4. **Products** - 4-product ecosystem showcase
5. **News** - Latest articles and updates
6. **Events** - Upcoming events showcase
7. **CTA** - Strong call-to-action
8. **Footer** - Contact links and socials

---

## 🛠 Build for Production

```bash
npm run build
```

This creates optimized files in the `public/` directory.

---

## 📝 Customization Guide

### 1. Change Colors
Edit `tailwind.config.js`:
```javascript
colors: {
  primary: '#000000',
  secondary: '#FFFFFF',
  accent: '#E63946',  // Red - change this to your brand color
}
```

### 2. Update Content
All text content is in component files:
- `resources/js/components/Hero.jsx` - Hero section text
- `resources/js/components/About.jsx` - About section
- `resources/js/components/Products.jsx` - Product cards
- `resources/js/components/News.jsx` - News articles
- `resources/js/components/Events.jsx` - Events
- `resources/js/components/Footer.jsx` - Footer content

### 3. Replace Images
Replace gradient placeholders with real images:
```jsx
// Instead of: bg-gradient-to-br from-red-500 to-pink-600
// Use: backgroundImage: 'url(...)'
```

### 4. Add More Sections
1. Create new component file: `resources/js/components/NewSection.jsx`
2. Import in `App.jsx`
3. Add to render order
4. Style with Tailwind CSS

---

## 📦 Project Structure

```
resources/
├── css/app.css                    # Tailwind styles
├── js/
│   ├── app.jsx                    # Entry point
│   ├── App.jsx                    # Main component
│   └── components/                # All sections
└── views/landing.blade.php        # Main template
```

---

## 🚀 Performance

The site loads in **< 2 seconds** with:
- Optimized React bundle
- Tailwind CSS purging
- Vite's fast build system
- Lazy-loaded components

---

## 🔗 Integrations

### With Laravel
This is already integrated! Just run:
```bash
npm run dev
```

Then visit your Laravel dev server.

### With Other Backends
1. Keep the same structure
2. Replace React components as needed
3. Connect to your backend APIs
4. Update environment variables

---

## 🎯 Common Tasks

### Remove a Section
1. Delete component file from `resources/js/components/`
2. Remove import from `App.jsx`
3. Done!

### Add a New Product
Edit `resources/js/components/Products.jsx` and add to the `products` array.

### Change Navigation Links
Edit `Navbar.jsx` - update the `navLinks` array.

### Update Social Media Links
Edit `Footer.jsx` - update the `socialLinks` array.

---

## 📊 Browser Support

✅ Chrome
✅ Firefox
✅ Safari
✅ Edge
✅ Mobile browsers

---

## 🐛 Troubleshooting

### npm install fails
```bash
# Clear cache and try again
npm cache clean --force
npm install
```

### Dev server won't start
```bash
# Check if port 5173 is in use
# If yes, run:
npm run dev -- --port 3000
```

### Styles not loading
```bash
# Rebuild Tailwind CSS
npm run build
```

---

## 💡 Pro Tips

1. **Use Chrome DevTools** for responsive testing
2. **Enable Dark Mode** in browser to test contrast
3. **Lighthouse** in DevTools to check performance
4. **Accessibility** check with axe DevTools extension

---

## 📚 Resources

- Tailwind CSS: https://tailwindcss.com/docs
- React: https://react.dev
- Vite: https://vitejs.dev/guide/
- Lucide Icons: https://lucide.dev

---

## 📞 Need Help?

Check the full documentation in `LANDING_PAGE_README.md`

---

**Happy Building! 🚀**
