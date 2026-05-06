<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Company Profile - @yield('title')</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <style>
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
   </style>
</head>
<body style="scroll-behavior: smooth;">
   <nav class="navbar navbar-expand-lg fixed-top bg-white bg-opacity-75 shadow-sm" style="backdrop-filter: blur(10px); z-index: 1030;">
       <div class="container">
           <a class="navbar-brand fw-bold" href="#home" style="color: #ff6b35 !important; font-size: 1.5rem;">Modern News</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                   <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
                   <li class="nav-item"><a class="nav-link" href="#career">Career</a></li>
                   <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
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
       // Smooth scrolling dan active nav highlight
       document.addEventListener('DOMContentLoaded', function() {
           const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
           const sections = document.querySelectorAll('section[id]');
           const navbar = document.querySelector('.navbar');
           
           // Smooth scrolling untuk anchor links
           navLinks.forEach(link => {
               link.addEventListener('click', function(e) {
                   const href = this.getAttribute('href');
                   if (href.startsWith('#')) {
                       e.preventDefault();
                       const target = document.querySelector(href);
                       if (target) {
                           // Close mobile navbar
                           const navbarCollapse = document.querySelector('.navbar-collapse');
                           if (navbarCollapse.classList.contains('show')) {
                               document.querySelector('.navbar-toggler').click();
                           }
                           
                           const navHeight = navbar.offsetHeight;
                           const targetPosition = target.offsetTop - navHeight - 20;
                           window.scrollTo({
                               top: targetPosition,
                               behavior: 'smooth'
                           });
                       }
                   }
               });
           });
           
           // Update active nav based on scroll position
           window.addEventListener('scroll', function() {
               let current = '';
               
               sections.forEach(section => {
                   const sectionTop = section.offsetTop - navbar.offsetHeight - 100;
                   if (window.pageYOffset >= sectionTop) {
                       current = section.getAttribute('id');
                   }
               });
               
               navLinks.forEach(link => {
                   link.classList.remove('active');
                   if (link.getAttribute('href') === '#' + current) {
                       link.classList.add('active');
                   }
               });
           });
           
           // Add scroll shadow effect
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
