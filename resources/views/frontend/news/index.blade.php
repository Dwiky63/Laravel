@extends('layouts.frontend')

@section('title', 'News')

@section('content')

/* ===== SECTION: CSS STYLES ===== */
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Rajdhani:wght@500;600;700;800&display=swap');

:root {
    --brand-primary : #ff6b35;
    --brand-accent  : #ffc107;
    --background    : #0a0a0a;
    --surface       : #111111;
    --surface-2     : #1a1a1a;
    --text-dark     : #f0f0f0;
    --text-light    : #888888;
    --border-glow   : rgba(255, 107, 53, 0.4);
    --shadow-neon   : 0 0 20px rgba(255, 107, 53, 0.3);
    --shadow-accent : 0 0 15px rgba(255, 193, 7, 0.25);
    --transition    : all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    --news-gap      : 24px;
}

/* ===== GLOBAL BODY & OVERRIDES ===== */
body {
    background-color: var(--background) !important;
    color: var(--text-dark) !important;
    font-family: 'Inter', sans-serif;
}

.navbar {
    background: rgba(10, 10, 10, 0.8) !important;
    border-bottom: 1px solid rgba(255, 107, 53, 0.15) !important;
    backdrop-filter: blur(12px) !important;
    transition: var(--transition);
}

.navbar-brand, .navbar-nav .nav-link {
    color: var(--text-dark) !important;
    transition: var(--transition);
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
    color: var(--brand-primary) !important;
}

.navbar-toggler {
    border-color: rgba(255, 107, 53, 0.3) !important;
}

.navbar-toggler-icon {
    filter: invert(1);
}

footer {
    background: #111111 !important;
    color: var(--text-light) !important;
    border-top: 1px solid rgba(255, 107, 53, 0.1) !important;
}

/* ===== PAGE WRAPPER & GRID BACKGROUND ===== */
.news-page-wrapper {
    background-color: var(--background);
    background-image: 
        linear-gradient(rgba(255, 107, 53, 0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 107, 53, 0.03) 1px, transparent 1px);
    background-size: 50px 50px;
    position: relative;
    overflow: hidden;
    padding-bottom: 5rem;
    min-height: 100vh;
}

/* Background floating decorations */
.news-bg-decorations {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
    overflow: hidden;
}

.news-glow-circle {
    position: absolute;
    border-radius: 50%;
    filter: blur(100px);
    opacity: 0.12;
    mix-blend-mode: screen;
}

.news-glow-1 {
    top: 5%;
    right: 5%;
    width: 350px;
    height: 350px;
    background: var(--brand-primary);
    animation: glowBreath 8s infinite alternate ease-in-out;
}

.news-glow-2 {
    bottom: 15%;
    left: 5%;
    width: 450px;
    height: 450px;
    background: var(--brand-accent);
    animation: glowBreath 12s infinite alternate ease-in-out;
}

.news-diagonal-line {
    position: absolute;
    background: linear-gradient(90deg, transparent, var(--brand-primary), transparent);
    height: 1px;
    width: 150%;
    opacity: 0.1;
    transform: rotate(-30deg);
}

.news-line-1 {
    top: 25%;
    left: -25%;
    animation: gridFloat 25s linear infinite;
}

.news-line-2 {
    top: 65%;
    left: -35%;
    animation: gridFloat 35s linear infinite reverse;
}

/* ===== HERO SECTION ===== */
.news-hero {
    position: relative;
    padding: 7rem 0 3.5rem;
    overflow: hidden;
    border-bottom: 1px solid rgba(255, 107, 53, 0.15);
    z-index: 1;
}

/* Subtle CRT Scanline overlay effect */
.news-hero::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        rgba(10, 10, 10, 0) 50%, 
        rgba(0, 0, 0, 0.3) 50%
    );
    background-size: 100% 4px;
    pointer-events: none;
    z-index: 2;
    opacity: 0.4;
}

.news-hero-content {
    text-align: center;
    position: relative;
    z-index: 3;
}

.news-badge-capsule {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 6px 18px;
    border: 1px solid var(--brand-primary);
    border-radius: 100px;
    background: rgba(255, 107, 53, 0.1);
    color: var(--brand-primary);
    font-family: 'Rajdhani', sans-serif;
    font-weight: 700;
    font-size: 0.85rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    margin-bottom: 1.5rem;
    animation: neonPulse 2s infinite ease-in-out;
}

.news-hero-title {
    font-family: 'Rajdhani', sans-serif;
    font-weight: 800;
    font-size: clamp(2.5rem, 6vw, 4.5rem);
    text-transform: uppercase;
    background: linear-gradient(135deg, var(--brand-primary) 30%, var(--brand-accent) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    letter-spacing: -0.01em;
    margin-bottom: 1rem;
    line-height: 1.1;
    filter: drop-shadow(0 0 15px rgba(255, 107, 53, 0.2));
}

.news-hero-subtitle {
    color: var(--text-light);
    font-size: 1.125rem;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* ===== MAIN SECTION & SLIDER ===== */
.news-main-section {
    position: relative;
    z-index: 2;
    padding: 4rem 0;
}

.news-slider-outer {
    position: relative;
    width: 100%;
}

.news-slider-container {
    position: relative;
    display: flex;
    align-items: center;
    padding: 0 45px;
}

.news-slider-viewport {
    overflow: hidden;
    width: 100%;
    padding: 20px 0; /* Space for card hover translate & glow */
    cursor: grab;
}

.news-slider-viewport:active {
    cursor: grabbing;
}

.news-slider-track {
    display: flex;
    gap: var(--news-gap);
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform;
}

.news-slider-slide {
    flex: 0 0 100%;
    user-select: none;
    box-sizing: border-box;
}

@media (min-width: 576px) {
    .news-slider-slide {
        flex: 0 0 calc(50% - (var(--news-gap) / 2));
    }
}

@media (min-width: 992px) {
    .news-slider-slide {
        flex: 0 0 calc(33.333% - (var(--news-gap) * 2 / 3));
    }
}

/* ===== SLIDER NAVIGATION ===== */
.news-slider-nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: transparent;
    border: 2px solid var(--brand-primary);
    color: var(--brand-primary);
    border-radius: 50%;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
    cursor: pointer;
    z-index: 10;
    box-shadow: 0 0 10px rgba(255, 107, 53, 0.1);
}

.news-slider-nav-btn:hover:not(:disabled) {
    background: var(--brand-primary);
    color: #0a0a0a;
    box-shadow: var(--shadow-neon);
    transform: translateY(-50%) scale(1.05);
}

.news-slider-nav-btn:disabled {
    opacity: 0.25;
    cursor: not-allowed;
    border-color: rgba(255, 107, 53, 0.2);
    color: rgba(255, 107, 53, 0.2);
    box-shadow: none;
}

.news-slider-nav-btn-prev {
    left: -15px;
}

.news-slider-nav-btn-next {
    right: -15px;
}

.news-slider-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 2.5rem;
}

.news-slider-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #333;
    border: none;
    padding: 0;
    cursor: pointer;
    transition: var(--transition);
}

.news-slider-dot.active {
    width: 24px;
    border-radius: 100px;
    background: var(--brand-primary);
    box-shadow: 0 0 10px var(--brand-primary);
}

/* ===== NEWS CARD DESIGN ===== */
.news-card-glow-wrapper {
    transition: var(--transition);
    height: 100%;
    filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.5));
}

.news-card-glow-wrapper:hover {
    transform: translateY(-6px);
    filter: drop-shadow(0 0 15px rgba(255, 107, 53, 0.35));
}

.news-card {
    background: rgba(255, 107, 53, 0.2); /* Neon orange border outline */
    padding: 1px;
    height: 100%;
    clip-path: polygon(0 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%);
    transition: var(--transition);
}

.news-card-glow-wrapper:hover .news-card {
    background: linear-gradient(135deg, var(--brand-primary), var(--brand-accent));
}

.news-card-inner {
    background: var(--surface);
    height: 100%;
    display: flex;
    flex-direction: column;
    clip-path: polygon(0 0, 100% 0, 100% calc(100% - 19px), calc(100% - 19px) 100%, 0 100%);
    transition: var(--transition);
}

.news-card-glow-wrapper:hover .news-card-inner {
    background: var(--surface-2);
}

.news-card-accent-bar {
    height: 2px;
    background: var(--brand-primary);
    width: 100%;
    transition: var(--transition);
}

.news-card-glow-wrapper:hover .news-card-accent-bar {
    background: linear-gradient(90deg, var(--brand-primary), var(--brand-accent));
}

.news-card-img-container {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.news-card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: grayscale(100%);
    transition: var(--transition);
}

.news-card-glow-wrapper:hover .news-card-img {
    filter: grayscale(0%);
    transform: scale(1.05);
}

.news-card-placeholder-img {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #161616, #222);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--brand-primary);
    font-size: 3rem;
    border-bottom: 1px solid rgba(255, 107, 53, 0.1);
}

.news-card-category {
    position: absolute;
    top: 12px;
    left: 12px;
    background: var(--brand-primary);
    color: #0a0a0a;
    font-family: 'Rajdhani', sans-serif;
    font-weight: 700;
    font-size: 0.725rem;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 4px 10px;
    border-radius: 2px;
    z-index: 3;
    box-shadow: 0 0 10px rgba(255, 107, 53, 0.4);
}

.news-card-body {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.news-card-title {
    font-family: 'Rajdhani', sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 1.25rem;
    color: var(--text-dark);
    margin-bottom: 0.75rem;
    line-height: 1.35;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    transition: var(--transition);
}

.news-card-glow-wrapper:hover .news-card-title {
    color: var(--brand-primary);
}

.news-card-excerpt {
    color: var(--text-light);
    font-size: 0.9rem;
    line-height: 1.55;
    margin-bottom: 1.25rem;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    flex: 1;
}

.news-card-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 0.8rem;
    color: var(--text-light);
    margin-bottom: 1.25rem;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    padding-top: 0.85rem;
}

.news-card-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    border: 1px solid var(--brand-primary);
    color: var(--brand-primary);
    background: transparent;
    font-family: 'Rajdhani', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.825rem;
    letter-spacing: 0.05em;
    padding: 8px 16px;
    text-decoration: none;
    transition: var(--transition);
    width: fit-content;
    clip-path: polygon(0 0, 100% 0, 100% calc(100% - 6px), calc(100% - 6px) 100%, 0 100%);
}

.news-card-glow-wrapper:hover .news-card-btn {
    background: var(--brand-primary);
    color: #0a0a0a !important;
    box-shadow: 0 0 10px rgba(255, 107, 53, 0.4);
}

/* ===== EMPTY STATE ===== */
.news-empty-state {
    text-align: center;
    padding: 5rem 2rem;
    background: var(--surface);
    border: 1px dashed rgba(255, 107, 53, 0.3);
    border-radius: 8px;
    max-width: 600px;
    margin: 2rem auto;
    clip-path: polygon(0 0, 100% 0, 100% calc(100% - 24px), calc(100% - 24px) 100%, 0 100%);
}

.news-empty-state-icon {
    font-size: 4rem;
    color: var(--brand-primary);
    opacity: 0.7;
    margin-bottom: 1.5rem;
}

.news-empty-state-title {
    font-family: 'Rajdhani', sans-serif;
    font-weight: 700;
    font-size: 1.5rem;
    text-transform: uppercase;
    color: var(--text-dark);
    margin-bottom: 0.75rem;
}

.news-empty-state-text {
    color: var(--text-light);
    font-size: 1rem;
    margin: 0;
}

/* ===== ANIMATIONS KEYFRAMES ===== */
@keyframes neonPulse {
    0%, 100% {
        opacity: 0.8;
        box-shadow: 0 0 5px rgba(255, 107, 53, 0.2), inset 0 0 5px rgba(255, 107, 53, 0.1);
    }
    50% {
        opacity: 1;
        box-shadow: 0 0 15px rgba(255, 107, 53, 0.6), inset 0 0 8px rgba(255, 107, 53, 0.3);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translate3d(-40px, 0, 0);
    }
    to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@keyframes gridFloat {
    0% {
        transform: translate3d(-10%, -10%, 0) rotate(-30deg);
    }
    100% {
        transform: translate3d(10%, 10%, 0) rotate(-30deg);
    }
}

@keyframes glowBreath {
    0%, 100% {
        opacity: 0.08;
        transform: scale(1);
    }
    50% {
        opacity: 0.16;
        transform: scale(1.15);
    }
}

/* Apply Entry Animations to Cards */
.news-slider-slide {
    animation: slideInLeft 0.6s cubic-bezier(0.16, 1, 0.3, 1) both;
}

/* Stagger card load animations */
.news-slider-slide:nth-child(1) { animation-delay: 0.1s; }
.news-slider-slide:nth-child(2) { animation-delay: 0.2s; }
.news-slider-slide:nth-child(3) { animation-delay: 0.3s; }
.news-slider-slide:nth-child(4) { animation-delay: 0.4s; }
.news-slider-slide:nth-child(5) { animation-delay: 0.5s; }

/* ===== RESPONSIVENESS ===== */
@media (max-width: 991px) {
    .news-hero {
        padding: 6rem 0 2.5rem;
    }
    .news-slider-container {
        padding: 0 35px;
    }
    .news-slider-nav-btn {
        width: 42px;
        height: 42px;
    }
}

@media (max-width: 575px) {
    .news-hero {
        padding: 5.5rem 0 2rem;
    }
    .news-slider-container {
        padding: 0 20px;
    }
    .news-slider-nav-btn {
        width: 36px;
        height: 36px;
    }
    .news-slider-nav-btn-prev {
        left: -10px;
    }
    .news-slider-nav-btn-next {
        right: -10px;
    }
    .news-card-img-container {
        height: 180px;
    }
}
</style>

<div class="news-page-wrapper">
    <!-- Background Moving Elements -->
    <div class="news-bg-decorations">
        <div class="news-glow-circle news-glow-1"></div>
        <div class="news-glow-circle news-glow-2"></div>
        <div class="news-diagonal-line news-line-1"></div>
        <div class="news-diagonal-line news-line-2"></div>
    </div>

    <!-- Hero Section -->
    <header class="news-hero">
        <div class="container">
            <div class="news-hero-content">
                <span class="news-badge-capsule">📰 LATEST NEWS</span>
                <h1 class="news-hero-title">BERITA TERKINI</h1>
                <p class="news-hero-subtitle">Ikuti perkembangan terbaru, update teknologi, dan wawasan industri langsung dari tim kami.</p>
            </div>
        </div>
    </header>

    <!-- Main Content Section -->
    <section class="news-main-section">
        <div class="container">
            @if(isset($allNews) && $allNews->count() > 0)
                <!-- News Slider Container -->
                <div class="news-slider-outer">
                    <div class="news-slider-container">
                        <!-- Navigation Buttons -->
                        <button class="news-slider-nav-btn news-slider-nav-btn-prev" id="newsPrevBtn" aria-label="Previous slide">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        
                        <div class="news-slider-viewport" id="newsSliderViewport">
                            <div class="news-slider-track" id="newsSliderTrack">
                                @foreach($allNews as $index => $item)
                                    <div class="news-slider-slide" data-index="{{ $index }}">
                                        <div class="news-card-glow-wrapper">
                                            <article class="news-card">
                                                <div class="news-card-inner">
                                                    <div class="news-card-accent-bar"></div>
                                                    
                                                    <div class="news-card-img-container">
                                                        <!-- Category Label (badge neon oranye) -->
                                                        <span class="news-card-category">
                                                            {{ $item->category ?? 'Tech Update' }}
                                                        </span>
                                                        
                                                        @if($item->image)
                                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="news-card-img" draggable="false">
                                                        @else
                                                            <div class="news-card-placeholder-img">
                                                                <i class="fas fa-newspaper"></i>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="news-card-body">
                                                        <h3 class="news-card-title">{{ $item->title }}</h3>
                                                        <p class="news-card-excerpt">{{ Str::limit($item->content, 120) }}</p>
                                                        
                                                        <div class="news-card-meta">
                                                            <span>📅 {{ $item->created_at->format('d M Y') }}</span>
                                                            <span>✍️ {{ $item->author?->name ?? 'Admin' }}</span>
                                                        </div>
                                                        
                                                        <a href="{{ route('frontendnews.show', $item->id) }}" class="news-card-btn">
                                                            Read More →
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <button class="news-slider-nav-btn news-slider-nav-btn-next" id="newsNextBtn" aria-label="Next slide">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>

                    <!-- Dot Indicators -->
                    <div class="news-slider-dots" id="newsSliderDots"></div>
                </div>
            @else
                <!-- Empty State -->
                <div class="news-empty-state">
                    <div class="news-empty-state-icon">
                        <i class="fas fa-inbox"></i>
                    </div>
                    <h3 class="news-empty-state-title">Belum Ada Berita</h3>
                    <p class="news-empty-state-text">Silakan kembali lagi nanti untuk informasi dan pembaruan terbaru.</p>
                </div>
            @endif
        </div>
    </section>
</div>

/* ===== SECTION: JAVASCRIPT SLIDER ===== */
<script>
document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('newsSliderTrack');
    const viewport = document.getElementById('newsSliderViewport');
    const prevBtn = document.getElementById('newsPrevBtn');
    const nextBtn = document.getElementById('newsNextBtn');
    const dotsContainer = document.getElementById('newsSliderDots');
    
    if (!track || !viewport) return;
    
    const slides = Array.from(track.children);
    const totalSlides = slides.length;
    if (totalSlides === 0) return;
    
    let currentIndex = 0;
    let autoplayTimer = null;
    let visibleSlides = getVisibleSlidesCount();
    let maxIndex = Math.max(0, totalSlides - visibleSlides);
    
    // Functions
    function getVisibleSlidesCount() {
        if (window.innerWidth >= 992) return 3;
        if (window.innerWidth >= 576) return 2;
        return 1;
    }
    
    function updateLayout() {
        visibleSlides = getVisibleSlidesCount();
        maxIndex = Math.max(0, totalSlides - visibleSlides);
        
        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }
        
        renderDots();
        goToSlide(currentIndex);
        
        // Hide elements if there's nothing to scroll
        if (totalSlides <= visibleSlides) {
            if (prevBtn) prevBtn.style.display = 'none';
            if (nextBtn) nextBtn.style.display = 'none';
            if (dotsContainer) dotsContainer.style.display = 'none';
        } else {
            if (prevBtn) prevBtn.style.display = 'flex';
            if (nextBtn) nextBtn.style.display = 'flex';
            if (dotsContainer) dotsContainer.style.display = 'flex';
        }
    }
    
    function renderDots() {
        if (!dotsContainer) return;
        dotsContainer.innerHTML = '';
        
        if (totalSlides <= visibleSlides) return;
        
        const dotsCount = maxIndex + 1;
        for (let i = 0; i < dotsCount; i++) {
            const dot = document.createElement('button');
            dot.classList.add('news-slider-dot');
            if (i === currentIndex) {
                dot.classList.add('active');
            }
            dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
            dot.addEventListener('click', () => {
                currentIndex = i;
                goToSlide(currentIndex);
                startAutoplay(); // Reset autoplay timer
            });
            dotsContainer.appendChild(dot);
        }
    }
    
    function goToSlide(index) {
        const slideWidth = slides[0].offsetWidth;
        const gap = parseFloat(getComputedStyle(track).gap) || 24;
        const stepWidth = slideWidth + gap;
        
        track.style.transform = `translateX(-${index * stepWidth}px)`;
        
        // Update dots state
        const dots = dotsContainer.querySelectorAll('.news-slider-dot');
        dots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
        
        // Disable state for navigation buttons
        if (prevBtn) prevBtn.disabled = (index === 0);
        if (nextBtn) nextBtn.disabled = (index === maxIndex);
    }
    
    function slideNext() {
        if (currentIndex < maxIndex) {
            currentIndex++;
        } else {
            currentIndex = 0; // Wrap around to beginning
        }
        goToSlide(currentIndex);
    }
    
    function slidePrev() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = maxIndex; // Wrap around to end
        }
        goToSlide(currentIndex);
    }
    
    function startAutoplay() {
        stopAutoplay();
        if (totalSlides <= visibleSlides) return;
        autoplayTimer = setInterval(slideNext, 5000);
    }
    
    function stopAutoplay() {
        if (autoplayTimer) {
            clearInterval(autoplayTimer);
        }
    }
    
    // Wire up events
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            slidePrev();
            startAutoplay();
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            slideNext();
            startAutoplay();
        });
    }
    
    // Hover event for pausing
    viewport.addEventListener('mouseenter', stopAutoplay);
    viewport.addEventListener('mouseleave', startAutoplay);
    
    // Window Resize handling
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(updateLayout, 100);
    });
    
    // Touch / Drag swiping
    let isDragging = false;
    let startX = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let dragOffset = 0;
    
    function getPositionX(e) {
        return e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
    }
    
    function dragStart(e) {
        if (totalSlides <= visibleSlides) return;
        isDragging = true;
        startX = getPositionX(e);
        stopAutoplay();
        
        track.style.transition = 'none';
        
        const slideWidth = slides[0].offsetWidth;
        const gap = parseFloat(getComputedStyle(track).gap) || 24;
        prevTranslate = -currentIndex * (slideWidth + gap);
    }
    
    function dragMove(e) {
        if (!isDragging) return;
        const currentX = getPositionX(e);
        dragOffset = currentX - startX;
        currentTranslate = prevTranslate + dragOffset;
        
        const maxTranslate = 0;
        const slideWidth = slides[0].offsetWidth;
        const gap = parseFloat(getComputedStyle(track).gap) || 24;
        const minTranslate = -maxIndex * (slideWidth + gap);
        
        // Friction boundary check
        if (currentTranslate > maxTranslate) {
            currentTranslate = maxTranslate + (currentTranslate - maxTranslate) * 0.3;
        } else if (currentTranslate < minTranslate) {
            currentTranslate = minTranslate + (currentTranslate - minTranslate) * 0.3;
        }
        
        track.style.transform = `translateX(${currentTranslate}px)`;
    }
    
    function dragEnd() {
        if (!isDragging) return;
        isDragging = false;
        
        track.style.transition = 'transform 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
        
        const threshold = 50;
        if (dragOffset < -threshold && currentIndex < maxIndex) {
            currentIndex++;
        } else if (dragOffset > threshold && currentIndex > 0) {
            currentIndex--;
        }
        
        goToSlide(currentIndex);
        startAutoplay();
        
        // Reset offset after a tiny timeout to avoid triggering click navigation
        setTimeout(() => {
            dragOffset = 0;
        }, 50);
    }
    
    // Mouse events
    track.addEventListener('mousedown', dragStart);
    track.addEventListener('mousemove', dragMove);
    track.addEventListener('mouseup', dragEnd);
    track.addEventListener('mouseleave', dragEnd);
    
    // Touch events
    track.addEventListener('touchstart', dragStart, { passive: true });
    track.addEventListener('touchmove', dragMove, { passive: true });
    track.addEventListener('touchend', dragEnd);
    
    // Click prevention on slide drag
    track.addEventListener('click', (e) => {
        if (Math.abs(dragOffset) > 10) {
            e.preventDefault();
            e.stopPropagation();
        }
    }, true);
    
    // Boot Layout
    updateLayout();
    startAutoplay();
});
</script>
@endsection
