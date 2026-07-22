@extends('layouts.frontend')

@section('title', 'Career - Join Our Team')

@section('content')
<style>
    :root {
        --brand-primary: #ff6b35;
        --brand-accent: #ffc107;
        --background: #f8f9fa;
        --text-dark: #1a1a1a;
        --text-light: #6c757d;
        --border-light: #e9ecef;
        --white: #ffffff;
        --success: #28a745;
        --info: #17a2b8;
        --warning: #ffc107;
        --danger: #dc3545;
        --light: #f8f9fa;
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
        --shadow-md: 0 8px 16px rgba(0, 0, 0, 0.12);
        --shadow-lg: 0 16px 32px rgba(0, 0, 0, 0.15);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--background);
        color: var(--text-dark);
        line-height: 1.6;
    }

    /* ============= HERO SECTION ============= */
    .hero-section {
        background: linear-gradient(135deg, var(--brand-primary) 0%, #ff8f57 50%, var(--brand-accent) 100%);
        padding: 80px 0 60px;
        position: relative;
        overflow: hidden;
        margin-top: 80px;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    .hero-section::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -5%;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
        animation: float 8s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(20px);
        }
    }

    .hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: var(--white);
    }

    .hero-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        color: var(--white);
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 20px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        animation: slideDown 0.8s ease-out;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 15px;
        animation: slideDown 0.8s ease-out 0.1s both;
    }

    .hero-subtitle {
        font-size: 1.3rem;
        opacity: 0.95;
        margin-bottom: 40px;
        animation: slideDown 0.8s ease-out 0.2s both;
    }

    /* Glassmorphism Stats */
    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 20px;
        margin-top: 50px;
        animation: slideDown 0.8s ease-out 0.3s both;
    }

    .stat-card {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.25);
        padding: 25px;
        border-radius: 16px;
        text-align: center;
        color: var(--white);
        transition: var(--transition);
    }

    .stat-card:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-5px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 800;
        display: block;
    }

    .stat-label {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-top: 8px;
    }

    /* ============= SEARCH & FILTER BAR ============= */
    .search-filter-wrapper {
        position: relative;
        margin-top: -50px;
        margin-bottom: 60px;
        z-index: 10;
    }

    .search-filter-container {
        background: var(--white);
        border-radius: 20px;
        padding: 25px;
        box-shadow: var(--shadow-lg);
        max-width: 1000px;
        margin: 0 auto;
    }

    .search-filter-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr auto;
        gap: 15px;
        align-items: end;
    }

    .form-group-custom {
        display: flex;
        flex-direction: column;
    }

    .form-label-custom {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .input-pill {
        background: var(--light);
        border: 2px solid var(--border-light);
        border-radius: 25px;
        padding: 12px 20px;
        font-size: 0.95rem;
        transition: var(--transition);
        outline: none;
    }

    .input-pill:focus {
        border-color: var(--brand-primary);
        background: var(--white);
        box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
    }

    .select-pill {
        background: var(--light);
        border: 2px solid var(--border-light);
        border-radius: 25px;
        padding: 12px 20px;
        font-size: 0.95rem;
        transition: var(--transition);
        cursor: pointer;
    }

    .select-pill:focus {
        border-color: var(--brand-primary);
        outline: none;
        box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
    }

    .btn-search {
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
        color: var(--white);
        border: none;
        border-radius: 25px;
        padding: 12px 30px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: 0 4px 12px rgba(255, 107, 53, 0.3);
    }

    .btn-search:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(255, 107, 53, 0.4);
    }

    /* ============= JOB CARDS ============= */
    .jobs-section {
        padding: 60px 0;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 50px;
        text-align: center;
        color: var(--text-dark);
    }

    .jobs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }

    .job-card {
        background: var(--white);
        border-radius: 12px;
        padding: 30px;
        border-left: 4px solid var(--border-light);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .job-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(180deg, var(--brand-primary), var(--brand-accent));
        transform: scaleY(0);
        transform-origin: top;
        transition: var(--transition);
    }

    .job-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
        border-left-color: transparent;
    }

    .job-card:hover::before {
        transform: scaleY(1);
    }

    .job-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        margin-bottom: 15px;
    }

    .job-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 8px;
    }

    .job-company {
        font-size: 0.9rem;
        color: var(--text-light);
        font-weight: 500;
    }

    .job-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 15px;
    }

    .badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .badge-fulltime {
        background: rgba(40, 167, 69, 0.15);
        color: var(--success);
    }

    .badge-parttime {
        background: rgba(23, 162, 184, 0.15);
        color: var(--info);
    }

    .badge-remote {
        background: rgba(255, 107, 53, 0.15);
        color: var(--brand-primary);
    }

    .badge-contract {
        background: rgba(255, 193, 7, 0.15);
        color: #ff9800;
    }

    .badge-internship {
        background: rgba(156, 39, 176, 0.15);
        color: #9c27f0;
    }

    .job-meta {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        padding: 15px 0;
        border-top: 1px solid var(--border-light);
        border-bottom: 1px solid var(--border-light);
        margin-bottom: 15px;
        font-size: 0.9rem;
    }

    .meta-item {
        color: var(--text-light);
    }

    .meta-label {
        font-weight: 600;
        color: var(--text-dark);
        display: block;
        font-size: 0.75rem;
        text-transform: uppercase;
        margin-bottom: 3px;
    }

    .job-description {
        color: var(--text-light);
        font-size: 0.95rem;
        margin-bottom: 20px;
        line-height: 1.5;
        height: 50px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .btn-apply {
        width: 100%;
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
        color: var(--white);
        border: none;
        padding: 12px;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: 0 4px 12px rgba(255, 107, 53, 0.2);
    }

    .btn-apply:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(255, 107, 53, 0.3);
    }

    /* ============= WHY JOIN US ============= */
    .why-join-section {
        background: linear-gradient(180deg, var(--white) 0%, var(--background) 100%);
        padding: 80px 0;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .feature-card {
        text-align: center;
        padding: 30px;
        border-radius: 12px;
        background: var(--white);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-md);
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 1.8rem;
    }

    .feature-title {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--text-dark);
    }

    .feature-text {
        color: var(--text-light);
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* ============= CTA BANNER ============= */
    .cta-banner {
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
        padding: 60px;
        border-radius: 16px;
        text-align: center;
        color: var(--white);
        margin: 60px 0;
    }

    .cta-title {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .cta-text {
        font-size: 1.1rem;
        margin-bottom: 30px;
        opacity: 0.95;
    }

    .btn-cta {
        background: var(--white);
        color: var(--brand-primary);
        border: none;
        padding: 14px 35px;
        border-radius: 25px;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .btn-cta:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    /* ============= PAGINATION ============= */
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
        margin-top: 50px;
    }

    .pagination-btn {
        width: 40px;
        height: 40px;
        border: 2px solid var(--border-light);
        background: var(--white);
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: var(--transition);
    }

    .pagination-btn:hover {
        border-color: var(--brand-primary);
        color: var(--brand-primary);
    }

    .pagination-btn.active {
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
        color: var(--white);
        border-color: var(--brand-primary);
    }

    .pagination-dots {
        color: var(--text-light);
        margin: 0 8px;
    }

    /* ============= MODAL ============= */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .modal-overlay.active {
        display: flex;
        animation: fadeIn 0.3s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .modal {
        background: var(--white);
        border-radius: 16px;
        padding: 40px;
        max-width: 500px;
        width: 90%;
        box-shadow: var(--shadow-lg);
        animation: slideUp 0.4s ease-out;
        position: relative;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .modal-header {
        margin-bottom: 30px;
    }

    .modal-title {
        font-size: 1.8rem;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 5px;
    }

    .modal-subtitle {
        color: var(--text-light);
        font-size: 0.9rem;
    }

    .modal-close {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 32px;
        height: 32px;
        border: none;
        background: var(--light);
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        transition: var(--transition);
    }

    .modal-close:hover {
        background: var(--border-light);
        transform: rotate(90deg);
    }

    .form-group-modal {
        margin-bottom: 20px;
    }

    .form-label-modal {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: var(--text-dark);
        font-size: 0.9rem;
    }

    .form-input-modal {
        width: 100%;
        background: var(--light);
        border: 2px solid var(--border-light);
        border-radius: 20px;
        padding: 12px 18px;
        font-size: 0.95rem;
        transition: var(--transition);
        font-family: inherit;
    }

    .form-input-modal:focus {
        outline: none;
        border-color: var(--brand-primary);
        background: var(--white);
        box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
    }

    textarea.form-input-modal {
        resize: vertical;
        min-height: 120px;
    }

    .btn-submit-modal {
        width: 100%;
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
        color: var(--white);
        border: none;
        padding: 14px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: var(--transition);
        margin-top: 10px;
    }

    .btn-submit-modal:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(255, 107, 53, 0.3);
    }

    /* ============= TOAST NOTIFICATION ============= */
    .toast {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: linear-gradient(135deg, var(--brand-primary), #ff8f57);
        color: var(--white);
        padding: 16px 24px;
        border-radius: 12px;
        box-shadow: var(--shadow-lg);
        z-index: 2000;
        display: none;
        animation: slideUpToast 0.4s ease-out;
        max-width: 300px;
    }

    .toast.show {
        display: block;
    }

    @keyframes slideUpToast {
        from {
            opacity: 0;
            transform: translateY(100px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideOutToast {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(100px);
        }
    }

    .toast.hide {
        animation: slideOutToast 0.4s ease-out forwards;
    }

    /* ============= RESPONSIVE ============= */
    @media (max-width: 1024px) {
        .search-filter-grid {
            grid-template-columns: 1fr 1fr;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .jobs-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        }

        .features-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 60px 0 40px;
        }

        .hero-title {
            font-size: 2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }

        .stats-container {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .search-filter-wrapper {
            margin-top: -40px;
            margin-bottom: 40px;
        }

        .search-filter-container {
            padding: 20px;
        }

        .search-filter-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .jobs-grid {
            grid-template-columns: 1fr;
        }

        .job-meta {
            grid-template-columns: 1fr;
        }

        .features-grid {
            grid-template-columns: 1fr;
        }

        .cta-banner {
            padding: 40px 20px;
            margin: 40px 0;
        }

        .cta-title {
            font-size: 1.5rem;
        }

        .cta-text {
            font-size: 1rem;
        }

        .modal {
            padding: 30px 20px;
        }

        .section-title {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 480px) {
        .stats-container {
            grid-template-columns: 1fr;
        }

        .hero-title {
            font-size: 1.5rem;
        }

        .hero-badge {
            font-size: 0.75rem;
            padding: 6px 12px;
        }

        .section-title {
            font-size: 1.4rem;
        }

        .toast {
            left: 20px;
            right: 20px;
            bottom: 20px;
        }
    }
</style>

<div class="hero-section">
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">✨ We're Hiring</div>
            <h1 class="hero-title">Grow Your Career With Us</h1>
            <p class="hero-subtitle">Join our innovative team and be part of something amazing</p>

            <div class="stats-container">
                <div class="stat-card">
                    <span class="stat-number">{{ $careers->count() }}</span>
                    <span class="stat-label">Open Roles</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">{{ $careers->pluck('department')->filter()->unique()->count() }}</span>
                    <span class="stat-label">Departments</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">{{ $careers->pluck('type')->filter()->unique()->count() }}</span>
                    <span class="stat-label">Job Types</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">{{ $careers->pluck('location')->filter()->unique()->count() }}</span>
                    <span class="stat-label">Locations</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Search & Filter Bar -->
<div class="search-filter-wrapper">
    <div class="container">
        <div class="search-filter-container">
            <div class="search-filter-grid">
                <div class="form-group-custom">
                    <label class="form-label-custom">Search Position</label>
                    <input type="text" class="input-pill" id="searchInput" placeholder="e.g. Product Manager, Designer...">
                </div>
                <div class="form-group-custom">
                    <label class="form-label-custom">Department</label>
                    <select class="select-pill" id="departmentFilter">
                        <option value="">All Departments</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Design">Design</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Sales">Sales</option>
                        <option value="HR">HR</option>
                    </select>
                </div>
                <div class="form-group-custom">
                    <label class="form-label-custom">Job Type</label>
                    <select class="select-pill" id="jobTypeFilter">
                        <option value="">All Types</option>
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part-Time</option>
                        <option value="Remote">Remote</option>
                        <option value="Contract">Contract</option>
                    </select>
                </div>
                <button class="btn-search" onclick="filterJobs()">Search</button>
            </div>
        </div>
    </div>
</div>

<!-- Jobs Section -->
<div class="container">
    <section class="jobs-section">
        <h2 class="section-title">Featured Opportunities</h2>

        <div class="jobs-grid" id="jobsGrid">
            <!-- Jobs will be populated by JavaScript -->
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
            <button class="pagination-btn active" onclick="goToPage(1)">1</button>
            <button class="pagination-btn" onclick="goToPage(2)">2</button>
            <button class="pagination-btn" onclick="goToPage(3)">3</button>
            <span class="pagination-dots">...</span>
            <button class="pagination-btn" onclick="goToPage(10)">10</button>
        </div>
    </section>

    <!-- Why Join Us Section -->
    <section class="why-join-section">
        <h2 class="section-title">Why Join Us</h2>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3 class="feature-title">Fast Growth</h3>
                <p class="feature-text">Accelerate your career with opportunities to learn and advance quickly in a dynamic environment.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌍</div>
                <h3 class="feature-title">Remote Friendly</h3>
                <p class="feature-text">Work from anywhere. We support flexible work arrangements to balance work and life.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💡</div>
                <h3 class="feature-title">Innovative Culture</h3>
                <p class="feature-text">Be part of cutting-edge projects and collaborate with brilliant minds from around the world.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎁</div>
                <h3 class="feature-title">Great Benefits</h3>
                <p class="feature-text">Competitive salary, health insurance, professional development, and more perks.</p>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="cta-banner">
        <h3 class="cta-title">Didn't Find Your Match?</h3>
        <p class="cta-text">Send us your details and we'll keep you updated with new opportunities</p>
        <button class="btn-cta" onclick="openModal()">Get in Touch</button>
    </div>
</div>

<!-- Apply Modal -->
<div id="applyModal" style="display:none; position:fixed; inset:0; z-index:9999;
     background:rgba(0,0,0,.55); backdrop-filter:blur(4px);
     align-items:center; justify-content:center; padding:20px;">
    <div style="background:#fff; border-radius:20px; max-width:440px; width:100%;
                padding:32px 28px; position:relative; text-align:center;
                box-shadow:0 24px 60px rgba(0,0,0,.25); animation:popInCareer .25s ease;">

        <!-- Tombol Close -->
        <button onclick="closeModal()"
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

        <!-- Judul -->
        <h2 style="font-size:1.25rem; font-weight:800; color:#1a1a1a; margin-bottom:8px;">
            Kirim Lamaranmu!
        </h2>
        <p id="applyJobTitle" style="color:#ff6b35; font-weight:600; font-size:.88rem;
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

        <!-- Tutup -->
        <button onclick="closeModal()"
                style="width:100%; background:#ff6b35; color:#fff; border:none;
                       padding:12px; border-radius:999px; font-weight:700;
                       font-size:.9rem; cursor:pointer; transition:background .2s;"
                onmouseover="this.style.background='#e55a2a'" onmouseout="this.style.background='#ff6b35'">
            Tutup
        </button>
    </div>
</div>

<style>
@keyframes popInCareer {
    from { transform: scale(.9); opacity: 0; }
    to   { transform: scale(1);  opacity: 1; }
}
</style>

<!-- Toast Notification -->
<div class="toast" id="toast"></div>

<script>
@php
    $careersJson = $careers->map(function($c) {
        return [
            'id'          => $c->id,
            'title'       => $c->title,
            'department'  => $c->department ?? '-',
            'type'        => $c->type ?? '-',
            'location'    => $c->location ?? '-',
            'salary'      => $c->salary ?? '-',
            'description' => $c->description ?? '',
        ];
    });
@endphp
    // Data dari database
    const jobsData = @json($careersJson);

    let currentPage = 1;
    const itemsPerPage = 6;
    let filteredJobs = [...jobsData];

    // Get Badge Class
    function getBadgeClass(jobType) {
        const badgeMap = {
            'Full-Time': 'badge-fulltime',
            'Part-Time': 'badge-parttime',
            'Remote': 'badge-remote',
            'Contract': 'badge-contract',
            'Internship': 'badge-internship'
        };
        return badgeMap[jobType] || 'badge-fulltime';
    }

    // Render Jobs
    function renderJobs() {
        const jobsGrid = document.getElementById('jobsGrid');
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const paginatedJobs = filteredJobs.slice(startIndex, endIndex);

        if (paginatedJobs.length === 0) {
            jobsGrid.innerHTML = `<div style="grid-column:1/-1;text-align:center;padding:60px 20px;color:var(--text-light)">
                <div style="font-size:3rem;margin-bottom:16px">📋</div>
                <h3 style="margin-bottom:8px">Belum Ada Lowongan</h3>
                <p>Silakan cek kembali nanti.</p>
            </div>`;
            return;
        }

        jobsGrid.innerHTML = paginatedJobs.map(job => `
            <div class="job-card">
                <div class="job-header">
                    <div>
                        <h3 class="job-title">${job.title}</h3>
                        <p class="job-company">${job.department}</p>
                    </div>
                </div>

                <div class="job-badges">
                    <span class="badge ${getBadgeClass(job.type)}">${job.type}</span>
                </div>

                <div class="job-meta">
                    <div class="meta-item">
                        <span class="meta-label">📍 Location</span>
                        ${job.location}
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">💰 Salary</span>
                        ${job.salary}
                    </div>
                </div>

                <p class="job-description">${job.description || 'Lihat detail posisi ini.'}</p>

                <button class="btn-apply" onclick="openApplyModal('${job.title}')">Apply Now</button>
            </div>
        `).join('');
    }

    // Filter Jobs
    function filterJobs() {
        const searchText = document.getElementById('searchInput').value.toLowerCase();
        const department = document.getElementById('departmentFilter').value;
        const jobType = document.getElementById('jobTypeFilter').value;

        filteredJobs = jobsData.filter(job => {
            const matchesSearch = job.title.toLowerCase().includes(searchText) ||
                                  (job.department && job.department.toLowerCase().includes(searchText));
            const matchesDept = !department || (job.department && job.department.toLowerCase().includes(department.toLowerCase()));
            const matchesType = !jobType || (job.type && job.type.toLowerCase().includes(jobType.toLowerCase()));

            return matchesSearch && matchesDept && matchesType;
        });

        currentPage = 1;
        renderJobs();
    }

    // Go to Page
    function goToPage(page) {
        currentPage = page;
        renderJobs();

        // Update pagination buttons
        document.querySelectorAll('.pagination-btn').forEach(btn => {
            btn.classList.remove('active');
        });
        event.target.classList.add('active');

        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Modal Functions
    function openModal() {
        const m = document.getElementById('applyModal');
        m.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        document.getElementById('applyModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    function openApplyModal(jobTitle) {
        document.getElementById('applyJobTitle').textContent = jobTitle ? 'Posisi: ' + jobTitle : '';
        // Update mailto subject dengan nama posisi
        const mailLink = document.querySelector('#applyModal a[href^="mailto"]');
        if (mailLink) {
            mailLink.href = 'mailto:hrd@gmail.com?subject=Lamaran Kerja - ' + encodeURIComponent(jobTitle || '');
        }
        openModal();
    }

    // Form Submission
    function submitApplication(e) {
        e.preventDefault();

        const fullName = document.getElementById('fullName').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;

        // Simulate form submission
        closeModal();

        // Show success toast
        showToast('✓ Application submitted successfully! We\'ll be in touch soon.');

        // Reset form
        document.getElementById('applicationForm').reset();
    }

    // Toast Notification
    function showToast(message) {
        const toast = document.getElementById('toast');
        toast.textContent = message;
        toast.classList.add('show');

        setTimeout(() => {
            toast.classList.add('hide');
            setTimeout(() => {
                toast.classList.remove('show', 'hide');
            }, 400);
        }, 3000);
    }

    // Close modal on overlay click
    document.getElementById('applyModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });

    // Render initial jobs
    renderJobs();
</script>
@endsection
