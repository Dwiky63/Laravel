<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="IDN Media - Empowering Indonesia's digital future for Gen Z and Millennials" />
    <meta name="keywords" content="IDN Media, digital platform, creators, live streaming, entertainment" />
    <meta name="author" content="IDN Media" />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://idnmedia.com/" />
    <meta property="og:title" content="IDN Media - For A Better Indonesia" />
    <meta property="og:description" content="Empowering Gen Z & Millennials through digital media, live streaming, and creator economy." />
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://idnmedia.com/" />
    <meta property="twitter:title" content="IDN Media - For A Better Indonesia" />
    <meta property="twitter:description" content="Empowering Gen Z & Millennials through digital media, live streaming, and creator economy." />

    <title>IDN Media - For A Better Indonesia</title>

    <!-- Preload Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' fill='%23000'/><text x='50' y='60' font-size='60' font-weight='bold' fill='%23E63946' text-anchor='middle'>I</text></svg>" />

    <!-- Vite CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
  </head>
  <body>
    <!-- React App Mount Point -->
    <div id="app"></div>

    <!-- Optional: Loading state (while React loads) -->
    <script>
      document.documentElement.style.colorScheme = 'light';
    </script>
  </body>
</html>
