<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Company Profile - @yield('title')</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <style>
       section {
           scroll-margin-top: 100px;
       }
       
       .navbar-nav .nav-link {
           color: #1f2937 !important;
           font-weight: 500;
           margin: 0 0.5rem;
           transition: color 0.3s ease;
       }
       .navbar-nav .nav-link:hover,
       .navbar-nav .nav-link.active {
           color: #ff6b35 !important;
       }
       
       /* Responsive navbar */
       @media (max-width: 991px) {
           .navbar-nav {
               padding-top: 1rem;
           }
           .navbar-nav .nav-link {
               padding: 0.5rem 0 !important;
               margin: 0 !important;
           }
       }
   </style>
</head>
<body style="scroll-behavior: smooth;">
   <nav class="navbar navbar-expand-lg fixed-top bg-white bg-opacity-75 shadow-sm" style="backdrop-filter: blur(10px); z-index: 1030;">
       <div class="container">
           <a class="navbar-brand fw-bold" href="{{ route('home') }}" style="color: #ff6b35 !important; font-size: 1.5rem;">Modern News</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                       <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">News</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}" href="{{ route('career') }}">Career</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>

   <main class="pt-5" style="margin-top: 20px;">
       @yield('content')
   </main>

   <footer class="bg-light text-center py-3 mt-5">
       <p>&copy; 2026 iDev Company. All Rights Reserved.</p>
   </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <script>
       // Add scroll shadow effect pada navbar
       document.addEventListener('DOMContentLoaded', function() {
           const navbar = document.querySelector('.navbar');
           
           window.addEventListener('scroll', function() {
               if (window.pageYOffset > 0) {
                   navbar.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.1)';
               } else {
                   navbar.style.boxShadow = 'none';
               }
           });
       });
   </script>
</body>
</html>
