# IDN Media Landing Page - Design & Styling Reference

## 🎨 Design System Reference

### Color Palette

```javascript
// Primary Colors
Primary: #000000 (Black)
Secondary: #FFFFFF (White)
Accent: #E63946 (Red)

// Grayscale
Gray-50: #F9FAFB
Gray-100: #F3F4F6
Gray-200: #E5E7EB
Gray-300: #D1D5DB
Gray-400: #9CA3AF
Gray-500: #6B7280
Gray-600: #4B5563
Gray-700: #374151
Gray-800: #1F2937
Gray-900: #111827

// Semantic Colors
Success: #10B981
Warning: #F59E0B
Error: #EF4444
Info: #3B82F6
```

### Typography

```javascript
Font Family: Inter (from Google Fonts)

Font Weights:
- Light: 300
- Regular: 400
- Medium: 500
- Semibold: 600
- Bold: 700
- Extrabold: 800
- Black: 900

Font Sizes:
- xs: 12px (0.75rem)
- sm: 14px (0.875rem)
- base: 16px (1rem)
- lg: 18px (1.125rem)
- xl: 20px (1.25rem)
- 2xl: 24px (1.5rem)
- 3xl: 30px (1.875rem)
- 4xl: 36px (2.25rem)
- 5xl: 48px (3rem)
- 6xl: 60px (3.75rem)
- 7xl: 72px (4.5rem)
- 8xl: 96px (6rem)

Line Heights:
- tight: 1.25
- snug: 1.375
- normal: 1.5
- relaxed: 1.625
- loose: 2
```

### Spacing Scale

```javascript
0: 0px
1: 0.25rem (4px)
2: 0.5rem (8px)
3: 0.75rem (12px)
4: 1rem (16px)
6: 1.5rem (24px)
8: 2rem (32px)
12: 3rem (48px)
16: 4rem (64px)
20: 5rem (80px)
24: 6rem (96px)
32: 8rem (128px)
```

### Border Radius

```javascript
none: 0px
sm: 0.125rem (2px)
base: 0.25rem (4px)
md: 0.375rem (6px)
lg: 0.5rem (8px)
xl: 0.75rem (12px)
2xl: 1rem (16px)
3xl: 1.5rem (24px)
full: 9999px
```

### Shadows

```css
.shadow-sm
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05)

.shadow-base
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)

.shadow-md
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)

.shadow-lg
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)

.shadow-xl
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)

.shadow-2xl
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25)
```

---

## ✨ Animation System

### Predefined Animations

```javascript
// Fade In
@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
duration: 0.8s, ease-in

// Slide In Up
@keyframes slideInUp {
  0% { 
    transform: translateY(40px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}
duration: 0.8s, ease-out

// Slide In Down
@keyframes slideInDown {
  0% {
    transform: translateY(-40px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}
duration: 0.8s, ease-out

// Scale In
@keyframes scaleIn {
  0% {
    transform: scale(0.95);
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}
duration: 0.6s, ease-out
```

### Transition Classes

```javascript
// Standard transitions
.transition          // 150ms ease
.duration-200        // 200ms
.duration-300        // 300ms
.duration-500        // 500ms
.ease-in            // ease-in timing
.ease-out           // ease-out timing
.ease-in-out        // ease-in-out timing
```

### Hover Effects

```javascript
// Scale
.hover:scale-105     // 105% on hover
.hover:scale-110     // 110% on hover

// Shadows
.hover:shadow-2xl    // Enhanced shadow on hover

// Colors
.hover:bg-red-700    // Background color change
.hover:text-red-600  // Text color change

// Transforms
.group-hover:translate-x-1  // Move horizontally
.group-hover:translate-x-2  // Move further
```

---

## 🧩 Component Patterns

### Card Component

```jsx
// Basic Card
<div className="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
  {/* Content */}
</div>

// With Hover Scale
<div className="card-hover bg-white rounded-2xl p-8 shadow-lg">
  {/* Content */}
</div>

// Glass Morphism
<div className="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8">
  {/* Content */}
</div>
```

### Button Variants

```jsx
// Primary Button
<button className="btn-primary">
  Button Text
</button>

// Secondary Button
<button className="btn-secondary">
  Button Text
</button>

// Custom Button
<button className="px-8 py-3 bg-red-600 text-white font-bold rounded-lg hover:bg-red-700 transition-all duration-300 ease-out transform hover:scale-105">
  Button Text
</button>
```

### Text Styles

```jsx
// Section Title
<h2 className="section-title">
  Section Title
</h2>

// Gradient Text
<span className="gradient-text">
  Gradient Text
</span>

// Description
<p className="text-gray-600 leading-relaxed max-w-2xl mx-auto">
  Description text
</p>
```

---

## 📐 Layout Patterns

### Responsive Grid

```jsx
// 1 column mobile, 2 tablet, 4 desktop
<div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
  {/* Items */}
</div>

// 1 column mobile, 3 desktop
<div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
  {/* Items */}
</div>
```

### Centered Container

```jsx
<div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  {/* Content */}
</div>
```

### Flex Row/Column

```jsx
// Horizontal
<div className="flex items-center gap-4">
  {/* Items */}
</div>

// Vertical
<div className="flex flex-col space-y-4">
  {/* Items */}
</div>

// Centered
<div className="flex justify-center items-center">
  {/* Content */}
</div>
```

---

## 🎯 Accessibility

### ARIA Labels

```jsx
// Icon buttons
<button aria-label="Menu">
  <Menu size={24} />
</button>

// Icon links
<a href="#" aria-label="Facebook">
  <Facebook size={24} />
</a>
```

### Semantic HTML

```jsx
// Use semantic elements
<header>Navigation</header>
<main>Main content</main>
<section>Section content</section>
<article>Article content</article>
<footer>Footer content</footer>
```

### Keyboard Navigation

All interactive elements should be keyboard accessible:
- Buttons: Tab to focus, Enter to activate
- Links: Tab to focus, Enter to navigate
- Forms: Tab to navigate, Enter to submit

---

## 🎨 Customization Examples

### Change Accent Color from Red to Blue

```javascript
// In tailwind.config.js
colors: {
  accent: '#3B82F6',  // Blue
}

// Update all accent references:
// text-red-600 → text-blue-600
// bg-red-600 → bg-blue-600
// hover:bg-red-700 → hover:bg-blue-700
```

### Add Dark Mode

```javascript
// In tailwind.config.js
darkMode: 'class',

// Add dark mode variants:
className="bg-white dark:bg-black text-black dark:text-white"
```

### Increase Font Size

```javascript
// In tailwind.config.js
fontSize: {
  'md': '18px',  // Increase from 16px
  'lg': '20px',  // Increase from 18px
}
```

---

## 📱 Responsive Design Breakpoints

```javascript
xs: 0px      // Default (mobile)
sm: 640px    // Small devices
md: 768px    // Tablets
lg: 1024px   // Large tablets/small desktop
xl: 1280px   // Desktop
2xl: 1536px  // Large desktop
```

### Usage

```jsx
// Mobile first approach
<div className="text-sm md:text-base lg:text-lg">
  // Small on mobile, medium on tablet, large on desktop
</div>

// Different columns
<div className="grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
  // 1 column mobile, 2 tablet, 4 desktop
</div>

// Hide/Show elements
<div className="hidden md:block">
  // Hidden on mobile, shown on tablet+
</div>
```

---

## 🚀 Performance Tips

1. **Use CSS classes over inline styles**
2. **Leverage Tailwind's utility classes**
3. **Keep animations under 500ms**
4. **Use `will-change` sparingly**
5. **Prefer transforms over position changes**
6. **Use `contain` property for isolated elements**

---

## 🔍 Quality Checklist

- ✅ Responsive on all breakpoints
- ✅ Animations smooth and not distracting
- ✅ Color contrast meets WCAG AA
- ✅ All interactive elements have hover states
- ✅ Mobile-first approach used
- ✅ No unnecessary CSS
- ✅ Load time < 2 seconds

---

## 📚 Resources

- Tailwind Config: `tailwind.config.js`
- CSS Animations: `resources/css/app.css`
- Component Examples: `resources/js/components/`
- Theme Colors: Tailwind default palette

---

**Last Updated:** April 2026
**Design System Version:** 1.0
