@extends ('layouts.frontend')
@section ('title','news & insights')
@section ('content')

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
                

        
