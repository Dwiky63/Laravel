@extends('layouts.frontend')

@section('title', 'About Us')

@section('content')
<style>
    :root {
        --brand-primary: #ff6b35;
        --brand-dark: #1f2937;
        --brand-light: #f8f9fa;
        --brand-muted: #6b7280;
    }

    body {
        background: #ffffff;
        color: var(--brand-dark);
    }

    /* Hero Section */
    .about-hero {
        background: linear-gradient(135deg, rgba(255, 107, 53, 0.05), rgba(29, 115, 185, 0.05));
        padding: 5rem 0;
        text-align: center;
    }

    .about-hero .hero-label {
        font-size: 0.875rem;
        font-weight: 700;
        letter-spacing: 0.15em;
        color: var(--brand-primary);
        text-transform: uppercase;
        margin-bottom: 1rem;
    }

    .about-hero h1 {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .about-hero h1 span {
        color: var(--brand-primary);
    }

    .about-hero p {
        font-size: 1.125rem;
        color: var(--brand-muted);
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Statistics Section */
    .stats-section {
        background: var(--brand-light);
        padding: 4rem 0;
    }

    .stat-card {
        background: #fff;
        padding: 2rem;
        border-radius: 1.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
        text-align: center;
    }

    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--brand-primary);
        margin-bottom: 0.5rem;
    }

    .stat-label {
        font-size: 1rem;
        color: var(--brand-muted);
        font-weight: 500;
    }

    /* Our Story Section */
    .story-section {
        padding: 5rem 0;
    }

    .story-section h2 {
        font-size: clamp(1.75rem, 4vw, 2.5rem);
        font-weight: 800;
        margin-bottom: 2rem;
        letter-spacing: -0.02em;
    }

    .story-section p {
        font-size: 1.05rem;
        color: var(--brand-muted);
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }

    .story-image {
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 12px 48px rgba(0, 0, 0, 0.12);
    }

    .story-image img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Vision & Mission Section */
    .vision-mission-section {
        background: var(--brand-light);
        padding: 5rem 0;
    }

    .vision-mission-card {
        background: #fff;
        padding: 2.5rem;
        border-radius: 1.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        text-align: center;
        transition: all 0.3s ease;
    }

    .vision-mission-card:hover {
        transform: translateY(-4px);
    }

    .vm-icon {
        font-size: 3rem;
        color: var(--brand-primary);
        margin-bottom: 1rem;
    }

    .vision-mission-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: var(--brand-dark);
    }

    .vision-mission-card p {
        color: var(--brand-muted);
        line-height: 1.7;
        font-size: 1rem;
    }

    /* Team Section */
    .team-section {
        padding: 5rem 0;
    }

    .team-section h2 {
        font-size: clamp(1.75rem, 4vw, 2.5rem);
        font-weight: 800;
        text-align: center;
        margin-bottom: 1rem;
        letter-spacing: -0.02em;
    }

    .team-subtitle {
        text-align: center;
        color: var(--brand-muted);
        margin-bottom: 3rem;
        font-size: 1.05rem;
    }

    .team-card {
        background: #fff;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
        text-align: center;
    }

    .team-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
    }

    .team-image {
        width: 100%;
        height: 300px;
        background: var(--brand-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: #ccc;
    }

    .team-info {
        padding: 2rem;
    }

    .team-name {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--brand-dark);
        margin-bottom: 0.5rem;
    }

    .team-position {
        color: var(--brand-primary);
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, var(--brand-primary), #ff8a65);
        padding: 4rem 0;
        color: #fff;
        text-align: center;
        border-radius: 1.5rem;
        margin: 5rem 0;
    }

    .cta-section h2 {
        font-size: clamp(1.75rem, 4vw, 2.5rem);
        font-weight: 800;
        margin-bottom: 1.5rem;
        letter-spacing: -0.02em;
    }

    .cta-btn {
        background: #fff;
        color: var(--brand-primary);
        border: none;
        padding: 0.875rem 2.5rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s ease;
        display: inline-block;
        text-decoration: none;
    }

    .cta-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        color: var(--brand-primary);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .about-hero {
            padding: 3rem 0;
        }

        .about-hero h1 {
            font-size: 2rem;
        }

        .about-hero p {
            font-size: 1rem;
        }

        .stats-section {
            padding: 3rem 0;
        }

        .stat-card {
            padding: 1.5rem;
        }

        .stat-number {
            font-size: 2rem;
        }

        .story-section,
        .vision-mission-section,
        .team-section {
            padding: 3rem 0;
        }

        .cta-section {
            padding: 3rem 1rem;
            margin: 3rem 0;
        }

        .team-image {
            height: 250px;
        }
    }
</style>

<!-- Hero Section -->
<section class="about-hero">
    <div class="container">
        <p class="hero-label">Who We Are</p>
        <h1>About <span>Modern News</span></h1>
        <p>Relay adalah komponen elektronik yang seringkali terlihat sepele tetapi memiliki peran yang sangat penting dalam berbagai sistem elektrik dan elektronik. Relay berfungsi sebagai sakelar elektromagnetik yang dapat mengontrol aliran listrik pada rangkaian. Dalam artikel ini, kita akan membahas lebih lanjut tentang fungsi relay, jenis-jenis relay yang berbeda, prinsip dan cara kerjanya dalam berbagai aspek kehidupan.</p>
    </div>
</section>

<!-- Statistics Section -->
<section class="stats-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Global Bureaus</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-number">100</div>
                    <div class="stat-label">Journalists</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-number">2M</div>
                    <div class="stat-label">Monthly Readers</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-number">2020</div>
                    <div class="stat-label">Founded</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="story-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2>Our Story</h2>
                <p>Yang dimaksud relay adalah sebuah komponen elektronika yang berbentuk sakelar yang dioperasikan dengan listrik, dilengkapi 2 bagian diantaranya elektromagnet (Coil) dan mekanikal (Switch). Dimana komponen tersebut memanfaatkan prinsip elektromagnetik untuk dapat menggerakkan sakelar sehingga dapat menghantarkan arus listrik.</p>
                <p>Menurut Wikipedia, Relai adalah suatu peranti yang menggunakan elektromagnet untuk mengoperasikan seperangkat kontak sakelar. Susunan paling sederhana terdiri dari kumparan kawat penghantar yang dililit pada inti besi.</p>
                <p>Lantas adakah perbedaan antara relay dengan sakelar? Sebenarnya cukup mudah membedakan diantara keduanya. Relay adalah komponen yang dapat dijalankan hanya dengan tenaga listrik sedangkan sakelar adalah komponen listrik yang digunakan untuk memutus dan menghubungkan aliran listrik.</p>
                <a href="{{ route('frontendnews') }}" class="btn cta-btn" style="background: var(--brand-primary); color: #fff; margin-top: 1.5rem;">Read Latest News</a>
            </div>
            <div class="col-lg-6">
                <div class="story-image">
                    <img src="{{ asset('images/Dual-Channel-Relay-Module.jpg') }}" alt="Our Story" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="vision-mission-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="vision-mission-card">
                    <div class="vm-icon">👁️</div>
                    <h3>Our Vision</h3>
                    <p>Menjadi perusahaan manajemen dan komersil yang diakui sebagai spesialis pemompaan dan pengelolaan air terkemuka di Indonesia, serta mampu bertahan sebagai pemasok utama secara global.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vision-mission-card">
                    <div class="vm-icon">🎯</div>
                    <h3>Our Mission</h3>
                    <p> Memberikan jasa terbaik melalui pendekatan operasional yang mengutamakan keselamatan dan tidak pernah mengkompromikan kualitas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section">
    <div class="container">
        <h2>Komponen Listrik</h2>
        <p class="team-subtitle">Meet the talented journalists and professionals behind Modern News</p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <img
                        src="{{ asset('images/image_1.png') }}"
                        class="team-image"
                        alt="Sarah Johnson"> 
                    <div class="team-info">
                        <div class="team-name">Kontaktor</div>
                        <div class="team-position">Chief Editor</div>
                        <p style="color: var(--brand-muted); font-size: 0.95rem;">Kontaktor (magnetic contactor) adalah sakelar elektromagnetik berkapasitas daya tinggi yang digunakan untuk menyambung atau memutuskan arus listrik beban besar, seperti motor, heater, dan sistem pencahayaan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <img
                        src="{{ asset('images/image_2.png') }}"
                        class="team-image"
                        alt="Michael Chen">
                    <div class="team-info">
                        <div class="team-name">RCBO</div>
                        <div class="team-position">Managing Editor</div>
                        <p style="color: var(--brand-muted); font-size: 0.95rem;">RCBO (Residual Current Breaker with Overcurrent) adalah perangkat proteksi listrik canggih yang menggabungkan fungsi MCB (beban lebih & korsleting) dan ELCB/RCCB (arus bocor/kesetrum) dalam satu komponen.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <img
                        src="{{ asset('images/image_3.png') }}"
                        class="team-image"
                        alt="Emma Rodriguez">
                    <div class="team-info">
                        <div class="team-name">RCCB</div>
                        <div class="team-position">Senior Reporter</div>
                        <p style="color: var(--brand-muted); font-size: 0.95rem;">RCCB (Residual Current Circuit Breaker) adalah perangkat keselamatan listrik vital yang memutuskan aliran listrik secara otomatis saat mendeteksi kebocoran arus ke tanah (ground fault).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Want to Collaborate With Us?</h2>
        <p style="font-size: 1.1rem; margin-bottom: 2rem;">We're always looking for talented journalists, partners, and collaborators to join our mission.</p>
        <a href="{{ route('contact') }}" class="cta-btn">Contact Us</a>
    </div>
</section>

<!-- Extra Spacing -->
<div style="height: 2rem;"></div>
@endsection
