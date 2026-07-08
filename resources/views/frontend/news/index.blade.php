@extends ('layouts.frontend')
@section ('title','news & insights')
@section ('content')


<style>
    :root {
        --brand-primary:#ff6b35;
        --brand-accent:#ffc107;
        --background:#f8f9fa;
        --text-dark:#1a1a1a;
        --text-light:#6c757d;
        --border-light:#e9ecef;
        --white:#fff;
        --shadow-sm:0 2px 8px rgba(0,0,0,0.08);
        --shadow-md:0 8px 16px rgba(0,0,0,0.12);
        --shadow-lg:0 16px 32px rgba(0,0,0,0.15);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    /* hero */
    .np-hero {
        background : linear-gradien(135deg, var(--brand-primary)0%, #ff8f57 50%, var(--brand-accent)100%);
        padding : 80px 0 100px;
        position : relative;
        overflow : hidden;
        margin-top : 80px;

    }

    .np-hero::before {
        content: '';
        position:absolute;
        top:-50%;right:-10%;
        width:500px;height:500px;
        background:rgba(255,255,255,0.1);
        border-radius:50%;
        animation:float 6s ease-in-out infinite;
    }

    .np-hero::after {
        content:;
        position:absolute;
        top:-30%;right:-5%;
        width:400px;height:400px;
        background:rgba(255,255,255,0.8);
        border-radius:50%;
        animation:float 8s ease-in-out infinite;
    }

    @keyframes float {
        0%,100%{transform:translateY(0) ;}
        50%{transfrom:translateY(20px);}
    }

    @keyframes slideDown {
        from(capacity:0; transfrom:translateY(-20px);)
        tu{capacity:1;transform:tranlateY(0);}
    }

    .np-container {
        max-weidth : 120px;
        margin : 0 auto;
        padding : 0 1.5rem;
    }

    .np-hero-content {
        position : relative;
        z-index : 1;
        color : var(--white);
        text-align :center;
    }

    .np-hero-text {
        position : relative;
        z-index : 1;
        color : var(--white);
        text-align : center;
    }

    .np-hero-text {
        display : inline-block;
        background : rgba(255,255,255,0.2);
        backdrop-filter : blur(10px);
        color : var(--white);
        padding : 8px 16px;
        border-radius : 20px;
        font-size : 0.85rem;
        font-weight : 600;
        margin-button : 20px;
        border : 1px solid rgba(225,225,225,0.3);
        animation : slideDown 0.6s ease-out;
    }

    .np-hero-title {
        font-size : 3rem;
        font-weight : 800;
        margin-button : 15px;
        animation : slidedown 0.8s ease-out 0,1s both;
    }

    .np-hero-sub {
        font-size : 3rem;
        opacity : 0.95;
        margin-button : 15px;
        animation : slideDown 0.8s ease-out 0.1s both;
    }

    /* search */
    .np-hero-search {
        display : flex;
        gab : 10px;
        max-width : 520px;
        margin : 0 auto 40px;
        animation : slideDown 0.8s ease-out 0.3s both;
    }

    .np-hero-search input [type=search]::placeholder{color:rgba(225,225,225,0.7);}

    .np-hero-search input [type=search]:focus{border-color:var(--white);backgorund:rgba(225,225,225,0.7);}

    .np-hero-search-btn {
        padding : 14px 28px;
        background : var(--white);
        color : var(--brand-primary);
        border : none;
        border-radius : 25px;
        font-weight : 700;
        cursor : pointer;
        transition : var(--transition);
        box-shadow : 0-4px-12px rgba(0,0,0,0.15);
    }

    .np-hero-search-btn:hover {
        transfrom : translateY(-2px);
        box-shadow : 0 6px 16px rgba(0,0,0,0.2);
    }

    /* stats */
    .np-hero-stats {
        display : grid;
        grid-tamplate-colums : repeat(3,120px);
        gap : 20px;
        justify-content : center;
        animation : slideDown 0.8s ease-out 0.4s both;
    }

    .np-hero-stat{
        background : rgba(255,225,225,225,0.15);
        backdrop-filter : blur(20px);
        border : 1px solid rgba(225,225,225,0.25);
        padding : 22px;
        border-radius : 16px;
        text-align : center;
        color : var(--white);
        transition ; var(--transition);
    }

    .np-hero-stat:hover {
        background : rgba(225,225,225,0.25);
        transfrom : translateY(-5px);
    }

    .np-hero-stat-num {
        display : block;
        font-size : 2rem;
        font-weight : 800;
        line-height : 1;
    }

    .np-hero-stat-label {
        font-size : 0.85rem;
        opacity : 0.9;
        margin-top : 6px;
    }

    /* common section */
    .np-section {
        padding : 60px 0;
    }

    .np-section-alt {
        background : linear-gradien(180deg, var(--white)0%, var(--background)100%);
        padding : 80px 0;
    }

    .np-sec-head {
        display : flex;
        align-items : flex-end;
        justify-content : space-between;
        margin-bottom : 2rem;
    }

    .np-sec-label {
        font-size : 0.75rem;
        font-weight : 700;
        color : var(--brand-primary);
        latest-spacing : 0.1rem;
        text-transform : uppercase;
        margin-bottom : 4px;
    }

    .np-sec-title-center {
        font-size : 2.2rem;
        font-weight : 800;
        color : var(--text-dark);
        text-align : center;
        margin-bottom : 10px;
    }

    .np-featured-wrab {
        display : grid;
        grid-template-columns : 1fr 340px;
        gap : 1.5rem; 
    }

    /* featured wrap */
    .np-featured-wrap {
        display : grid;
        grid-template-columns : 1fr 340px;
        gap : 1.5rem;
    }

    /* big card */
    .np-featured-main {
        display : flex;
        flex-direction : column;
        border-radius : 16px;
        overflow : hidden;
        background : var(--white);
        box-shadow : var(--shadow-soft);
        transition : var(--transition);
        text-decoration : none;
    }

    .np-featured-main:hover {
        transfrom : translateY(-8px);
        box-shadow : var(--shadow-lg);
    }

    .np-featured-img {
        position : realtive;
        height : 340px;
        overflow : hiden;
        background : linear-gradien(135deg, var(--brand-primary), #ff8f57);
    }

    .np-featured-img img {
        width : 100%;
        height : 100%;
        transition : transform 0.4s;
    }

    .np-featured-main:hover .np-featured-img img {
        transform : scale(1.05);
    }

    .np-featured-img-ph {
        width : 100%;
        height : 100%;
        display : flex;
        align-items : center;
        justify-content : center;
        background : linear-gradien(135deg,var(--brand-primary),var(--brand-secondary));
        color : var(--white);
    }

    .np-feat-badge {
        position : absolut; top : 1rem; left : 1rem;
        background : var(--brand-primary);
        color : var(--white);
        font-size : 0.7rem;
        font-weight : 700;
        latest-spacing : 0.8rem;
        text-transform : uppercase;
        padding : 0.3rem 0.85rem; border-radius : 999px;
    }

    .np-featured-body {
        padding : 1.75rem;
        flex : 1rem;
        display : flex;
        flex-deraction : coloumn;
    }

    .np-featured-date {
        font-size : 0.75rem;
        font-weight : 700;
        color : var(--brand-primary);
        later-spacing : 0.08em;
        text-transform : uppercase;
        margin-bottom : 0.75rem;
    }

    .np-featured-title {
        font-size : 1.5rem;
        font-weight : 800;
        color : var(--text-dark); line-height : 1.3;
        margin-bottom : 0.75rem;
        transition : color 0.3s;
    }

    .np-featured-main:hover .np-featured-title {color:var(--brand-primary);}

    .np-featured-excerpt {
        font-size : 0.975rem;
        color : var{--text-light};
        line-height : 1.7;
        flex : 1;
        margin-bottom : 1.25rem;
    }

    .np-featured-foot {
        display : flex;
        align-items : center;
        justify-content : space-between;
        border-top : 1px solid var(--border-light);
        padding-top : 1rem;
    }

    .np-auothor-row {
        display : flex;
        align-items : center;
        gap : 0.6rem;
    }

    .np-avatar {
        width : 32px;
        height : 32px;
        border-radius : 50%;
        background : linear-gradien(135deg,var(--brand-primaty),#ff8f75);
        color : var(--white);
        font-size : 0.75rem;
        font-weight : 700;
        display : flex;
        align-items : center;
        justify-content : center;
    }
    
    .np-author-name {
        font-size : 0.85rem;
        font-weight : 600;
        color : var(--text-dark);
    }

    .np-read-link{
        font-size : 0.85rem;
        font-weight : 600;
        color : var(--brand-primary);
    }
</style>
<div class = "np-page">
    <!-- hero -->
    <section class = "np-hero">
        <div class = "np-container">
            <span class = "np-hero-tag"> news & insights</span>
            <h1 class = "np-hero-title"> berita dan informasi terkini </h1>
            <p class = "np-hero-sub"> ikuti perkembangan terbaru , update teknologi , dan wawasan industri langsung dari tim kami </p>

            <form class = "np-hero-search" method = "GET" action = "{{route('frontendnews')}}" role = "search">
                <input type = "search" name = "q" placeholder = "cari berita" aria-label = "cari berita" value = "{{request('q')}}">
                <button type = "submit" class = "np-hero-search-btn"> cari </button>
            </form>

            <div class = "np-hero-stats">
                <div class = "np-hero-stat">
                    <span class = "np-hero-stat-num">{{ $allNews->count() }}</span>
                    <div class = "np-hero-stat-label"> total artikel </div>
                </div>
                <div class = "np-hero-stat">
                    <span class = "np-hero-stat-num">{{ $allNews->pluck('author.name')->unique()->count() }}</span>
                    <div class = "np-hero-stat-label"> penulis </div>
                </div>
                <div class = "np-hero-stat">
                    <span class = "np-hero-stat-num">{{ $allNews->where('created_at', '>=', now()->startOfMonth())->count() }}</span>
                    <div class = "np-hero-stat-label"> bulan ini </div>
                </div>
            </div>
        </div>
    </section>

    @if($allNews->count() > 0)
        @php
            $featured = $allNews->first();
            $rest     = $allNews->skip(1);
            $sides    = $allNews->skip(1)->take(3);
            $latest   = $allNews->skip(4);
        @endphp

        <!-- featured article -->
        <section class = "np-section np-container">
            <div class = "np-sec-head">
                <div>
                    <div class = "np-sec-label"> artikel pilihan </div>
                    <h2 class = "np-sec-title"> berita utama </h2>
                </div>
            </div>

            <div class = "np-featured-wrap">
                <!-- big card -->
                <a href = "{{ route('frontendnews.show', $featured->id) }}" class = "np-featured-main">
                    <div class = "np-featured-img">
                        @if($featured->image)
                            <img src = "{{ asset('storage/' . $featured->image) }}" alt = "{{ $featured->title }}" loading = "lazy">
                        @else
                            <div class = "np-featured-img-ph"> news </div>
                        @endif
                        <span class = "np-feat-badge"> berita utama </span>
                    </div>
                    <div class = "np-featured-body">
                        <div class = "np-featured-date">
                            {{ $featured->created_at->translatedFormat('d F Y') }}
                        </div>
                        <h3 class = "np-featured-title"> {{ $featured->title }} </h3>
                        <p class = "np-featured-excerpt"> {{ Str::limit($featured->content, 180) }} </p>
                        <div class = "np-featured-foot">
                            <div class = "np-author-row">
                                <div class = "np-avatar"> {{ strtoupper(substr($featured->author?->name ?? 'A', 0, 1)) }} </div>
                                <span class = "np-author-name"> {{ $featured->author?->name ?? 'admin' }} </span>
                            </div>
                            <span class = "np-read-link"> baca selengkapnya </span>
                        </div>
                    </div>
                </a>

                <!-- side card -->
                 <div class = "np-featured-sides">
                    @foreach($sides as $item)
                     <a href = "{{route('frontendnews.show', $item->id)}}" class = "np-side-card" >
                        <div class = "np-side-img">
                            @if ($item->image)
                            <img src = "{{ asset('storage/' . $item->image) }}" alt = "{{ $item->title }}" loading = "lazy">
                            @else
                            <div class = "np-side-img-ph"> news </div>
                            @endif
                        </div>
                        <div class = "np-side-body">
                            <div class = "np-side-date">{{$item->created_at->translatedFormat('d F Y')}}</div>
                            <h3 class = "np-side-title">{{ $item->title }}</h3>
                        </div>
                     </a>
                            
                    @endforeach
                </div>
            </div>
        </section>
        
        <!-- latest artikel -->
         @if($latest->count() > 0)
         <section class = "np-section np-container" style = "padding-top: 0;">
            <div class = "np-sec-head">
                <div>
                    <div class = "np-sec-label">artikel terbaru</div>
                    <h2 class = "np-sec-title"> berita terkini </h2>
                </div>
            </div>
            <div class = "np-latest-grid">
                @foreach($latest as $item)
                 <a href = "{{route('frontendnews.show', $item->id)}}" class = "np-card" >
                    <div class = "np-card-img">
                        @if($item->image)
                        <img src = "{{ asset('storage/' . $item->image) }}" alt = "{{ $item->title }}" loading = "lazy">
                        @else 
                        <div class = "np-card-img-ph"> news </div>
                        @endif
                    </div>
                    <div class = "np-card-body">
                        <div class = "np-card-date">{{$item->created_at->translatedFormat('d F Y')}}</div>
                        <h3 class = "np-card-title"> {{ $item->title }} </h3>
                        <p class = "np-card-excerpt"> {{ Str::limit($item->content, 120) }} </p>
                        <div class = "np-card-foot">
                            <div class = "np-author-row">
                                <div class = "np-avatar"> {{ strtoupper(substr($item->author?->name ?? 'A', 0, 1)) }} </div>
                                <span class = "np-author-name"> {{ $item->author?->name ?? 'admin' }} </span>
                            </div>
                            <span class = "np-read-link"> baca selengkapnya </span>
                        </div>
                    </div>
                 </a>
                @endforeach
            </div>
        </section>

    @endif
    @else
    <!-- empety state -->
     <section class = "np-section np-container">
        <div class = "np-empety">
            <div class = "np-empety-icon">&#128240;</div>
            <p>Belum Ada Berita Yang Tersedia</p>
            @if(request('q'))
            <p>TIdak Ada Hasil Untuk "<strong>{{request('q')}}"</strong>".</p>
            <a href = "{{route('frontendnews')}}" style = "color:var (--brand-primary);font-weight:600;">
                Lihat semua Berita
            </a>
            @endif
        </div>
    </section>
    @endif
    <!-- why write our news -->
     <section class = "np-section-alt">
        <div class= "np-container">
        <div class = "np-sec-label" style = "text-align: center;">mengapa menulis di sini?</div>
        <h2 class = "np-sec-title-center"> why read our news </h2>
        <p class = "np-sec-sub-center"> kami hadir dengan content berkualitas , terpercaya dan selalu relavan untuk kebutuhan anda </p>

        <div class = "np-why-grid">
            <div class = "np-why-card">
                <div class = "np-why-icon">&#128269;</div>
                <h3 class = "np-why-title"> trust information </h3>
                <p class = "np-why-desc"> setiap berita dekorasi dan diverifikasi oleh tim editorial berpengalaman sebelum di publikasikan</p>
            </div>
            <div class = "np-why-card">
                <div class = "np-why-icon">&#128187;</div>
                <h3 class = "np-why-title"> technologi insight </h3>
                <p class = "np-why-desc"> dapatkan wawasan mendalam tentang trend teknologi terbaru yang memperngaruhi industri global </p>
            </div>
            <div class = "np-why-card">
                <div class = "np-why-icon">&#128161;</div>
                <h3 class = "np-why-title"> infation series </h3>
                <p class = "np-why-desc"> kisah nyata inovasi dari perushaan dan starup yang mengubah cara dunia bekerja</p>
            </div>
            <div class = "np-why-card">
                <div class = "np-why-icon">&#128200;</div>
                <h3 class = "np-why-title"> industri trends </h3>
                <p class = "np-why-desc"> analisis trend industri yang membantu anda mengambil keputusan bisnis lebih cerdas dan tepat</p>
            </div>
        </div>
        </div>
    </section>
    <!-- news later cta -->
     <div class = "np-container">
        <div class = "np-cta-baner">
            <h2 class = "np-cta-title">&#128321;jangan lewatkan berita terbaru </h2>
            <p class = "np-cta-text">daftarkan email anda dan kami akan mengirim berita pilihan langsung ke kontak anda </p>
            <form class = "np-cta-form" onsubmit = "handleNewslater(event)">
                <input type = "email" class = "np-cta-input" placeholder = "masukkan email anda" requaired>
                <button type = "submit" class = "np-cta-btn">berlangganan</button>
            </form>
        </div>
    </div>
    <script>
        function handleNewslater(e){
            e.preavenDefault();
            consts btn = e.target.quarySelector('.np-cta-btn');
            btn.textContent = 'terimakasih';
            btn.style.backgroud = '#28a745';
            btn.style.color = '#fff';
            setTimeout(() => (){
                btn.textContent = 'berlangganan';
                btn.style.background = '';
                btn.style.color = '';
                e.target.reset();
            },3000);
            }
    </script>
        @endsection
                

        
