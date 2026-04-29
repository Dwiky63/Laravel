@extends('layouts.frontend')

@section('title', 'Welcome')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relay</title>
    <!-- boostrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-yellow: #FFD700;
            --brand-blue: #1E90FF;
            --brand-black: #1a1a1a;
            --brand-white: #ffffff;
            --brand-gray: #f8f9fa;
            --radius-lg: 16px;
            --radius-md: 12px;
        }
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top"> 
        <div class="container"> 
            <a class="navbar-brand" href="#">modern<span style="color:white">news</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link px-3" href="#home">home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#news">news</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#career">career</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#about us">about us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Home Section -->
    <section id="home" class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <!-- Slide Show -->
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4 border-4 border-warning ps-3">Hot TOPICS</h2>
                    <div id="hotNewsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" id="hotNewsItem">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#hotNewsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-prev" type="button" data-bs-target="#hotNewsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                    </div>
                </div>
                <!-- Latest News List -->
                <div class="col-lg-4">
                    <h2 class="fw-bold mb-4 border-4 boreder-primary ps-3"> latestnews </h2>
                    <div class="latest-news-container" id="latestNewsList">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection
