@extends('layouts.frontend')

@section('title', 'Contact Us - Modern News')

@section('content')
<style>
:root {
    --brand-primary: #ff6b35;
    --brand-primary-hover: #e55a2a;
    --brand-primary-soft: rgba(255, 107, 53, 0.1);
    --brand-bg: #f8fafc;
    --brand-surface: #ffffff;
    --brand-muted: #64748b;
    --brand-dark: #0f172a;
    --brand-border: #e2e8f0;
    --brand-shadow: 0 20px 40px rgba(15, 23, 42, 0.06);
}

body {
    background-color: var(--brand-bg);
    color: var(--brand-dark);
}

/* Hero Section */
.contact-hero {
    padding: 5rem 0 3rem;
    background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
    text-align: center;
}

.contact-hero .hero-label {
    display: inline-block;
    background: rgba(255, 107, 53, 0.1);
    color: var(--brand-primary);
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
    font-size: .8rem;
    padding: .35rem 1rem;
    border-radius: 999px;
    margin-bottom: 1rem;
}

.contact-hero h1 {
    font-size: clamp(2.2rem, 4vw, 3.5rem);
    font-weight: 800;
    letter-spacing: -.03em;
    color: var(--brand-dark);
    margin-bottom: 1rem;
}

.contact-hero h1 span {
    color: var(--brand-primary);
}

.contact-hero p {
    max-width: 650px;
    margin: 0 auto;
    color: var(--brand-muted);
    font-size: 1.05rem;
    line-height: 1.7;
}

/* Info Cards */
.info-card {
    background: var(--brand-surface);
    border-radius: 1.25rem;
    border: 1px solid var(--brand-border);
    box-shadow: 0 4px 15px rgba(15, 23, 42, 0.03);
    padding: 1.75rem;
    height: 100%;
    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
}

.info-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--brand-shadow);
    border-color: rgba(255, 107, 53, 0.3);
}

.info-icon {
    width: 3.5rem;
    height: 3.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 1rem;
    background: var(--brand-primary-soft);
    color: var(--brand-primary);
    font-size: 1.65rem;
    margin-bottom: 1.2rem;
}

.info-card h5 {
    font-size: 1.05rem;
    font-weight: 700;
    margin-bottom: .6rem;
    color: var(--brand-dark);
}

.info-card p {
    margin: 0;
    color: var(--brand-muted);
    font-size: .9rem;
    line-height: 1.6;
}

/* Form & Office Section */
.contact-form-card,
.office-card {
    background: var(--brand-surface);
    border-radius: 1.5rem;
    border: 1px solid var(--brand-border);
    box-shadow: var(--brand-shadow);
    padding: 2.25rem;
}

.contact-form-card h2 {
    font-size: 1.8rem;
    font-weight: 800;
    margin-bottom: .5rem;
    letter-spacing: -.02em;
}

.contact-form-card p {
    color: var(--brand-muted);
    margin-bottom: 1.75rem;
    font-size: .95rem;
}

.form-label {
    font-size: .88rem;
    font-weight: 600;
    color: #334155;
    margin-bottom: .4rem;
}

.form-control,
.form-select {
    border-radius: .85rem;
    border: 1px solid #cbd5e1;
    background: #f8fafc;
    padding: .75rem 1rem;
    font-size: .95rem;
    transition: border-color .2s, box-shadow .2s, background .2s;
}

.form-control:focus,
.form-select:focus {
    background: #ffffff;
    border-color: var(--brand-primary);
    box-shadow: 0 0 0 .2rem rgba(255, 107, 53, 0.15);
}

textarea.form-control {
    min-height: 140px;
    resize: vertical;
}

.btn-send {
    width: 100%;
    padding: .85rem 1.5rem;
    border-radius: 999px;
    background: var(--brand-primary);
    border: none;
    color: #ffffff;
    font-weight: 700;
    font-size: .95rem;
    transition: background .2s, transform .2s, box-shadow .2s;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: .5rem;
}

.btn-send:hover {
    background: var(--brand-primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(255, 107, 53, 0.3);
}

.office-card h4 {
    font-size: 1.3rem;
    font-weight: 800;
    margin-bottom: 1.25rem;
}

.office-detail {
    display: flex;
    align-items: flex-start;
    gap: .85rem;
    margin-bottom: 1.25rem;
    color: var(--brand-muted);
    font-size: .92rem;
    line-height: 1.6;
}

.office-detail i {
    color: var(--brand-primary);
    font-size: 1.2rem;
    margin-top: .15rem;
    flex-shrink: 0;
}

.map-wrapper {
    margin-top: 1.5rem;
    overflow: hidden;
    border-radius: 1.25rem;
    border: 1px solid var(--brand-border);
    box-shadow: 0 10px 25px rgba(15, 23, 42, 0.05);
}

.map-wrapper iframe {
    width: 100%;
    height: 280px;
    border: 0;
}

/* Social Media Section */
.social-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: .75rem;
    padding: 1.5rem 1rem;
    border-radius: 1.25rem;
    background: #ffffff;
    color: var(--brand-dark);
    text-decoration: none;
    border: 1px solid var(--brand-border);
    box-shadow: 0 4px 15px rgba(15, 23, 42, 0.03);
    transition: transform .25s ease, border-color .25s ease, box-shadow .25s ease;
}

.social-btn:hover {
    transform: translateY(-4px);
    border-color: rgba(255, 107, 53, 0.4);
    box-shadow: 0 12px 25px rgba(255, 107, 53, 0.12);
    color: var(--brand-primary);
}

.social-icon-wrap {
    width: 3.25rem;
    height: 3.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 1rem;
    background: rgba(255, 107, 53, 0.1);
    color: var(--brand-primary);
    font-size: 1.5rem;
}

.social-btn span {
    font-size: .85rem;
    font-weight: 700;
    letter-spacing: .05em;
}

/* FAQ Section */
.faq-accordion .accordion-item {
    border: 1px solid var(--brand-border);
    border-radius: 1.25rem !important;
    overflow: hidden;
    margin-bottom: 1rem;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.02);
}

.faq-accordion .accordion-button {
    font-weight: 700;
    font-size: 1rem;
    color: var(--brand-dark);
    padding: 1.15rem 1.35rem;
    background: #ffffff;
    box-shadow: none;
}

.faq-accordion .accordion-button:not(.collapsed) {
    color: var(--brand-primary);
    background: rgba(255, 107, 53, 0.04);
}

.faq-accordion .accordion-button::after {
    background-size: 1rem;
}

.faq-accordion .accordion-body {
    color: var(--brand-muted);
    font-size: .95rem;
    line-height: 1.7;
    padding: 1.25rem 1.35rem;
    background: #ffffff;
    border-top: 1px solid var(--brand-border);
}

/* CTA Section */
.cta-banner-contact {
    background: linear-gradient(135deg, #ff6b35 0%, #ff8f57 100%);
    border-radius: 1.5rem;
    padding: 3.5rem 2rem;
    color: #ffffff;
    text-align: center;
    box-shadow: 0 15px 35px rgba(255, 107, 53, 0.25);
}

.cta-banner-contact h2 {
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: .75rem;
    color: #ffffff;
}

.cta-banner-contact p {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.05rem;
    max-width: 580px;
    margin: 0 auto 1.75rem;
}

.btn-cta-white {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    padding: .85rem 2rem;
    border-radius: 999px;
    background: #ffffff;
    color: var(--brand-primary);
    font-weight: 700;
    font-size: .95rem;
    text-decoration: none;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transition: transform .2s, box-shadow .2s;
}

.btn-cta-white:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    color: var(--brand-primary-hover);
}
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="container">
        <span class="hero-label">Hubungi Kami</span>
        <h1>Mari Berdiskusi Dengan <span>Modern News</span></h1>
        <p>Kami selalu terbuka untuk saran, pertanyaan, liputan media, maupun peluang kerja sama strategis.</p>
    </div>
</section>

<!-- Info Cards Section -->
<section class="py-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="info-card">
                    <div class="info-icon">📍</div>
                    <h5>Alamat Kantor</h5>
                    <p>Jl. Arteri Soekarno Hatta No.190<br>Semarang Timur, Jawa Tengah 50196<br>Indonesia</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="info-card">
                    <div class="info-icon">✉️</div>
                    <h5>Email Redaksi</h5>
                    <p>redaksi@modernnews.id<br>info@modernnews.id<br>support@modernnews.id</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="info-card">
                    <div class="info-icon">📞</div>
                    <h5>Telepon & WA</h5>
                    <p>+62 896-4802-0280<br>+62 895-1976-1900<br>Senin - Jumat, 08.00 - 17.00 WIB</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="info-card">
                    <div class="info-icon">🌐</div>
                    <h5>Media Sosial</h5>
                    <p>@modernnews.id<br>Modern News Official<br>Tetap terhubung bersama kami</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Contact Section (Form + Office Info & Map) -->
<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-start">

            <!-- Form Contact -->
            <div class="col-lg-7">
                <div class="contact-form-card" id="contactFormCard">
                    <h2>Kirim Pesan Anda</h2>
                    <p>Isi formulir di bawah ini dan tim kami akan merespons pesan Anda sesegera mungkin.</p>

                    <div id="contactAlert" class="alert alert-success d-none mb-4 rounded-3">
                        Pesan Anda telah berhasil dikirim! Tim kami akan segera menghubungi Anda.
                    </div>

                    <form id="contactForm" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="fullName">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama Anda" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="emailAddress">Alamat Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="emailAddress" placeholder="nama@email.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="subject">Subjek Pesan <span class="text-danger">*</span></label>
                                <select class="form-select" id="subject" required>
                                    <option value="" disabled selected>Pilih subjek pesan</option>
                                    <option value="Kolaborasi Media">Kolaborasi Media & Kemitraan</option>
                                    <option value="Liputan / Press Release">Pengiriman Press Release</option>
                                    <option value="Iklan & Sponsor">Iklan & Sponsorship</option>
                                    <option value="Pertanyaan Umum">Pertanyaan Umum</option>
                                    <option value="Kritik & Saran">Kritik & Saran</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="message">Pesan <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn-send" id="sendBtn">
                                    Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Office Info + Map -->
            <div class="col-lg-5">
                <div class="office-card">
                    <h4>Kantor Pusat Modern News</h4>

                    <div class="office-detail">
                        <div style="font-size:1.2rem; flex-shrink:0;">📍</div>
                        <div>
                            <strong>Alamat:</strong><br>
                            Jl. Arteri Soekarno Hatta No.190, Semarang Timur, Kota Semarang, Jawa Tengah 50196
                        </div>
                    </div>

                    <div class="office-detail">
                        <div style="font-size:1.2rem; flex-shrink:0;">⏰</div>
                        <div>
                            <strong>Jam Operasional:</strong><br>
                            Senin - Jumat: 08.00 - 17.00 WIB
                        </div>
                    </div>

                    <div class="office-detail">
                        <div style="font-size:1.2rem; flex-shrink:0;">💬</div>
                        <div>
                            <strong>Layanan Pelanggan:</strong><br>
                            Fast response melalui WhatsApp dan Email pada jam kerja.
                        </div>
                    </div>
                </div>

                <div class="map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.016716429317!2d110.46010954087758!3d-6.993526475147118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708da81c2a3777%3A0x5cc0c1632885d41c!2sRoti%20Bakar%20%26%20Nasi%20Bakar%20190!5e0!3m2!1sid!2sid!4v1778228018945!5m2!1sid!2sid"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="py-5" style="background: #ffffff;">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold fs-3">Ikuti Media Sosial Kami</h2>
            <p class="text-muted">Dapatkan pembaruan berita terkini secara real-time di platform favorit Anda.</p>
        </div>
        <div class="row justify-content-center g-3">
            <div class="col-6 col-sm-3 col-md-2">
                <a href="#" class="social-btn">
                    <div class="social-icon-wrap">📸</div>
                    <span>Instagram</span>
                </a>
            </div>
            <div class="col-6 col-sm-3 col-md-2">
                <a href="#" class="social-btn">
                    <div class="social-icon-wrap">▶️</div>
                    <span>YouTube</span>
                </a>
            </div>
            <div class="col-6 col-sm-3 col-md-2">
                <a href="#" class="social-btn">
                    <div class="social-icon-wrap">🐦</div>
                    <span>X (Twitter)</span>
                </a>
            </div>
            <div class="col-6 col-sm-3 col-md-2">
                <a href="#" class="social-btn">
                    <div class="social-icon-wrap">💼</div>
                    <span>LinkedIn</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold fs-3">Pertanyaan Yang Sering Diajukan (FAQ)</h2>
            <p class="text-muted">Punya pertanyaan seputar layanan dan kerja sama kami?</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion faq-accordion" id="faqAccordion">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1-heading">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                Berapa lama tim respons membalas pesan?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faq1-heading" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tim kami berkomitmen untuk merespons seluruh pesan dan pertanyaan dalam waktu maksimal <strong>1x24 jam kerja</strong>. Untuk urusan mendesak, Anda dapat menghubungi kami via telepon.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                Apakah Modern News menerima kerja sama konten & liputan?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tentu saja! Kami sangat terbuka untuk kolaborasi pembuatan konten, media partner acara, liputan khusus, hingga sponsorship produk.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Bagaimana cara mengirimkan Press Release ke redaksi?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Anda dapat mengisikan formulir kontak di atas dengan subjek <strong>"Pengiriman Press Release"</strong> atau langsung mengirimkan email dokumen pendukung ke <code>redaksi@modernnews.id</code>.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-4">
    <div class="container">
        <div class="cta-banner-contact">
            <h2>Punya Ide Berita Atau Gagasan Kolaborasi?</h2>
            <p>Mari ciptakan liputan dan konten media berdampak positif bersama Modern News.</p>
            <a href="#contactFormCard" class="btn-cta-white">
                Mulai Kolaborasi
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const sendBtn = document.getElementById('sendBtn');
    const alertBox = document.getElementById('contactAlert');

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('fullName').value.trim();
            const email = document.getElementById('emailAddress').value.trim();
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !subject || !message) {
                sendBtn.innerHTML = 'Harap isi semua kolom wajib!';
                sendBtn.style.background = '#dc2626';

                setTimeout(() => {
                    sendBtn.innerHTML = 'Kirim Pesan';
                    sendBtn.style.background = '';
                }, 2500);
                return;
            }

            // Tampilkan loading
            sendBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengirim...';
            sendBtn.disabled = true;

            setTimeout(() => {
                sendBtn.innerHTML = 'Pesan Terkirim!';
                sendBtn.style.background = '#16a34a';

                if (alertBox) {
                    alertBox.classList.remove('d-none');
                }

                form.reset();

                setTimeout(() => {
                    sendBtn.innerHTML = 'Kirim Pesan';
                    sendBtn.style.background = '';
                    sendBtn.disabled = false;
                }, 3000);
            }, 1200);
        });
    }
});
</script>
@endsection
