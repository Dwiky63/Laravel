@extends ('layouts.frontend')
@section ('title','news & insights')
@section ('content')

<style>
    :root {
        --brand-primary: #ff6b35;
        --brand-accent: #ffc107;
        --background: #f8f9fa;
        --text-dark: #1a1a1a;
        --text-light: #6c757d;
        --border-light: #e9ecef;
        --white: #ffffff;
        --shadow-sm: 0 2px 8px rgba(0,0,0,0.08);
        --shadow-md: 0 8px 16px rgba(0,0,0,0.12);
        --shadow-lg: 0 16px 32px rgba(0,0,0,0.15);
        --transition: all 0.3s cubic-bezier(0.4,0,0.2,1);
    }

    /* ===== HERO ===== */
    .np-hero {
        background: linear-gradient(135deg, var(--brand-primary) 0%, #ff8f57 50%, var(--brand-accent) 100%);
        padding: 80px 0 100px;
        position: relative;
        overflow: hidden;
        margin-top: 80px;
    }

    .np-hero::before {
        content: '';
        position: absolute;
        top: -50%; right: -10%;
        width: 500px; height: 500px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    .np-hero::after {
        content: '';
        position: absolute;
        bottom: -30%; left: -5%;
        width: 400px; height: 400px;
        background: rgba(255,255,255,0.08);
        border-radius: 50%;
        animation: float 8s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50%       { transform: translateY(20px); }
    }

    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .np-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .np-hero-content {
        position: relative;
        z-index: 1;
        color: var(--white);
        text-align: center;
    }

    .np-hero-tag {
        display: inline-block;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        color: var(--white);
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 20px;
        border: 1px solid rgba(255,255,255,0.3);
        animation: slideDown 0.8s ease-out;
    }

    .np-hero-title {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 15px;
        animation: slideDown 0.8s ease-out 0.1s both;
    }

    .np-hero-sub {
        font-size: 1.15rem;
        opacity: 0.95;
        margin-bottom: 35px;
        animation: slideDown 0.8s ease-out 0.2s both;
    }

    /* Search */
    .np-hero-search {
        display: flex;
        gap: 10px;
        max-width: 520px;
        margin: 0 auto 40px;
        animation: slideDown 0.8s ease-out 0.3s both;
    }

    .np-hero-search input[type=search] {
        flex: 1;
        padding: 14px 20px;
        border: 2px solid rgba(255,255,255,0.4);
        border-radius: 25px;
        background: rgba(255,255,255,0.15);
        color: var(--white);
        font-size: 1rem;
        outline: none;
        transition: var(--transition);
        backdrop-filter: blur(10px);
    }

    .np-hero-search input[type=search]::placeholder { color: rgba(255,255,255,0.7); }
    .np-hero-search input[type=search]:focus { border-color: var(--white); background: rgba(255,255,255,0.25); }

    .np-hero-search-btn {
        padding: 14px 28px;
        background: var(--white);
        color: var(--brand-primary);
        border: none;
        border-radius: 25px;
        font-weight: 700;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .np-hero-search-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.2);
    }

    /* Stats */
    .np-hero-stats {
        display: grid;
        grid-template-columns: repeat(3, 180px);
        gap: 20px;
        justify-content: center;
        animation: slideDown 0.8s ease-out 0.4s both;
    }

    .np-hero-stat {
        background: rgba(255,255,255,0.15);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,0.25);
        padding: 22px;
        border-radius: 16px;
        text-align: center;
        color: var(--white);
        transition: var(--transition);
    }

    .np-hero-stat:hover {
        background: rgba(255,255,255,0.25);
        transform: translateY(-5px);
    }

    .np-hero-stat-num {
        display: block;
        font-size: 2rem;
        font-weight: 800;
        line-height: 1;
    }

    .np-hero-stat-label {
        font-size: 0.85rem;
        opacity: 0.9;
        margin-top: 6px;
    }

    /* ===== COMMON SECTION ===== */
    .np-section {
        padding: 60px 0;
    }

    .np-section-alt {
        background: linear-gradient(180deg, var(--white) 0%, var(--background) 100%);
        padding: 80px 0;
    }

    .np-sec-head {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    .np-sec-label {
        font-size: 0.75rem;
        font-weight: 700;
        color: var(--brand-primary);
        letter-spacing: 0.1em;
        text-transform: uppercase;
        margin-bottom: 4px;
    }

    .np-sec-title {
        font-size: 2rem;
        font-weight: 800;
        color: var(--text-dark);
        margin: 0;
    }

    .np-sec-title-center {
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--text-dark);
        text-align: center;
        margin-bottom: 10px;
    }

    .np-sec-sub-center {
        text-align: center;
        color: var(--text-light);
        font-size: 1rem;
        margin-bottom: 3rem;
    }

    /* ===== FEATURED WRAP ===== */
    .np-featured-wrap {
        display: grid;
        grid-template-columns: 1fr 340px;
        gap: 1.5rem;
    }

    /* Big card */
    .np-featured-main {
        display: flex;
        flex-direction: column;
        border-radius: 16px;
        overflow: hidden;
        background: var(--white);
        box-shadow: var(--shadow-sm);
        text-decoration: none;
        transition: var(--transition);
    }

    .np-featured-main:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
    }

    .np-featured-img {
        position: relative;
        height: 340px;
        overflow: hidden;
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
    }

    .np-featured-img img {
        width: 100%; height: 100%;
        object-fit: cover; display: block;
        transition: transform 0.4s;
    }

    .np-featured-main:hover .np-featured-img img { transform: scale(1.05); }

    .np-featured-img-ph {
        width: 100%; height: 100%;
        display: flex; align-items: center; justify-content: center;
        font-size: 4rem; color: rgba(255,255,255,0.5);
    }

    .np-feat-badge {
        position: absolute; top: 1rem; left: 1rem;
        background: var(--brand-primary);
        color: var(--white);
        font-size: 0.7rem; font-weight: 700;
        letter-spacing: 0.08em; text-transform: uppercase;
        padding: 0.3rem 0.85rem; border-radius: 999px;
    }

    .np-featured-body {
        padding: 1.75rem; 
        flex: 1;
        display: flex; flex-direction: column;
    }

    .np-featured-date {
        font-size: 0.75rem; font-weight: 700;
        color: var(--brand-primary);
        letter-spacing: 0.08em; text-transform: uppercase;
        margin-bottom: 0.75rem;
    }

    .np-featured-title {
        font-size: 1.5rem; font-weight: 800;
        color: var(--text-dark); line-height: 1.3;
        margin-bottom: 0.75rem; transition: color 0.3s;
    }

    .np-featured-main:hover .np-featured-title { color: var(--brand-primary); }

    .np-featured-excerpt {
        font-size: 0.975rem; color: var(--text-light);
        line-height: 1.7; flex: 1; margin-bottom: 1.25rem;
    }

    .np-featured-foot {
        display: flex; align-items: center; justify-content: space-between;
        border-top: 1px solid var(--border-light); padding-top: 1rem;
    }

    .np-author-row { display: flex; align-items: center; gap: 0.6rem; }

    .np-avatar {
        width: 32px; height: 32px; border-radius: 50%;
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
        color: var(--white); font-size: 0.75rem; font-weight: 700;
        display: flex; align-items: center; justify-content: center;
    }

    .np-author-name { font-size: 0.85rem; font-weight: 600; color: var(--text-dark); }

    .np-read-link {
        font-size: 0.85rem; font-weight: 600;
        color: var(--brand-primary);
    }

    /* Side cards */
    .np-featured-sides { display: flex; flex-direction: column; gap: 1rem; }

    .np-side-card {
        display: flex; gap: 1rem;
        background: var(--white); border-radius: 12px;
        overflow: hidden; box-shadow: var(--shadow-sm);
        text-decoration: none; padding: 0.75rem;
        align-items: center; transition: var(--transition);
    }

    .np-side-card:hover { transform: translateX(4px); box-shadow: var(--shadow-md); }

    .np-side-img {
        width: 90px; height: 80px; border-radius: 10px;
        overflow: hidden; flex-shrink: 0;
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
    }

    .np-side-img img { width: 100%; height: 100%; object-fit: cover; }

    .np-side-img-ph {
        width: 100%; height: 100%;
        display: flex; align-items: center; justify-content: center;
        color: rgba(255,255,255,0.6); font-size: 1.5rem;
    }

    .np-side-body { flex: 1; min-width: 0; }

    .np-side-date {
        font-size: 0.7rem; font-weight: 700; color: var(--brand-primary);
        letter-spacing: 0.07em; text-transform: uppercase; margin-bottom: 4px;
    }

    .np-side-title {
        font-size: 0.9rem; font-weight: 700; color: var(--text-dark);
        line-height: 1.35; margin: 0;
        display: -webkit-box; -webkit-line-clamp: 2;
        -webkit-box-orient: vertical; overflow: hidden;
        transition: color 0.3s;
    }

    .np-side-card:hover .np-side-title { color: var(--brand-primary); }

    /* ===== LATEST GRID ===== */
    .np-latest-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 1.5rem;
    }

    .np-latest-card {
        background: var(--white); border-radius: 16px;
        overflow: hidden; box-shadow: var(--shadow-sm);
        text-decoration: none; display: flex; flex-direction: column;
        transition: var(--transition);
        border: 2px solid transparent;
    }

    .np-latest-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
        border-color: var(--brand-primary);
    }

    .np-latest-img { height: 200px; overflow: hidden; background: linear-gradient(135deg, var(--brand-primary), #ff8f57); }
    .np-latest-img img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.4s; }
    .np-latest-card:hover .np-latest-img img { transform: scale(1.05); }

    .np-latest-img-ph {
        width: 100%; height: 100%;
        display: flex; align-items: center; justify-content: center;
        color: rgba(255,255,255,0.5); font-size: 3rem;
    }

    .np-latest-body { padding: 1.25rem; flex: 1; display: flex; flex-direction: column; }

    .np-latest-date {
        font-size: 0.72rem; font-weight: 700; color: var(--brand-primary);
        letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 0.5rem;
    }

    .np-latest-title {
        font-size: 1.05rem; font-weight: 700; color: var(--text-dark);
        line-height: 1.4; margin-bottom: 0.6rem;
        display: -webkit-box; -webkit-line-clamp: 2;
        -webkit-box-orient: vertical; overflow: hidden; transition: color 0.3s;
    }

    .np-latest-card:hover .np-latest-title { color: var(--brand-primary); }

    .np-latest-excerpt {
        font-size: 0.875rem; color: var(--text-light);
        line-height: 1.6; flex: 1; margin-bottom: 1rem;
        display: -webkit-box; -webkit-line-clamp: 3;
        -webkit-box-orient: vertical; overflow: hidden;
    }

    /* ===== WHY READ ===== */
    .np-why-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 30px;
    }

    .np-why-card {
        text-align: center; padding: 30px;
        border-radius: 12px; background: var(--white);
        box-shadow: var(--shadow-sm); transition: var(--transition);
    }

    .np-why-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-md); }

    .np-why-icon {
        width: 64px; height: 64px;
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
        border-radius: 14px;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 18px; font-size: 1.8rem;
    }

    .np-why-title { font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: var(--text-dark); }
    .np-why-text { color: var(--text-light); font-size: 0.95rem; line-height: 1.6; }

    /* ===== NEWSLETTER CTA ===== */
    .np-cta-banner {
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
        padding: 60px;
        border-radius: 16px;
        text-align: center;
        color: var(--white);
        margin: 60px 0;
    }

    .np-cta-title { font-size: 2rem; font-weight: 800; margin-bottom: 12px; }
    .np-cta-text  { font-size: 1.1rem; margin-bottom: 30px; opacity: 0.95; }

    .np-cta-form {
        display: flex; gap: 12px;
        max-width: 480px; margin: 0 auto;
        justify-content: center;
    }

    .np-cta-input {
        flex: 1; padding: 14px 20px;
        border: 2px solid rgba(255,255,255,0.4);
        border-radius: 25px;
        background: rgba(255,255,255,0.15);
        color: var(--white); font-size: 1rem; outline: none;
        backdrop-filter: blur(10px); transition: var(--transition);
    }

    .np-cta-input::placeholder { color: rgba(255,255,255,0.7); }
    .np-cta-input:focus { border-color: var(--white); background: rgba(255,255,255,0.25); }

    .np-cta-btn {
        padding: 14px 28px;
        background: var(--white); color: var(--brand-primary);
        border: none; border-radius: 25px;
        font-weight: 700; cursor: pointer;
        transition: var(--transition);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        white-space: nowrap;
    }

    .np-cta-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 16px rgba(0,0,0,0.2); }

    /* ===== EMPTY STATE ===== */
    .np-empty {
        text-align: center; padding: 5rem 1rem; color: var(--text-light);
    }

    .np-empty-icon { font-size: 4rem; margin-bottom: 1rem; opacity: 0.4; }
    .np-empty p   { font-size: 1.1rem; }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
        .np-featured-wrap { grid-template-columns: 1fr; }
    }

    @media (max-width: 768px) {
        .np-hero { padding: 60px 0 80px; }
        .np-hero-title { font-size: 2rem; }
        .np-hero-stats { grid-template-columns: repeat(3, 1fr); gap: 12px; }
        .np-hero-search { flex-direction: column; }
        .np-featured-img { height: 220px; }
        .np-section { padding: 40px 0; }
        .np-cta-banner { padding: 40px 20px; }
        .np-cta-form { flex-direction: column; }
        .np-why-grid { grid-template-columns: repeat(2,1fr); }
    }

    @media (max-width: 480px) {
        .np-hero-stats { grid-template-columns: 1fr; max-width: 200px; margin: 0 auto; }
        .np-why-grid { grid-template-columns: 1fr; }
    }
</style>

<div class="np-page" style="background:#f8f9fa; min-height:100vh;">

    {{-- ===== HERO ===== --}}
    <section class="np-hero">
        <div class="np-container">
            <div class="np-hero-content">
                <span class="np-hero-tag">&#128240; News &amp; Insights</span>
                <h1 class="np-hero-title">Berita dan Informasi Terkini</h1>
                <p class="np-hero-sub">Ikuti perkembangan terbaru, update teknologi, dan wawasan industri langsung dari tim kami.</p>

                <form class="np-hero-search" method="GET" action="{{ route('frontendnews') }}" role="search">
                    <input type="search" name="q" placeholder="Cari berita..." aria-label="Cari berita" value="{{ request('q') }}">
                    <button type="submit" class="np-hero-search-btn">Cari</button>
                </form>

                <div class="np-hero-stats">
                    <div class="np-hero-stat">
                        <span class="np-hero-stat-num">{{ $allNews->count() }}</span>
                        <div class="np-hero-stat-label">Total Artikel</div>
                    </div>
                    <div class="np-hero-stat">
                        <span class="np-hero-stat-num">{{ $allNews->pluck('author.name')->unique()->count() }}</span>
                        <div class="np-hero-stat-label">Penulis</div>
                    </div>
                    <div class="np-hero-stat">
                        <span class="np-hero-stat-num">{{ $allNews->where('created_at', '>=', now()->startOfMonth())->count() }}</span>
                        <div class="np-hero-stat-label">Bulan Ini</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($featured)

        {{-- ===== FEATURED + SIDE CARDS ===== --}}
        <section class="np-section np-container">
            <div class="np-sec-head">
                <div>
                    <div class="np-sec-label">Artikel Pilihan</div>
                    <h2 class="np-sec-title">Berita Utama</h2>
                </div>
            </div>

            <div class="np-featured-wrap">

                {{-- Big card --}}
                <a href="{{ route('frontendnews.show', $featured->id) }}" class="np-featured-main">
                    <div class="np-featured-img">
                        @if($featured->image)
                            <img src="{{ asset('storage/' . $featured->image) }}" alt="{{ $featured->title }}" loading="lazy">
                        @else
                            <div class="np-featured-img-ph">&#128240;</div>
                        @endif
                        <span class="np-feat-badge">Berita Utama</span>
                    </div>
                    <div class="np-featured-body">
                        <div class="np-featured-date">{{ $featured->created_at->translatedFormat('d F Y') }}</div>
                        <h3 class="np-featured-title">{{ $featured->title }}</h3>
                        <p class="np-featured-excerpt">{{ Str::limit($featured->content, 200) }}</p>
                        <div class="np-featured-foot">
                            <div class="np-author-row">
                                <div class="np-avatar">{{ strtoupper(substr($featured->author?->name ?? 'A', 0, 1)) }}</div>
                                <span class="np-author-name">{{ $featured->author?->name ?? 'Admin' }}</span>
                            </div>
                            <span class="np-read-link">Baca selengkapnya &rarr;</span>
                        </div>
                    </div>
                </a>

                {{-- Side cards --}}
                <div class="np-featured-sides">
                    @foreach($sideNews as $item)
                        <a href="{{ route('frontendnews.show', $item->id) }}" class="np-side-card">
                            <div class="np-side-img">
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" loading="lazy">
                                @else
                                    <div class="np-side-img-ph">&#128240;</div>
                                @endif
                            </div>
                            <div class="np-side-body">
                                <div class="np-side-date">{{ $item->created_at->translatedFormat('d F Y') }}</div>
                                <h3 class="np-side-title">{{ $item->title }}</h3>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </section>

        {{-- ===== LATEST ARTICLES ===== --}}
        @if($latestNews->count() > 0)
            <section class="np-section np-container" style="padding-top:0;">
                <div class="np-sec-head">
                    <div>
                        <div class="np-sec-label">Terbaru</div>
                        <h2 class="np-sec-title">Artikel Lainnya</h2>
                    </div>
                </div>

                <div class="np-latest-grid">
                    @foreach($latestNews as $item)
                        <a href="{{ route('frontendnews.show', $item->id) }}" class="np-latest-card">
                            <div class="np-latest-img">
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" loading="lazy">
                                @else
                                    <div class="np-latest-img-ph">&#128240;</div>
                                @endif
                            </div>
                            <div class="np-latest-body">
                                <div class="np-latest-date">{{ $item->created_at->translatedFormat('d F Y') }}</div>
                                <h3 class="np-latest-title">{{ $item->title }}</h3>
                                <p class="np-latest-excerpt">{{ Str::limit($item->content, 130) }}</p>
                                <div class="np-author-row">
                                    <div class="np-avatar">{{ strtoupper(substr($item->author?->name ?? 'A', 0, 1)) }}</div>
                                    <span class="np-author-name">{{ $item->author?->name ?? 'Admin' }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif

    @else
        {{-- ===== EMPTY STATE ===== --}}
        <section class="np-section np-container">
            <div class="np-empty">
                <div class="np-empty-icon">&#128240;</div>
                <p>Belum ada berita yang tersedia.</p>
                @if(request('q'))
                    <p>Tidak ada hasil untuk "<strong>{{ request('q') }}</strong>".</p>
                    <a href="{{ route('frontendnews') }}" style="color:var(--brand-primary);font-weight:600;">
                        Lihat semua berita
                    </a>
                @endif
            </div>
        </section>
    @endif

    {{-- ===== WHY READ OUR NEWS ===== --}}
    <section class="np-section-alt">
        <div class="np-container">
            <div class="np-sec-label" style="text-align:center;">Mengapa Kami</div>
            <h2 class="np-sec-title-center">Why Read Our News?</h2>
            <p class="np-sec-sub-center">Kami hadir dengan konten berkualitas, terpercaya, dan selalu relevan untuk kebutuhan Anda.</p>

            <div class="np-why-grid">
                <div class="np-why-card">
                    <div class="np-why-icon">&#128269;</div>
                    <h3 class="np-why-title">Trusted Information</h3>
                    <p class="np-why-text">Setiap berita dikurasi dan diverifikasi oleh tim editorial berpengalaman sebelum dipublikasikan.</p>
                </div>
                <div class="np-why-card">
                    <div class="np-why-icon">&#128187;</div>
                    <h3 class="np-why-title">Technology Insights</h3>
                    <p class="np-why-text">Dapatkan wawasan mendalam tentang tren teknologi terbaru yang memengaruhi industri global.</p>
                </div>
                <div class="np-why-card">
                    <div class="np-why-icon">&#128161;</div>
                    <h3 class="np-why-title">Innovation Stories</h3>
                    <p class="np-why-text">Kisah nyata inovasi dari perusahaan dan startup yang mengubah cara dunia bekerja.</p>
                </div>
                <div class="np-why-card">
                    <div class="np-why-icon">&#128200;</div>
                    <h3 class="np-why-title">Industry Trends</h3>
                    <p class="np-why-text">Analisis tren industri yang membantu Anda mengambil keputusan bisnis lebih cerdas dan tepat.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== NEWSLETTER CTA ===== --}}
    <div class="np-container">
        <div class="np-cta-banner">
            <h2 class="np-cta-title">&#128231; Jangan Lewatkan Berita Terbaru!</h2>
            <p class="np-cta-text">Daftarkan email Anda dan kami akan mengirimkan berita pilihan langsung ke kotak masuk Anda.</p>
            <form class="np-cta-form" onsubmit="handleNewsletter(event)">
                <input type="email" class="np-cta-input" placeholder="masukkan email Anda..." required>
                <button type="submit" class="np-cta-btn">Berlangganan</button>
            </form>
        </div>
    </div>

</div>

<script>
function handleNewsletter(e) {
    e.preventDefault();
    const btn = e.target.querySelector('.np-cta-btn');
    btn.textContent = '✓ Terima kasih!';
    btn.style.background = '#28a745';
    btn.style.color = '#fff';
    setTimeout(() => {
        btn.textContent = 'Berlangganan';
        btn.style.background = '';
        btn.style.color = '';
        e.target.reset();
    }, 3000);
}
</script>

@endsection
