<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Company Profile - @yield('title')</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container">
           <a class="navbar-brand" href="/">Company Logo</a>
           <div class="collapse navbar-collapse">
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                   <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                   <li class="nav-item"><a class="nav-link" href="/product">Product</a></li>
                   <li class="nav-item"><a class="nav-link" href="/career">Career</a></li>
                   <li class="nav-item"><a class="nav-link" href="/news">News</a></li>
                   <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
               </ul>
           </div>
       </div>
   </nav>

   <main class="container py-5">
       @yield('content')
   </main>

   <footer class="bg-light text-center py-3 mt-auto">
       <p>&copy; 2026 iDev Company. All Rights Reserved.</p>
   </footer>
</body>
</html>
