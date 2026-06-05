@extends('layouts.frontend')

@section('title', 'News')

@section('content')
<style>
:root {
    --brand-primary: #ff6b35;
    --brand-accent: #1d73b9;
    --brand-success: #18b0a4;
    --brand-dark: #1f2937;
    --brand-light: #f8f9fa;
    --brand-muted: #6b7280;
}

/* News Section Styles */
.news-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, rgba(255, 107, 53, 0.02), rgba(29, 115, 185, 0.02));
    overflow: hidden;
}

.news-header {
    margin-bottom: 3rem;
    text-align: center;
}

.news-header h1 {
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: 800;
    color: var(--brand-dark);
    margin-bottom: 0.5rem;
    letter-spacing: -0.02em;
}

.news-header h1 span {
    color: var(--brand-primary);
    position: relative;
}

.news-header h1 span::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, var(--brand-primary), var(--brand-accent));
    border-radius: 2px;
}

.news-header p {
    font-size: 1.125rem;
    color: var(--brand-muted);
    max-width: 500px;
    margin: 0 auto;
}

/* News Container - Horizontal Scroll */
.news-container {
    position: relative;
    padding: 2rem 0;
}

.news-scroll-wrapper {
    display: flex;
    overflow-x: auto;
    gap: 1.5rem;
    padding: 1rem 0;
    scroll-behavior: smooth;
    scroll-padding: 1rem;
    -webkit-overflow-scrolling: touch;
}

.news-scroll-wrapper::-webkit-scrollbar {
    height: 6px;
}

.news-scroll-wrapper::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.news-scroll-wrapper::-webkit-scrollbar-thumb {
    background: var(--brand-primary);
    border-radius: 10px;
}

.news-scroll-wrapper::-webkit-scrollbar-thumb:hover {
    background: var(--brand-accent);
}

/* News Card */
.news-card {
    flex: 0 0 calc(33.333% - 1rem);
    min-width: 300px;
    background: #fff;
    border-radius: 1.5rem;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    height: 100%;
    cursor: pointer;
    border: 2px solid transparent;
}

.news-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    border-color: var(--brand-primary);
}

.news-card-image {
    width: 100%;
    height: 220px;
    object-fit: cover;
    background: linear-gradient(135deg, #f0f0f0, #e8e8e8);
    position: relative;
}

.news-card-image-placeholder {
    width: 100%;
    height: 220px;
    background: linear-gradient(135deg, var(--brand-primary), var(--brand-accent));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 3rem;
}

.news-card-body {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    flex: 1;
    background: #fff;
}

.news-card-date {
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    color: var(--brand-primary);
    text-transform: uppercase;
    margin-bottom: 0.75rem;
}

.news-card-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--brand-dark);
    line-height: 1.4;
    margin-bottom: 0.75rem;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.news-card:hover .news-card-title {
    color: var(--brand-primary);
}

.news-card-excerpt {
    font-size: 0.95rem;
    color: var(--brand-muted);
    line-height: 1.6;
    margin-bottom: 1rem;
    flex: 1;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.news-card-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 1px solid #f0f0f0;
    padding-top: 1rem;
    margin-top: auto;
}

.news-card-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--brand-primary);
    font-weight: 600;
    font-size: 0.95rem;
    text-decoration: none;
    transition: all 0.3s ease;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    background: rgba(255, 107, 53, 0.05);
}

.news-card-btn:hover {
    color: #fff;
    background: var(--brand-primary);
    gap: 0.75rem;
}

.news-card-badge {
    display: inline-block;
    background: linear-gradient(135deg, var(--brand-primary), var(--brand-accent));
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 999px;
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* Scroll Buttons */
.news-scroll-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: var(--brand-primary);
    color: white;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    z-index: 10;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.news-scroll-button:hover {
    background: var(--brand-accent);
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.news-scroll-button-prev {
    left: -22px;
}

.news-scroll-button-next {
    right: -22px;
}

@media (max-width: 1200px) {
    .news-card {
        flex: 0 0 calc(50% - 0.75rem);
        min-width: 280px;
    }

    .news-scroll-button-prev {
        left: 10px;
    }

    .news-scroll-button-next {
        right: 10px;
    }
}

@media (max-width: 768px) {
    .news-section {
        padding: 3rem 0;
    }

    .news-header h1 {
        font-size: 1.75rem;
    }

    .news-container {
        padding: 1.5rem 0;
    }

    .news-card {
        flex: 0 0 calc(85% - 0.75rem);
        min-width: 280px;
    }

    .news-scroll-button {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }

    .news-scroll-button-prev {
        left: 5px;
    }

    .news-scroll-button-next {
        right: 5px;
    }

    .news-card-body {
        padding: 1.25rem;
    }
}

@media (max-width: 480px) {
    .news-header h1 h1 span::after {
        bottom: -4px;
        height: 3px;
    }

    .news-card {
        flex: 0 0 90%;
        min-width: 250px;
    }

    .news-card-image {
        height: 180px;
    }

    .news-card-title {
        font-size: 1.1rem;
    }

    .news-card-excerpt {
        font-size: 0.9rem;
    }

    .news-scroll-button {
        width: 36px;
        height: 36px;
        font-size: 0.9rem;
    }
}
</style>

<section class="news-section">
    <div class="container">
        <div class="news-header">
            <h1>Latest <span>News</span></h1>
            <p>Stay updated with our newest stories and announcements</p>
        </div>

        <div class="news-container">
            <button class="news-scroll-button news-scroll-button-prev" onclick="scrollNews(-1)">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            <div class="news-scroll-wrapper" id="newsScroll">
                @forelse($news ?? [] as $item)
                    <article class="news-card">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="news-card-image">
                        @else
                            <div class="news-card-image-placeholder">
                                <i class="fas fa-newspaper"></i>
                            </div>
                        @endif

                        <div class="news-card-body">
                            <span class="news-card-date">{{ $item->created_at->format('M d, Y') }}</span>
                            <h3 class="news-card-title">{{ $item->title }}</h3>
                            <p class="news-card-excerpt">{{ Str::limit($item->content, 120) }}</p>

                            <div class="news-card-footer">
                                <span class="news-card-badge">Featured</span>
                                <a href="#" class="news-card-btn">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div style="grid-column: 1/-1; text-align: center; padding: 3rem; color: var(--brand-muted);">
                        <i class="fas fa-inbox" style="font-size: 3rem; opacity: 0.5; margin-bottom: 1rem; display: block;"></i>
                        <p>No news available yet</p>
                    </div>
                @endforelse
            </div>

            <button class="news-scroll-button news-scroll-button-next" onclick="scrollNews(1)">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

<script>
function scrollNews(direction) {
    const scrollContainer = document.getElementById('newsScroll');
    const scrollAmount = 350;
    
    if (direction === -1) {
        scrollContainer.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    } else {
        scrollContainer.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    }
}

// Optional: Auto-hide buttons on scroll end
document.getElementById('newsScroll')?.addEventListener('scroll', function() {
    const isAtStart = this.scrollLeft === 0;
    const isAtEnd = this.scrollLeft + this.clientWidth >= this.scrollWidth - 10;
    
    document.querySelector('.news-scroll-button-prev').style.opacity = isAtStart ? '0.3' : '1';
    document.querySelector('.news-scroll-button-next').style.opacity = isAtEnd ? '0.3' : '1';
});
</script>

@endsection
