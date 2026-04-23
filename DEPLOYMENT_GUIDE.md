# IDN Media Landing Page - Production Deployment Guide

## 🚀 Production Build

### Build Command
```bash
npm run build
```

This creates optimized files in the `dist/` directory (for standalone) or automatically integrates with Laravel public assets.

### Build Output
- Minified JavaScript
- Purged CSS (unused styles removed)
- Optimized bundle size (~50-100KB gzipped)
- Sourcemaps for debugging (optional)

---

## 📦 Deployment Options

### Option 1: Laravel Deployment (Recommended)

#### Step 1: Build Assets
```bash
npm run build
```

#### Step 2: Run Laravel Server
```bash
php artisan serve
```

#### Step 3: Visit Landing Page
```
http://localhost:8000/landing
```

The `landing` route should be configured in your Laravel routes file.

#### Step 4: Configure Routes (if needed)
Edit `routes/web.php`:
```php
Route::view('/landing', 'landing')->name('landing');
// or
Route::get('/landing', function () {
    return view('landing');
});
```

---

### Option 2: Standalone React Deployment (Vercel/Netlify)

#### Vercel Deployment

1. **Push to GitHub**
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   git remote add origin https://github.com/yourusername/idnmedia-landing.git
   git push -u origin main
   ```

2. **Connect to Vercel**
   - Go to https://vercel.com
   - Click "New Project"
   - Select your repository
   - Configure build settings:
     - Build Command: `npm run build`
     - Output Directory: `dist`
   - Deploy!

#### Netlify Deployment

1. **Prepare for Netlify**
   ```bash
   npm run build
   ```

2. **Deploy**
   - Go to https://netlify.com
   - Drag and drop the `dist` folder
   - OR connect your GitHub repo
   - Site is live!

---

### Option 3: Docker Deployment

#### Create Dockerfile

```dockerfile
FROM node:18-alpine AS build
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

FROM php:8.1-apache
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y \
    git curl zip unzip

COPY --chown=www-data:www-data . .
COPY --from=build --chown=www-data:www-data /app/dist public/

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80
CMD ["apache2-foreground"]
```

#### Build and Run

```bash
docker build -t idnmedia-landing .
docker run -p 80:80 idnmedia-landing
```

---

### Option 4: AWS Deployment

#### Deploy to AWS Amplify

1. **Connect GitHub Repository**
   - Go to AWS Amplify Console
   - Connect your GitHub account
   - Select the repository

2. **Configure Build Settings**
   ```yaml
   version: 1
   frontend:
     phases:
       prebuild:
         commands:
           - npm install
       build:
         commands:
           - npm run build
     artifacts:
       baseDirectory: dist
       files:
         - '**/*'
     cache:
       paths:
         - node_modules/**/*
   ```

3. **Deploy**
   - Amplify automatically deploys on push to main

#### Deploy to EC2

```bash
# SSH into your EC2 instance
ssh -i your-key.pem ec2-user@your-instance-ip

# Install dependencies
sudo apt update
sudo apt install -y nodejs npm php apache2

# Clone repository
git clone your-repo-url
cd your-project

# Install and build
npm install
npm run build

# Configure Apache to serve the app
# Copy dist files to /var/www/html
sudo cp -r dist/* /var/www/html/

# Start Apache
sudo systemctl start apache2
sudo systemctl enable apache2
```

---

## 🔐 Security Checklist

- ✅ **HTTPS Only** - Use SSL/TLS certificates
- ✅ **CSP Headers** - Content Security Policy configured
- ✅ **XSS Protection** - React's built-in protections
- ✅ **CORS Properly Set** - Only allow trusted origins
- ✅ **Dependencies Updated** - Run `npm audit` regularly
- ✅ **Environment Variables** - Secure sensitive data
- ✅ **Rate Limiting** - Prevent API abuse
- ✅ **Input Validation** - Sanitize all user inputs

### Set Security Headers

```apache
# Add to Apache .htaccess or virtual host config
Header set X-Content-Type-Options "nosniff"
Header set X-Frame-Options "SAMEORIGIN"
Header set X-XSS-Protection "1; mode=block"
Header set Referrer-Policy "strict-origin-when-cross-origin"
Header set Permissions-Policy "geolocation=(), microphone=(), camera=()"
```

---

## ⚡ Performance Optimization

### Before Production

1. **Bundle Analysis**
   ```bash
   npm install -g vite-plugin-visualizer
   ```

2. **Lighthouse Audit**
   - Open DevTools in Chrome
   - Run Lighthouse audit
   - Fix critical issues

3. **Test Performance**
   ```bash
   npm run build
   npm run preview
   ```

### Production Settings

1. **Enable Gzip Compression**
   ```apache
   <IfModule mod_deflate.c>
     AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
   </IfModule>
   ```

2. **Enable Browser Caching**
   ```apache
   <IfModule mod_expires.c>
     ExpiresActive On
     ExpiresByType image/jpg "access plus 1 year"
     ExpiresByType image/jpeg "access plus 1 year"
     ExpiresByType image/gif "access plus 1 year"
     ExpiresByType image/png "access plus 1 year"
     ExpiresByType text/css "access plus 1 month"
     ExpiresByType application/javascript "access plus 1 month"
   </IfModule>
   ```

3. **Use CDN**
   - Cloudflare (free tier available)
   - Bunny CDN
   - AWS CloudFront
   - Akamai

---

## 📊 Monitoring & Analytics

### Setup Google Analytics

```javascript
// Add to HTML head or React component
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

### Setup Error Tracking (Sentry)

```javascript
import * as Sentry from "@sentry/react";

Sentry.init({
  dsn: "YOUR_SENTRY_DSN",
  environment: "production",
  tracesSampleRate: 0.1,
});
```

### Uptime Monitoring

- **UptimeRobot** - Free uptime monitoring
- **Pingdom** - Advanced monitoring
- **Datadog** - Comprehensive monitoring

---

## 🔄 CI/CD Pipeline

### GitHub Actions Example

Create `.github/workflows/deploy.yml`:

```yaml
name: Deploy to Production

on:
  push:
    branches: [ main ]

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
    - uses: actions/checkout@v3
    
    - name: Setup Node.js
      uses: actions/setup-node@v3
      with:
        node-version: '18'
        cache: 'npm'
    
    - name: Install dependencies
      run: npm install
    
    - name: Run tests
      run: npm test
    
    - name: Build
      run: npm run build
    
    - name: Deploy to Vercel
      run: npm run build && vercel --prod
      env:
        VERCEL_TOKEN: ${{ secrets.VERCEL_TOKEN }}
```

---

## 🆘 Troubleshooting Production Issues

### Issue: Blank Page
**Solution:**
- Check browser console for errors
- Verify React is mounting: `<div id="app"></div>`
- Check that Vite assets are loaded

### Issue: Slow Performance
**Solution:**
- Enable Gzip compression
- Optimize images
- Implement caching
- Use CDN
- Check bundle size

### Issue: Styles Not Loading
**Solution:**
- Verify Tailwind CSS is built
- Check asset paths
- Clear browser cache
- Check MIME types in server

### Issue: 404 Errors
**Solution:**
- Verify routes are configured
- Check file paths
- Enable fallback to index.html

### Issue: CORS Errors
**Solution:**
- Configure CORS headers
- Check origin whitelisting
- Verify request headers

---

## 📈 Scaling Considerations

### For High Traffic (1M+ visitors/month)

1. **Database Optimization**
   - Use caching (Redis)
   - Optimize queries
   - Use read replicas

2. **Infrastructure**
   - Load balancer
   - Multiple server instances
   - Auto-scaling groups

3. **CDN**
   - Distribute content globally
   - Cache static assets
   - DDoS protection

4. **Monitoring**
   - Real-time dashboards
   - Alert systems
   - Performance tracking

---

## 🎯 Post-Deployment Checklist

- ✅ Site loads in < 3 seconds
- ✅ Mobile responsive verified
- ✅ All links working
- ✅ Forms submitting correctly
- ✅ SEO meta tags present
- ✅ Analytics tracking active
- ✅ Error monitoring setup
- ✅ Backup system configured
- ✅ SSL certificate valid
- ✅ DNS properly configured

---

## 📝 Environment Variables

Create `.env` file:

```env
VITE_API_URL=https://api.example.com
VITE_ANALYTICS_ID=GA_MEASUREMENT_ID
VITE_ENVIRONMENT=production
```

Access in React:
```javascript
console.log(import.meta.env.VITE_API_URL)
```

---

## 🔄 Update & Maintenance

### Regular Updates
```bash
# Check for updates
npm outdated

# Update dependencies
npm update

# Audit for vulnerabilities
npm audit
npm audit fix
```

### Backup Strategy
- Daily database backups
- Version control (GitHub)
- Asset backups to S3/Cloud Storage

---

## 📞 Support & Issues

For deployment issues:
1. Check build logs
2. Review error messages
3. Test locally first
4. Contact hosting provider

---

## Resources

- Vite Deployment: https://vitejs.dev/guide/static-deploy.html
- React Production: https://react.dev/learn/deployment
- Security Best Practices: https://owasp.org/Top10/

---

**Last Updated:** April 2026
**Status:** Production Ready
