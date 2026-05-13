@extends('layouts.frontend')

@section('title', 'Contact Us')

@section('content')
<style>
:root {
  --brand-primary: #ff6b35;
  --brand-primary-soft: rgba(255,107,53,.12);
  --brand-bg: #f8fafc;
  --brand-surface: #ffffff;
  --brand-muted: #61708a;
  --brand-dark: #111827;
  --brand-border: #e7eaef;
  --brand-shadow: 0 24px 60px rgba(15,23,42,.08);
}
html {
  scroll-behavior: smooth;
}
body {
  background: var(--brand-bg);
  color: var(--brand-dark);
  font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
}
section {
  padding: 4rem 0;
}
.contact-hero {
  padding: 6rem 0 4rem;
  background: linear-gradient(180deg, rgba(255,255,255,1), rgba(248,248,250,1));
}
.contact-hero .container {
  max-width: 880px;
  text-align: center;
}
.contact-hero .hero-label {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: var(--brand-primary);
  font-weight: 700;
  letter-spacing: .32em;
  text-transform: uppercase;
  font-size: .78rem;
  margin-bottom: 1rem;
}
.contact-hero h1 {
  font-size: clamp(2.6rem, 4vw, 4.5rem);
  line-height: 1.02;
  font-weight: 800;
  letter-spacing: -.04em;
  margin-bottom: 1rem;
}
.contact-hero h1 span {
  color: var(--brand-primary);
  text-transform: lowercase;
}
.contact-hero p {
  max-width: 770px;
  margin: 0 auto;
  color: var(--brand-muted);
  font-size: 1.05rem;
  line-height: 1.85;
}
.info-section {
  padding-top: 1.5rem;
  padding-bottom: 2.5rem;
}
.info-card {
  background: var(--brand-surface);
  border-radius: 1.75rem;
  border: 1px solid rgba(255,107,53,.12);
  box-shadow: 0 18px 45px rgba(15,23,42,.06);
  padding: 1.8rem 1.7rem;
  min-height: 100%;
  transition: transform .28s ease, box-shadow .28s ease;
}
.info-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 24px 55px rgba(15,23,42,.1);
}
.info-icon {
  width: 3.5rem;
  height: 3.5rem;
  display: grid;
  place-items: center;
  border-radius: 1rem;
  background: var(--brand-primary-soft);
  color: var(--brand-primary);
  font-size: 1.35rem;
  margin-bottom: 1.2rem;
}
.info-card h5 {
  font-size: 1rem;
  font-weight: 700;
  letter-spacing: .08em;
  text-transform: uppercase;
  margin-bottom: .9rem;
  color: var(--brand-dark);
}
.info-card p {
  margin: 0;
  color: var(--brand-muted);
  font-size: .95rem;
  line-height: 1.8;
  word-break: break-word;
}
.info-card p br {
  display: block;
  content: "";
  margin-bottom: .35rem;
}
.main-contact-section {
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
}
.contact-form-card,
.office-card {
  background: var(--brand-surface);
  border-radius: 2rem;
  border: 1px solid rgba(15,23,42,.06);
  box-shadow: var(--brand-shadow);
  padding: 2rem;
}
.contact-form-card h2,
.office-card h4,
.social-section h2,
.faq-section h2,
.cta-section h2 {
  color: var(--brand-dark);
}
.contact-form-card h2 {
  font-size: 2.2rem;
  margin-bottom: .85rem;
  letter-spacing: -.03em;
}
.contact-form-card p {
  color: var(--brand-muted);
  margin-bottom: 1.65rem;
  max-width: 620px;
}
.contact-form-card form {
  display: grid;
  gap: 1.25rem;
}
.contact-form-card .col-md-6,
.contact-form-card .col-12 {
  width: 100%;
}
.contact-form-card .form-label {
  font-size: .95rem;
  font-weight: 600;
  color: #334155;
  margin-bottom: .5rem;
}
.contact-form-card .form-control,
.contact-form-card .form-select,
.contact-form-card textarea {
  border-radius: 1.25rem;
  border: 1px solid #e2e8f0;
  background: #fbfbfd;
  padding: 1rem 1.2rem;
  box-shadow: none;
  transition: border-color .25s ease, box-shadow .25s ease;
}
.contact-form-card .form-control:focus,
.contact-form-card .form-select:focus,
.contact-form-card textarea:focus {
  border-color: rgba(255,107,53,.9);
  box-shadow: 0 0 0 0.18rem rgba(255,107,53,.12);
  outline: none;
}
.contact-form-card textarea {
  min-height: 170px;
  resize: vertical;
}
.btn-send {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  padding: 1rem 1.2rem;
  border-radius: 999px;
  background: var(--brand-primary);
  border: 1px solid transparent;
  color: #fff;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: .04em;
  transition: transform .25s ease, background .25s ease, box-shadow .25s ease;
}
.btn-send:hover {
  background: #e25530;
  transform: translateY(-1px);
  box-shadow: 0 14px 30px rgba(255,107,53,.24);
}
.office-card h4 {
  font-size: 1.25rem;
  font-weight: 700;
  margin-bottom: 1rem;
  text-transform: uppercase;
  letter-spacing: .06em;
}
.office-card p {
  margin-bottom: 1rem;
  color: var(--brand-muted);
  line-height: 1.85;
}
.office-card p:last-of-type {
  margin-bottom: 0;
  font-size: .95rem;
}
.office-card p i {
  color: var(--brand-primary);
}
.map-wrapper {
  margin-top: 1.75rem;
  overflow: hidden;
  border-radius: 2rem;
  box-shadow: 0 25px 60px rgba(15,23,42,.08);
  background: #fff;
}
.map-wrapper iframe {
  width: 100%;
  min-height: 340px;
  border: 0;
}
.social-section {
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
}
.social-section h2 {
  font-size: 2rem;
  text-align: center;
  margin-bottom: .5rem;
}
.social-section .sub {
  display: block;
  text-align: center;
  color: var(--brand-muted);
  margin-bottom: 2rem;
}
.social-btn {
  display: grid;
  place-items: center;
  gap: .9rem;
  padding: 1.3rem 1rem;
  border-radius: 1.5rem;
  background: #fff;
  color: var(--brand-dark);
  text-decoration: none;
  border: 1px solid rgba(15,23,42,.06);
  box-shadow: 0 18px 40px rgba(15,23,42,.05);
  transition: transform .25s ease, border-color .25s ease;
}
.social-btn:hover {
  transform: translateY(-3px);
  border-color: rgba(255,107,53,.2);
}
.social-icon-wrap {
  width: 3.4rem;
  height: 3.4rem;
  display: grid;
  place-items: center;
  border-radius: 1rem;
  background: rgba(255,107,53,.12);
  color: var(--brand-primary);
  font-size: 1.3rem;
}
.social-btn span {
  text-transform: uppercase;
  font-size: .82rem;
  letter-spacing: .12em;
  color: #334155;
}
.faq-section {
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
}
.faq-section h2 {
  font-size: 2rem;
  text-align: center;
  margin-bottom: .5rem;
}
.faq-section .sub {
  display: block;
  text-align: center;
  color: var(--brand-muted);
  margin-bottom: 2rem;
}
.accurdion,
.accordion {
  display: grid;
  gap: 1rem;
}
.accrodion-item,
.accordion-item {
  border: none;
  border-radius: 1.5rem;
  overflow: hidden;
  background: transparent;
}
.accrodion-button,
.accordion-button {
  width: 100%;
  text-align: left;
  padding: 1.1rem 1.25rem;
  border-radius: 1.5rem;
  border: 1px solid #e5e7eb;
  background: #fff;
  color: var(--brand-dark);
  font-weight: 700;
  letter-spacing: .01em;
  box-shadow: 0 18px 40px rgba(15,23,42,.05);
  transition: border-color .25s ease, background .25s ease, transform .25s ease;
}
.accrodion-button:hover,
.accordion-button:hover {
  background: #f8fafc;
}
.accrodion-button[aria-expanded="true"],
.accordion-button[aria-expanded="true"] {
  border-color: rgba(255,107,53,.45);
}
.accrodion-collapse,
.accordion-collapse {
  margin-top: .75rem;
}
.accordion-body {
  background: #fbfbfd;
  border: 1px solid #e5e7eb;
  border-radius: 0 0 1.5rem 1.5rem;
  padding: 1.15rem 1.25rem;
  color: #495057;
  line-height: 1.75;
  box-shadow: 0 16px 30px rgba(15,23,42,.04);
}
.cta-section {
  padding: 4rem 0;
  margin-top: 1rem;
  border-radius: 2rem;
  background: linear-gradient(135deg, #ff6b35 0%, #ff8f5a 100%);
  color: #fff;
  text-align: center;
}
.cta-section h2 {
  font-size: clamp(2rem, 3vw, 2.9rem);
  margin-bottom: .8rem;
}
.cta-section p {
  color: rgba(255,255,255,.9);
  margin-bottom: 1.65rem;
  font-size: 1rem;
}
.btn-cta-white {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: .65rem;
  padding: 1rem 1.8rem;
  border-radius: 999px;
  background: #fff;
  color: var(--brand-primary);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: .04em;
  box-shadow: 0 18px 40px rgba(255,107,53,.22);
  text-decoration: none;
}
.btn-cta-white:hover {
  transform: translateY(-1px);
  box-shadow: 0 22px 45px rgba(255,107,53,.28);
}
footer {
  background: #fff;
  color: #6b7280;
  border-top: 1px solid #eff2f7;
}
footer p {
  margin: 0;
  font-size: .95rem;
}
@media (max-width: 991px) {
  .contact-hero {
    padding-top: 5rem;
  }
  .contact-form-card,
  .office-card {
    padding: 1.6rem;
  }
  .map-wrapper {
    margin-top: 1.3rem;
  }
}
@media (max-width: 767px) {
  .contact-hero {
    padding-top: 4.5rem;
    padding-bottom: 3rem;
  }
  .info-card {
    padding: 1.5rem;
  }
  .contact-form-card h2 {
    font-size: 1.85rem;
  }
  .contact-form-card form {
    gap: 1rem;
  }
  .social-btn {
    padding: 1.1rem 1rem;
  }
  .cta-section {
    padding: 3rem 1rem;
  }
  .cta-section h2 {
    font-size: 2rem;
  }
}
</style>

  <!-- Hero section -->
   <section class="contact-hero">
        <div class="container">
            <p class="hero-label">get in touch </p>
            <h1> Mari kita bahas berita terkini <span> modern news </span> </h1>
            <p> Kami selalu terbuka untuk kolaborasi media </p>
        </div>
   </section>
 <!-- contact info card -->
   <section class="info-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                        <h5>our office</h5>
                        <p>Jalan Arteri Soekarno Hatta No.190 <br> Semarang Timur 50196 <tr> Indonesia </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-icon"><i class="bi bi-envelopx-fill"></i></div>
                        <h5>email us</h5>
                        <p> dwikyprasetya529@gmial.com <br> dwikyprasetya734@gmail.com <tr> petonggembrut@gmail.com </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
                        <h5>call us</h5>
                        <p> 089648020280 <br> 089519761900 <tr> senin-jumat , 08.00-18.00 </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="info-card">
                        <div class="info-icon"><i class="bi bi-share-fill"></i></div>
                        <h5>follow us</h5>
                        <p>@relaynow <br> relaynow <tr> stay connacted </p>
                    </div>
                </div>
            </div>
        </div>
   </section>

   <!-- form map -->
    <section class="main-contact-section">
        <div class="container">
            <div class="row g-5 align-items-start">
                <!-- formulir -->
                 <div class="col-lg-7">
                    <div class="contact-form-card">
                        <h2>send us a messege</h2>
                        <p>Isi formulir di bawah ini dan tim kami akan menghubungi Anda dalam waktu 24 jam.</p>
                        <form id="contactForm" novalidate>
                            <div class="col-md-6">
                                <label class="form-label" for="fullName">Full name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Nama" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="emailAddress">Email address</label>
                                <input type="email" class="form-control" id="emailAddress" placeholder="dwikyprasetya734@gmail.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for  ="subject">subject</label>
                                <select class="form-select" id = "subject">
                                    <option value="" disable selected >choose a subject</option>
                                    <option>media colaboration</option>
                                    <option>story pitch</option>
                                    <option>advertising and sponsorship</option>
                                    <option>general inquiry</option>
                                    <option>press release</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for ="massage">massage</label>
                                <textarea class="form-control" id="massage" placeholder="write your massage here"required></textarea>
                            </div>  
                            <div class="col-12 mt-1">
                                <button type="submit" class="btn-send" id="sendBtn">
                                    <i class="bi bi-send-fill me-2"></i>send massage 
                                </button>
                            </div>
                        </form>
                    </div>
                 </div>   
                 <!-- Office info + Map -->
                  <div class="col-lg-5">
                    <div class="office-card">
                        <h4>modern news</h4>
                        <p><i class="bi bi-geo-alt-fill me-2" style="color:far(--brand-primary)"</i> jalan sudirman no.123 jakarta pusat</p>
                        <p><i class="bi bi-clock-fill me-2" style="color:far(--brand-primary)"</i> monday-friday,09:00-18:00 wib</p>
                        <p class="mt-2" style="color:var(--brand-muted);fond-size:.9rem;">
                            Setelah Anda mengenal lebih dalam tentang relay, kini tiba saatnya untuk mengambil langkah nyata. Sebagai distributor Omron di Surabaya, PT MiSEL menyediakan berbagai macam produk Omron, termasuk Relay Omron. Segera hubungi kami untuk mempelajari lebih lanjut tentang solusi otomatisasi dengan produk Omron.
                        </p>
                    </div>
                    <div class="map-wrapper">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.016716429317!2d110.46010954087758!3d-6.993526475147118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708da81c2a3777%3A0x5cc0c1632885d41c!2sRoti%20Bakar%20%26%20Nasi%20Bakar%20190!5e0!3m2!1sid!2sid!4v1778228018945!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
            </div>
        </div>
    </section>
    <!-- Social Media --> 
     <section class="social-section">
        <div class="container">
            <h2> find us on social media </h2>
            <p class="sub">follow modern news for real time updates and behind-the-scenes</p>
            <div class="row justify-content-center g-4">
                <div class="col-6 col-sm-3 col-md-2">
                    <a href="#" class="social-btn"> 
                        <div class="social-icon-wrap"><i class="bi bi-instagram"></i></div>
                        <span>instagram</span>
                    </a>
                </div>
                <div class="col-6 col-sm-3 col-md-2">
                    <a href="#" class="social-btn"> 
                        <div class="social-icon-wrap"><i class="bi bi-youtube"></i></div>
                        <span>youtube</span>
                    </a>
                </div>
                <div class="col-6 col-sm-3 col-md-2">
                    <a href="#" class="social-btn"> 
                        <div class="social-icon-wrap"><i class="bi bi-twitter-x"></i></div>
                        <span>twitter-x</span>
                    </a>
                </div>
                <div class="col-6 col-sm-3 col-md-2">
                    <a href="#" class="social-btn"> 
                        <div class="social-icon-wrap"><i class="bi bi-linkedin"></i></div>
                        <span>linkedin</span>
                    </a>
                </div>
            </div>
        </div>
     </section>
     <!-- faq --> 
      <section class="faq-section">
        <div class="container">
            <h2>frequently asked question </h2>
            <p class="sub"> gotquestion ? we've got answer </p>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accurdion" id="faqAccordion">
                        <div class="accrodion-item">
                            <h2 class="accordion-header" id="faq1-heading">
                                <button class="accrodion-button"type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                    <i class="bi bi-check-dots-fill me-2" style="color:var(--brand-primary)"</i>
                                    how fatst do you usual replay?
                                </button>
                            </h2>
                            <div id="faq1" class="accrodion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    we aim to respon to all inquiries with in <strong> 24 bisnis hours </strong> for urgent matters,feel free to call our office directly
                                </div>
                            </div>
                            <div class="accrodion-item">
                            <h2 class="accordion-header" id="faq2-heading">
                                <button class="accrodion-button"type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                    <i class="bi bi-handshake-fill me-2" style="color:var(--brand-primary)"</i>
                                    can we colaborated on content project?
                                </button>
                            </h2>
                            <div id="faq2" class="accrodion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    absolutly! we welcome content colaboration
                                </div>
                            </div>
                            <div class="accrodion-item">
                            <h2 class="accordion-header" id="faq3-heading">
                                <button class="accrodion-button"type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="true" aria-controls="faq3">
                                    <i class="bi bi-newspaper me-2" style="color:var(--brand-primary)"</i>
                                    do you accept media partnership?
                                </button>
                            </h2>
                            <div id="faq3" class="accrodion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    yes,we actifly seek strategitch media partnership
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <!-- CTA --> 
     <section class = "cta-section">
        <div class="container">
            <h2> have a story or colaboration idea? </h2>
            <p> lets create impact full </p>
            <a href="#contactForm" class="btn-cta-white">
                <i class="bi bi-rocket-takeoff-fill me-2" > </i> start colabboration
            </a>
        </div>
     </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const sendBtn = document.getElementById('sendBtn');

            form.addEventListener{'submit', function(e) {
                e.preventDefault ();
                const name = document.getElementById('fullName').value.trim;
                const email = document.getElementById('emailAddress').value.trim;
                const message = document.getElementById('message').value.trim; 

                if(!name|| !email || !messsage){
                    btn.textContent='please fill all required fileds';
                    btn.style.background='#e53e3e';
                    setTimeout(()=> {
                        btn.innerHTML='<i class="bi bi-send-fill me-2"></i>send message';
                        btn.style.backgorund=';

                    },2500);
                    return;
                }
                btn.innerHTML='<span class="spinner-border spinner-border-sm me-2"></span> sending...';   
                btn.disable= true;

                setTimeout(()=> {
                        btn.innerHTML='<i class="bi bi-check-sircle-fill me-2"></i>message sent!';
                        btn.style.backgorund='#16a34a';
                        form.reset();
                setTimeout(()=> {
                        btn.innerHTML='<i class="bi bi-send-fill me-2"></i>send message';
                        btn.style.backgorund=';
                 setTimeout(()=> {
                        btn.innerHTML='<i class="bi bi-send-fill me-2"></i>send message';
                        btn.style.backgorund=';
                        btn.disable=false;
                    },3000);
                 },1500);
            };
            docucument.queriselctor('a[href="contactForm"]').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('contactForm').scrollIntoView({behavior:'smooth'});
                document.getElementById('fullName').focus();
                 });
                
            });
        </script>
@endsection
