@extends ('layouts.frontend')
@section ('title','news & insights')
@section ('content')

<div class = "np-page">
    <!-- hero -->
     <section class = "np-hero">
        <div class = "np-container"> 
            <span class = "np-hero-tag"> news & insights</span>
            <h1 class = "np-hero-title"> berita dan informasi terkini> </h1>
            <p class = "np-hero-sub"> ikuti perkembangan terbaru , update teknologi , dan wawasan industri langsung dari tim kami </p>

            <form class = "np-hero-search" method = "GET" action = "{{route('frontendnews')}}" role = "search">
                <input type = "search" name = "q" placeholder = "cari berita" aria-label = "cari berita" value = "{{request('q')}}">
                <button type = "submit" class = "np-hero-search-btn"> cari </button>
            </form>

            <div class = "np-hero-stats">
                <div class = "np-hero-stat">
                    <span class = "np-hero-stat-num">{{ $allNews->count()}}</span>
                    <div class = "np-hero-stat-label"> total artikel </div>
                </div>
                <div class = "np-hero-stat">
                    <span class = "np-hero-stat-num">{{ $allNews->pluck('author.name')->unique()->count()}}</span>
                    <div class = "np-hero-stat-label"> penulis </div>
                </div>
                <div class = "np-hero-stat">
                    <span class = "np-hero-stat-num">{{ $allNews-> where('created_at','>=',now()->startOfMounth())count()}}</span>
                    <div class = "np-hero-stat-label"> bulan ini </div>
                </div>
            </div>
        </div>
    </section>

    @if($allNews->count()>0) 
        @php
            $featured=$allNews->first();
            $rest=$allNews->skip(1);
            $sides=$allNews->skip(1)->take(3);
            $latest=$allNews->skip(4);
        @endphp

        <!-- feature -->
         <section class = "np-section np-container">
            <div class = "np-sec-head">
                <div>
                    <div class = "np-sec-label">artikel pilihan </div>
                    <h2 class = "np-sec-title"> berita utama </h2>
                </div>
            </div>
            <div class = "np-featured-wrap">
                <!-- big card -->
                 <a href = "{{route('forntendnews.show', $featured->id}}" class = "np-featured-main">
                    <div class = "np-featured-img">
                        @if($featured->image)
                        <img src = "{{asssets('storage/'.$featured->image)}}" alt = "{{$featured->title}}"loading = "lazy">
                        @else
                            <div class = "np-featured-img-ph"> news 
                            </div>
                        @endif 
                        <span class = "np-feat-badge"> berita utama </span>
                    </div>
                    <div class = "np-featured-body">
                        <div class = "np-featured-date">
                            {{ $featured->create_at->translatedFormat('d F Y')}}
                        </div>
                        <h3 class = "np-featured-title"> {{$featured->title}} </h3>
                        <p class = "np-fetured-excerpt">{{Str::limit($featured->content,180)}} </p>
                        <div class = "np-featured-foot">
                            <div class = "np-author-row">
                                <div class = "np-avatar"> {{strtoupper(subster($featured->author?->name??'A',0,1))}} </div>
                                <span class = "np-author-name">{{$featured->author?->name??'admin'}}</span>
                            </div>
                            <span class = "np-read-link"> baca selengkapnya </span>
                        </div>
                    </div>
                 </a>
                        

    
    
</div>

