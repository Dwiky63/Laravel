@extends('layouts.frontend')

@section('title', 'Home')

@section('content')
<style>
:root {
    --brand-bg: #f8f9fa;
    --brand-primary: #ff6b35;
    --brand-accent: #1d73b9;
    --brand-success: #18b0a4;
    --brand-muted: #5b6d8b;
    --brand-light: #ffffff;
}
body {
    background: var(--brand-bg);
    color: #1f2937;
}
.nav-pills .nav-link {
    border-radius: 999px;
    padding: .75rem 1.25rem;
    color: #374151;
}
.nav-pills .nav-link.active,
.nav-pills .nav-link:hover {
    background: var(--brand-primary);
    color: #fff;
}
.rounded-card {
    border-radius: 1.5rem;
    background: #fff;
    border: none;
}
.card-no-shadow {
    box-shadow: none;
}
.section-heading {
    font-weight: 700;
    letter-spacing: -.03em;
}
.section-subtitle {
    color: var(--brand-muted);
}
.latest-news-list {
    max-height: 420px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}
.latest-news-list .list-group-item {
    border: none;
    padding: 1rem 0;
    border-bottom: 1px solid #f0f0f0;
}
.latest-news-list .list-group-item:last-child {
    border-bottom: none;
}
.latest-news-list .list-group-item h6 {
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.4;
}
.latest-news-list .news-badge {
    font-size: .7rem;
    text-transform: uppercase;
    letter-spacing: .08em;
}

section {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}

.rounded-card,
.about-panel,
.career-card {
    border-radius: 1.25rem;
    box-shadow: 0 4px 20px rgba(0,0,0,.04);
}

.career-card {
    padding: 1.25rem !important;
    min-height: 180px;
    background: linear-gradient(135deg, rgba(255,107,53,.12), rgba(29,115,185,.1)) !important;
    border: 1px solid rgba(29,115,185,.15) !important;
    transition: .3s ease;
}

.career-card:hover {
    transform: translateY(-4px);
}

.career-card h5 {
    font-size: 1.1rem;
    margin-bottom: .75rem;
}

.career-card p {
    margin-bottom: .5rem;
}

.career-card .btn {
    border-radius: 999px;
}

.about-panel {
    height: 100%;
    padding: 2rem !important;
    background: linear-gradient(180deg, rgba(255,255,255,.95), rgba(248,249,250,.95)) !important;
}

.map-frame {
    border: 0;
    width: 100%;
    height: 100%;
    min-height: 320px;
    border-radius: 1.25rem;
}

#about .rounded-card {
    height: 100%;
    overflow: hidden;
}

#news .rounded-card {
    padding: 2rem !important;
}
@media (max-width: 768px) {
    .carousel-item,
    .carousel-item .position-relative {
        height: 250px;
    }
    
    .latest-news-list {
        max-height: none;
        overflow: visible;
        margin-top: 1.5rem;
    }
    
    .section-heading {
        font-size: 1.75rem;
    }
    
    .display-5 {
        font-size: 2rem;
    }
    
    section {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
    }

    .career-card {
        min-height: auto;
    }

    .map-frame {
        min-height: 250px;
    }
}

@media (max-width: 991px) {
    .carousel-item,
    .carousel-item .position-relative {
        height: 360px;
    }
}
</style>

<section id="home" class="py-5">
    <div class="container">
        <div class="mb-5">
            <span class="badge text-bg-warning rounded-pill mb-3">Trusted news daily</span>
            <h1 class="display-5 fw-bold section-heading">Modern News for Every Story</h1>
            <p class="lead section-subtitle">A polished, flat design news landing page with live-style headlines, career highlights, and company profile details.</p>
        </div>

        <div class="row g-4 align-items-stretch">
            <div class="col-12 col-lg-9">
                <div id="hotNewsCarousel" class="carousel slide rounded-card overflow-hidden card-no-shadow" data-bs-ride="carousel">
                    <div class="carousel-indicators"></div>
                    <div class="carousel-inner"></div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#hotNewsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#hotNewsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="rounded-card p-4 latest-news-list">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h2 class="h5 mb-1">Latest News</h2>
                            <p class="mb-0 text-muted">Latest 4 headlines from around the globe.</p>
                        </div>
                        <span class="badge text-bg-primary">Live</span>
                    </div>
                    <ul id="latestNewsList" class="list-group list-group-flush"></ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="news" class="py-5">
    <div class="container">
        <div class="rounded-card">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <h2 class="section-heading">Featured Coverage</h2>
                    <p class="section-subtitle">Curated analysis, breaking stories, and editorial picks to keep you informed without distraction.</p>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex gap-2 flex-wrap">
                        <span class="badge text-bg-secondary">Politics</span>
                        <span class="badge text-bg-info">Business</span>
                        <span class="badge text-bg-success">Science</span>
                        <span class="badge text-bg-danger">Culture</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="career" class="py-5">
    <div class="container">
        <div class="mb-4">
            <h2 class="section-heading">Career Opportunities</h2>
            <p class="section-subtitle">Explore active roles at a media organization built for modern storytelling.</p>
        </div>
        <div id="careerCards" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3"></div>
        <div class="text-center mt-5">
            <a href="#about" class="btn btn-outline-primary btn-lg">View More Careers</a>
        </div>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="about-panel">
                    <h2 class="section-heading">About Us</h2>
                    <p class="section-subtitle">We deliver insightful journalism with an approachable, rounded design system and clear navigation for readers on every device.</p>
                    <p>Our newsroom focuses on trustworthy storytelling, fast updates, and a positive user experience. We blend local reporting with global perspective, all wrapped in a calm, modern interface.</p>
                    <div class="mt-4">
                        <h6 class="mb-2">Contact Details</h6>
                        <p class="mb-1"><strong>Address:</strong> 1200 Media Avenue, Suite 600, City Center</p>
                        <p class="mb-1"><strong>Email:</strong> hello@modernnews.example</p>
                        <p class="mb-0"><strong>Phone:</strong> +1 (555) 321-9876</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rounded-card overflow-hidden">
                    <iframe class="map-frame" src="https://www.google.com/maps?q=new+york+city&output=embed" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function() {
    var hotNews = [
        {
            title: 'Global Markets Rally After Policy Update',
            subtitle: 'Markets respond as central banks shift strategy.',
            category: 'Business',
            label: 'Hot',
            image: 'https://via.placeholder.com/1200x500/1d73b9/ffffff?text=Global+Markets'
        },
        {
            title: 'New Advances in Clean Energy Research',
            subtitle: 'Scientists publish a breakthrough that could reshape power generation.',
            category: 'Science',
            label: 'Analysis',
            image: 'https://via.placeholder.com/1200x500/18b0a4/ffffff?text=Clean+Energy'
        },
        {
            title: 'Creative Industries Thrive in City Renewal Plan',
            subtitle: 'Local culture and tech converge in a new urban agenda.',
            category: 'Culture',
            label: 'Featured',
            image: 'https://via.placeholder.com/1200x500/ff6b35/ffffff?text=Creative+Industries'
        }
    ];

    var latestNews = [
        'International trade talks build momentum',
        'City leaders launch sustainable transit blueprint',
        'Major studio reveals next-generation streaming strategy',
        'Health experts call for improved mental wellness access',
        'Electric vehicle adoption hits a record high',
        'Local startup secures growth-stage funding',
        'Education reform debate intensifies ahead of elections',
        'Sports championship returns to downtown arena',
        'Tech regulation proposals move through legislature',
        'Fashion industry embraces circular material sources'
    ];

    var careers = [
        {title: 'Digital Content Editor', location: 'Remote / NY', salary: '$75k - $95k'},
        {title: 'Audience Growth Manager', location: 'London / Berlin', salary: '$70k - $90k'},
        {title: 'Visual Storytelling Lead', location: 'Los Angeles', salary: '$88k - $110k'},
        {title: 'Product Strategist', location: 'Toronto', salary: '$82k - $105k'},
        {title: 'Community Engagement Specialist', location: 'Austin', salary: '$65k - $78k'}
    ];

    var $carouselInner = $('#hotNewsCarousel .carousel-inner');
    var $indicators = $('#hotNewsCarousel .carousel-indicators');
    $.each(hotNews, function(index, item) {
        var activeClass = index === 0 ? ' active' : '';
        var slide = $('<div>').addClass('carousel-item' + activeClass);
        var slideContent = $('<div class="position-relative" style="min-height: 360px; background-size: cover; background-position: center; background-repeat: no-repeat;">')
            .css('background-image', 'linear-gradient(180deg, rgba(0,0,0,.18), rgba(0,0,0,.42)), url(' + item.image + ')')
            .append(
                '<div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(180deg, rgba(0,0,0,.25), rgba(0,0,0,.05));"></div>' +
                '<div class="position-absolute bottom-0 p-4 text-white" style="z-index: 2;">' +
                '<span class="badge bg-warning text-dark mb-3">' + item.label + '</span>' +
                '<h3 class="fw-bold">' + item.title + '</h3>' +
                '<p class="mb-2">' + item.subtitle + '</p>' +
                '<span class="badge bg-primary">' + item.category + '</span>' +
                '</div>'
            );
        slide.append(slideContent);
        $carouselInner.append(slide);
        $indicators.append('<button type="button" data-bs-target="#hotNewsCarousel" data-bs-slide-to="' + index + '"' + (index === 0 ? ' class="active" aria-current="true"' : '') + ' aria-label="Slide ' + (index + 1) + '"></button>');
    });

    var $latestList = $('#latestNewsList');
    $.each(latestNews.slice(0, 4), function(index, headline) {
        $latestList.append(
            '<li class="list-group-item">' +
            '<div class="d-flex justify-content-between align-items-start gap-2">' +
            '<div style="flex: 1;">' +
            '<h6 class="mb-1">' + headline + '</h6>' +
            '<small class="text-muted">' + (index + 1) + ' mins ago</small>' +
            '</div>' +
            '<span class="badge bg-secondary news-badge flex-shrink-0">News</span>' +
            '</div>' +
            '</li>'
        );
    });

    var $careerCards = $('#careerCards');
    $.each(careers, function(index, job) {
        $careerCards.append(
            '<div class="col">' +
            '<div class="career-card p-4 h-100">' +
            '<h5>' + job.title + '</h5>' +
            '<p class="mb-2 text-muted">' + job.location + '</p>' +
            '<p class="mb-3">' + job.salary + '</p>' +
            '<button class="btn btn-outline-primary btn-sm">View Role</button>' +
            '</div>' +
            '</div>'
        );
    });
});
</script>
@endsection
