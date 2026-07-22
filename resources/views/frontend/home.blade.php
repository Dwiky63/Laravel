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

/* Career Section */
.career-card {
    background: #fff;
    border-radius: 1.25rem;
    border: none;
    box-shadow: 0 2px 12px rgba(0,0,0,.06);
    padding: 1.75rem;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    transition: transform .3s ease, box-shadow .3s ease;
}
.career-card::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #ff6b35, #ffb020);
    border-radius: 1.25rem 1.25rem 0 0;
}
.career-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 32px rgba(255,107,53,.12);
}
.career-job-icon {
    width: 44px; height: 44px;
    border-radius: .85rem;
    background: rgba(255,107,53,.1);
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 1rem;
}
.career-job-icon svg { color: #ff6b35; }
.career-badge {
    display: inline-block;
    padding: .25em .75em;
    font-size: .72rem;
    font-weight: 600;
    border-radius: 999px;
    background: rgba(255,107,53,.1);
    color: #ff6b35;
    text-transform: capitalize;
    letter-spacing: .04em;
    margin-bottom: .85rem;
}
.career-card h5 {
    font-size: 1rem;
    font-weight: 700;
    color: #1f2937;
    line-height: 1.4;
    margin-bottom: .5rem;
}
.career-card .meta {
    display: flex;
    align-items: center;
    gap: .35rem;
    font-size: .8rem;
    color: var(--brand-muted);
    margin-bottom: .3rem;
}
.career-card .meta svg { flex-shrink: 0; color: #ff6b35; }
.career-apply-btn {
    display: inline-flex;
    align-items: center;
    gap: .4rem;
    margin-top: auto;
    padding-top: 1rem;
    font-size: .82rem;
    font-weight: 600;
    color: #ff6b35;
    text-decoration: none;
    transition: gap .2s;
}
.career-apply-btn:hover { gap: .7rem; color: #e55a2a; }
.career-view-all {
    display: inline-block;
    background: #ff6b35;
    color: #fff;
    font-weight: 600;
    padding: .65rem 2rem;
    border-radius: 999px;
    text-decoration: none;
    font-size: .9rem;
    transition: background .2s, box-shadow .2s;
    box-shadow: 0 4px 14px rgba(255,107,53,.3);
}
.career-view-all:hover {
    background: #e55a2a;
    color: #fff;
    box-shadow: 0 6px 20px rgba(255,107,53,.4);
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

<section class="py-5">
    <div class="container">
        <div class="mb-5">
            <span class="badge text-bg-warning rounded-pill mb-3">Trusted news daily</span>
            <h1 class="display-5 fw-bold section-heading">Modern News for Every Story</h1>
            <p class="lead section-subtitle">A polished, flat design news landing page with live-style headlines, career highlights, and company profile details.</p>
        </div>

        <div class="row g-4 align-items-stretch">
            <div class="col-12 col-lg-9">
                <div id="hotNewsCarousel" class="carousel slide rounded-card overflow-hidden card-no-shadow" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach($hotNews as $i => $item)
                            <button type="button" data-bs-target="#hotNewsCarousel" data-bs-slide-to="{{ $i }}"
                                {{ $i === 0 ? 'class="active" aria-current="true"' : '' }}
                                aria-label="Slide {{ $i + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @forelse($hotNews as $i => $item)
                            <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                <a href="{{ route('frontendnews.show', $item->id) }}" class="text-decoration-none">
                                    <div class="position-relative" style="min-height:360px; background-size:cover; background-position:center; background-repeat:no-repeat;
                                        background-image: linear-gradient(180deg,rgba(0,0,0,.25),rgba(0,0,0,.55)),
                                        url('{{ $item->image ? asset('storage/'.$item->image) : 'https://via.placeholder.com/1200x500/ff6b35/ffffff?text=News' }}');">
                                        <div class="position-absolute bottom-0 p-4 text-white" style="z-index:2;">
                                            <span class="badge bg-warning text-dark mb-3">Terbaru</span>
                                            <h3 class="fw-bold">{{ $item->title }}</h3>
                                            <p class="mb-2">{{ Str::limit($item->content, 100) }}</p>
                                            <span class="badge bg-primary">{{ date('d M Y', strtotime($item->created_at)) }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="carousel-item active">
                                <div class="position-relative d-flex align-items-center justify-content-center"
                                    style="min-height:360px; background:#f0f0f0;">
                                    <p class="text-muted">Belum ada berita.</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
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
                            <p class="mb-0 text-muted">Berita terbaru hari ini.</p>
                        </div>
                        <span class="badge text-bg-primary">Live</span>
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse($latestNews as $i => $news)
                            <li class="list-group-item">
                                <a href="{{ route('frontendnews.show', $news->id) }}" class="text-decoration-none text-dark">
                                    <div class="d-flex justify-content-between align-items-start gap-2">
                                        <div style="flex:1;">
                                            <h6 class="mb-1">{{ Str::limit($news->title, 55) }}</h6>
                                            <small class="text-muted">{{ $news->created_at->diffForHumans() }}</small>
                                        </div>
                                        <span class="badge bg-secondary news-badge flex-shrink-0">News</span>
                                    </div>
                                </a>
                            </li>
                        @empty
                            <li class="list-group-item text-muted">Belum ada berita.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- Section Berita Terbaru                                        -->
<!-- ============================================================ -->
<section class="py-4" style="background:#fff;">
    <div class="container">
        <div class="mb-3 pb-2" style="border-bottom: 3px solid #ff6b35;">
            <h2 class="fw-bold mb-0" style="font-size: 1rem; letter-spacing: .12em; color: #1a1a1a;">BERITA TERBARU</h2>
        </div>

        @forelse($beritaUtama as $i => $item)
            <a href="{{ route('frontendnews.show', $item->id) }}" class="text-decoration-none text-dark">
                <div class="row g-0 align-items-start py-3 {{ !$loop->last ? 'border-bottom' : '' }}" style="transition: background .2s;"
                     onmouseover="this.style.background='#fff8f5'" onmouseout="this.style.background='transparent'">

                    {{-- Thumbnail --}}
                    <div class="col-5 col-md-3 pe-3">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}"
                                 alt="{{ $item->title }}"
                                 class="img-fluid rounded-2"
                                 style="width:100%; height:160px; object-fit:cover;">
                        @else
                            <div class="rounded-2 d-flex align-items-center justify-content-center"
                                 style="width:100%; height:160px; background:linear-gradient(135deg,#ff6b35,#ffb64a);">
                                <span style="font-size:2.5rem;">📰</span>
                            </div>
                        @endif
                    </div>

                    {{-- Konten --}}
                    <div class="col-7 col-md-9">
                        <h3 class="fw-bold lh-sm mb-2" style="font-size:1.1rem; color:#1a1a1a;">
                            {{ $item->title }}
                        </h3>
                        <span style="font-size:.82rem; color:#ff6b35; font-weight:600;">
                            Berita
                        </span>
                        @if(!$loop->last)
                            <p class="mt-2 mb-0 text-muted" style="font-size:.82rem;">
                                {{ Str::limit($item->content, 90) }}
                            </p>
                        @else
                            <p class="mt-1 mb-0 text-muted" style="font-size:.78rem;">
                                Rekomendasi untuk Anda
                            </p>
                        @endif
                    </div>

                </div>
            </a>
        @empty
            <p class="text-muted py-3">Belum ada berita.</p>
        @endforelse

        <div class="text-end mt-2">
            <a href="{{ route('frontendnews') }}" class="fw-semibold" style="color:#ff6b35; font-size:.9rem;">
                Lihat Semua Berita &rarr;
            </a>
        </div>
    </div>
</section>


<!-- Career Section -->
<section class="py-5" style="background: var(--brand-bg);">
    <div class="container">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-4">
            <div>
                <span class="badge rounded-pill mb-2"
                      style="background:rgba(255,107,53,.12); color:#ff6b35; font-size:.75rem; letter-spacing:.08em;">
                    Lowongan Terbuka
                </span>
                <h2 class="section-heading mb-1">Career Opportunities</h2>
                <p class="section-subtitle mb-0">Bergabunglah dan tumbuh bersama tim kami.</p>
            </div>
            <a href="{{ route('career') }}" class="career-view-all">Lihat Semua &rarr;</a>
        </div>

        {{-- Cards --}}
        <div class="row g-4">
            @forelse($careers as $job)
                <div class="col-md-6 col-lg-4">
                    <div class="career-card">

                        {{-- Icon --}}
                        <div class="career-job-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff6b35" viewBox="0 0 16 16">
                                <path d="M6 1a1 1 0 0 0-1 1v1H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-1V2a1 1 0 0 0-1-1H6zm2 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-4 4a4 4 0 0 1 8 0H4z"/>
                            </svg>
                        </div>

                        {{-- Badge tipe --}}
                        <span class="career-badge">{{ $job->type }}</span>

                        {{-- Judul --}}
                        <h5>{{ $job->title }}</h5>

                        {{-- Meta --}}
                        @if($job->department)
                            <div class="meta">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#ff6b35" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                                {{ $job->department }}
                            </div>
                        @endif
                        @if($job->salary)
                            <div class="meta">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#ff6b35" viewBox="0 0 16 16">
                                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.051zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                                </svg>
                                {{ $job->salary }}
                            </div>
                        @endif

                        {{-- Link --}}
                        <button onclick="openApplyModalHome('{{ $job->title }}')"
                                class="career-apply-btn" style="background:none; border:none; cursor:pointer; padding:0;">
                            Lamar Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </button>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-4">
                    <p class="text-muted">Belum ada lowongan yang tersedia.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>

<section class="py-5">
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


{{-- Modal Lamar Sekarang --}}
<div id="homeApplyModal" style="display:none; position:fixed; inset:0; z-index:9999;
     background:rgba(0,0,0,.55); backdrop-filter:blur(4px);
     align-items:center; justify-content:center; padding:20px;">
    <div style="background:#fff; border-radius:20px; max-width:440px; width:100%;
                padding:32px 28px; position:relative; text-align:center;
                box-shadow:0 24px 60px rgba(0,0,0,.25); animation: popIn .25s ease;">

        <!-- Close -->
        <button onclick="closeApplyModalHome()"
                style="position:absolute; top:14px; right:14px; background:#f0f0f0;
                       border:none; width:32px; height:32px; border-radius:50%;
                       font-size:1.1rem; cursor:pointer; line-height:1; color:#555;"
                onmouseover="this.style.background='#e0e0e0'" onmouseout="this.style.background='#f0f0f0'">
            &times;
        </button>

        <!-- Icon -->
        <div style="width:64px; height:64px; border-radius:50%;
                    background:linear-gradient(135deg,#ff6b35,#ffb020);
                    display:flex; align-items:center; justify-content:center;
                    margin:0 auto 16px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#fff" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg>
        </div>

        <!-- Judul & Posisi -->
        <h2 style="font-size:1.25rem; font-weight:800; color:#1a1a1a; margin-bottom:8px;">
            Kirim Lamaranmu!
        </h2>
        <p id="homeApplyJobTitle" style="color:#ff6b35; font-weight:600; font-size:.88rem;
                                      margin-bottom:6px; min-height:1.2em;"></p>
        <p style="color:#6b7280; font-size:.82rem; margin-bottom:20px; line-height:1.5;">
            Silahkan kirimkan CV dan surat lamaran kamu ke email HRD kami
        </p>

        <!-- Email Box -->
        <div style="background:#fff8f5; border:2px solid rgba(255,107,53,.2);
                    border-radius:14px; padding:14px 20px; margin-bottom:16px;">
            <div style="font-size:.65rem; font-weight:700; letter-spacing:.1em;
                        color:#ff6b35; text-transform:uppercase; margin-bottom:4px;">Email HRD</div>
            <div style="font-size:1rem; font-weight:700; color:#1a1a1a;">
                hrd@gmail.com
            </div>
        </div>

        <!-- Checklist -->
        <div style="background:#f8f9fa; border-radius:12px; padding:12px 16px;
                    text-align:left; margin-bottom:22px; font-size:.79rem; color:#5b6d8b;">
            <div style="font-weight:700; margin-bottom:6px; color:#1a1a1a;">Sertakan dalam lamaran:</div>
            <ul style="margin:0; padding-left:16px; line-height:1.85;">
                <li>CV / Resume terbaru (PDF)</li>
                <li>Surat lamaran kerja</li>
                <li>Posisi yang dilamar di subject email</li>
                <li>Portofolio (jika ada)</li>
            </ul>
        </div>

        <!-- Tombol Tutup -->
        <button onclick="closeApplyModalHome()"
                style="width:100%; background:#ff6b35; color:#fff; border:none;
                       padding:12px; border-radius:999px; font-weight:700;
                       font-size:.9rem; cursor:pointer; transition:background .2s;"
                onmouseover="this.style.background='#e55a2a'" onmouseout="this.style.background='#ff6b35'">
            Tutup
        </button>
    </div>
</div>

<style>
@keyframes popIn {
    from { transform: scale(.9); opacity: 0; }
    to   { transform: scale(1);  opacity: 1; }
}
</style>

<script>
function openApplyModalHome(jobTitle) {
    document.getElementById('homeApplyJobTitle').textContent = jobTitle ? 'Posisi: ' + jobTitle : '';
    const modal = document.getElementById('homeApplyModal');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}
function closeApplyModalHome() {
    document.getElementById('homeApplyModal').style.display = 'none';
    document.body.style.overflow = '';
}
document.getElementById('homeApplyModal').addEventListener('click', function(e) {
    if (e.target === this) closeApplyModalHome();
});
</script>

@endsection