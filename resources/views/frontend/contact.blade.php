@extends('layouts.frontend')

@section('title', 'Contact Us')

@section('content')
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
