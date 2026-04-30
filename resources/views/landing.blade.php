@extends('layouts.frontend')

@section('title', 'Your Company Media - Democratizing Information')

@section('content')
<<<<<<< HEAD
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

    <!-- New section -->
    <section id="news" class="parallax-section">
        <div class="container">
            <div class="section-overlay text-center">
                <h2 class="display-5 fw-800 mb-4" style="color: var(--brand-blue);"> world class jurnalism</h2>
                <p class="lead mb-4">fwpjoqjfow</p>
                <button class="btn btn-blue btn-lg px-5">Explore</button>
            </div>
        </div>
    </section>
@endsection
=======

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModernNews | Professional Journalism</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-yellow: #FFD700;
            --brand-blue: #0056b3;
            --brand-black: #1a1a1a;
            --brand-white: #ffffff;
            --brand-gray: #f8f9fa;
            --radius-lg: 16px;
            --radius-md: 12px;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--brand-black);
            background-color: var(--brand-white);
            overflow-x: hidden;
        }

        /* Flat Design Adjustments */
        .card, .btn, .form-control, .nav-link, .badge {
            border-radius: var(--radius-md) !important;
            border: none;
            box-shadow: none !important;
        }

        /* Navbar Customization */
        .navbar {
            background-color: var(--brand-black);
            padding: 1rem 0;
        }
        .navbar-brand {
            font-weight: 800;
            color: var(--brand-yellow) !important;
            font-size: 1.5rem;
        }
        .nav-link {
            color: var(--brand-white) !important;
            font-weight: 600;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: var(--brand-yellow) !important;
        }

        /* Parallax Sections */
        .parallax-section {
            position: relative;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 100px 0;
            min-height: 60vh;
            display: flex;
            align-items: center;
        }
        
        .section-overlay {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: var(--radius-lg);
            width: 100%;
        }

        /* Section Backgrounds */
        #news { background-image: url('https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&q=80&w=2000'); }
        #career { background-image: url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&q=80&w=2000'); }
        #about { background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=2000'); }

        /* Carousel Styling */
        #hotNewsCarousel {
            border-radius: var(--radius-lg);
            overflow: hidden;
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.7);
            border-radius: var(--radius-md);
            padding: 20px;
            bottom: 20px;
            text-align: left;
            left: 5%;
            right: 5%;
        }

        /* Latest News List */
        .latest-news-container {
            max-height: 500px;
            overflow-y: auto;
            padding-right: 10px;
        }
        .latest-news-item {
            background: var(--brand-gray);
            transition: background 0.2s;
            cursor: pointer;
            border-bottom: 2px solid #eee;
        }
        .latest-news-item:hover {
            background: #eef2ff;
        }
        .news-thumb {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: var(--radius-md);
        }

        /* Career List */
        .career-card {
            border: 2px solid var(--brand-blue);
            background: #fff;
            margin-bottom: 1rem;
        }
        .career-badge {
            background-color: var(--brand-yellow);
            color: var(--brand-black);
        }

        /* Map Placeholder */
        .map-container {
            background: #eee;
            border-radius: var(--radius-lg);
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border: 2px dashed #ccc;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: var(--brand-blue); border-radius: 10px; }

        .btn-blue {
            background-color: var(--brand-blue);
            color: white;
            font-weight: 600;
        }
        .btn-blue:hover {
            background-color: #004494;
            color: white;
        }

        @media (max-width: 768px) {
            .carousel-item img { height: 300px; }
            .latest-news-container { max-height: none; margin-top: 2rem; }
            .parallax-section { background-attachment: scroll; padding: 50px 0; }
            .section-overlay { padding: 1.5rem; }
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">MODERN<span style="color:white">NEWS</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link px-3" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#news">News</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#career">Career</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#about">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section (Slideshow + Latest News) -->
    <section id="home" class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <!-- Slideshow -->
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4 border-start border-4 border-warning ps-3">HOT TOPICS</h2>
                    <div id="hotNewsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" id="hotNewsItems">
                            <!-- Dynamic Content -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#hotNewsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#hotNewsCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
                <!-- Latest News List -->
                <div class="col-lg-4">
                    <h2 class="fw-bold mb-4 border-start border-4 border-primary ps-3">LATEST NEWS</h2>
                    <div class="latest-news-container" id="latestNewsList">
                        <!-- Dynamic Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section (Parallax Example) -->
    <section id="news" class="parallax-section">
        <div class="container">
            <div class="section-overlay text-center">
                <h2 class="display-5 fw-800 mb-4" style="color: var(--brand-blue);">World Class Journalism</h2>
                <p class="lead mb-4">We deliver the most accurate and up-to-date news from around the globe, powered by independent journalists.</p>
                <button class="btn btn-blue btn-lg px-5">Explore All Categories</button>
            </div>
        </div>
    </section>

    <!-- Career Section -->
    <section id="career" class="parallax-section">
        <div class="container">
            <div class="section-overlay">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <h2 class="display-6 fw-bold mb-3">Join Our Newsroom</h2>
                        <p class="text-muted">We are looking for creative minds, data analysts, and investigative journalists to join our growing global team.</p>
                        <div class="bg-warning p-3 rounded-4 mb-3">
                            <strong>Note:</strong> Remote positions available for international applicants.
                        </div>
                        <button class="btn btn-blue btn-lg">View More Openings</button>
                    </div>
                    <div class="col-lg-7">
                        <div id="careerList">
                            <!-- Dynamic Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="parallax-section mb-5">
        <div class="container">
            <div class="section-overlay">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-4">About ModernNews</h2>
                        <p>Founded in 2024, ModernNews has been at the forefront of digital reporting. Our mission is to provide unbiased, fact-checked information in a world of digital noise. We believe in transparency, ethics, and the power of truth.</p>
                        <p>With over 50 bureaus worldwide, we cover everything from local politics to global tech breakthroughs.</p>
                        <hr class="my-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white p-3 rounded-circle me-3">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Headquarters</h6>
                                <p class="mb-0 text-muted">123 Journalism Way, Manhattan, NY</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="bg-warning text-dark p-3 rounded-circle me-3">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Contact Support</h6>
                                <p class="mb-0 text-muted">+1 (555) 000-NEWS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="map-container">
                            <div class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-map text-primary mb-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4.5-.9v12.99l4.5.9V1.91zm1 12.99 4-1.143V1.143l-4 1.143v12.99zm-6-.1L1 15.947V1.953l4-.8V14.8z"/>
                                </svg>
                                <h5>Interactive Map View</h5>
                                <p class="text-muted small">Embedded Google Maps would render here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // 1. Generate Hot News (Carousel)
            const hotNewsData = [
                { title: "Future of AI in Media", desc: "How artificial intelligence is reshaping newsrooms globally.", img: "https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&q=80&w=800" },
                { title: "Global Climate Summit", desc: "Leaders gather to discuss urgent carbon reduction targets.", img: "https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&q=80&w=800" },
                { title: "SpaceX Mars Mission Update", desc: "The next window for orbital launches has been confirmed.", img: "https://images.unsplash.com/photo-1517976487492-5750f3195933?auto=format&fit=crop&q=80&w=800" }
            ];

            hotNewsData.forEach((item, index) => {
                const activeClass = index === 0 ? 'active' : '';
                $('#hotNewsItems').append(`
                    <div class="carousel-item ${activeClass}">
                        <img src="${item.img}" class="d-block w-100" alt="News">
                        <div class="carousel-caption">
                            <h3 class="fw-bold text-warning">${item.title}</h3>
                            <p>${item.desc}</p>
                        </div>
                    </div>
                `);
            });

            // 2. Generate Latest News (10 Items)
            for(let i = 1; i <= 10; i++) {
                $('#latestNewsList').append(`
                    <div class="latest-news-item p-3 mb-2 rounded d-flex align-items-center">
                        <img src="https://picsum.photos/seed/${i+10}/100/100" class="news-thumb me-3" alt="thumb">
                        <div>
                            <h6 class="mb-1 fw-bold">Breaking Headline Article #${i}</h6>
                            <p class="mb-1 text-muted small">Brief summary of the news story for readers to preview...</p>
                            <span class="badge bg-secondary">May ${i}, 2024</span>
                        </div>
                    </div>
                `);
            }

            // 3. Generate Career Data (5 Items)
            const jobs = [
                { title: "Senior Investigative Journalist", type: "Full-Time", loc: "New York" },
                { title: "Digital Content Editor", type: "Remote", loc: "London" },
                { title: "Data Scientist (Media Analytics)", type: "Full-Time", loc: "Singapore" },
                { title: "UI/UX Designer", type: "Contract", loc: "Berlin" },
                { title: "Social Media Strategist", type: "Full-Time", loc: "Tokyo" }
            ];

            jobs.forEach(job => {
                $('#careerList').append(`
                    <div class="career-card p-3 rounded-4 d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0 fw-bold">${job.title}</h5>
                            <span class="text-muted small">${job.loc}</span>
                        </div>
                        <span class="badge career-badge px-3 py-2">${job.type}</span>
                    </div>
                `);
            });

            // 4. Smooth Scrolling
            $('a.nav-link').on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 70
                    }, 800);
                }
            });

            // Simple Parallax Effect on Scroll
            $(window).scroll(function() {
                let scrolled = $(window).scrollTop();
                $('.parallax-section').css('background-position-y', -(scrolled * 0.1) + 'px');
            });
        });
    </script>
</body>
</html>
>>>>>>> 8b84bd2c9b928c8283b242f23158d198938f4228
