@extends('layouts.frontend')

@section('title', $news->title)

@section('content')
<!-- hero section -->
<section style = "
 background : linear-gradien(135deg, #ff6b4a 0%, #ffb020 100%);
 padding : 80px 0 60px;
 margin-top : 56px;
 ">

    <div class = "container">
        <div class = "row justify-content-center"> 
            <div class = "col-lg-8 text-center text-white">

                <span class = "badge bg-white text-warning fw-bold mb-3">
                    news &amp; insights
                </span>
                <h1 class = "display-5 fw-bold mb-3">
                    {{$news->title}}
                </h1>
                <p class = "mb-4" style = "opacity:0.9;">
                dipublikasikan pada 
                <time datetime = "{{$news->created_add}}">
                    {{date('d F Y',strtotime($news->created_add))}}
                </time>
                &nbsp;&middot;&nbsp;5menitbaca </p>

                <!-- bread crump -->
                <nav aria-label = "breadchump">
                    <ol class = "breadcrump justify-content-center mb-0">
                        <li class = "breadcrumb-item">
                            <a href = "{{route('home')}}" class = "text-white text-decoration-none" style = "opacity:0.8;">
                                home
                            </a>
                        </li>
                        <li class = "breadcrumb-item">
                            <a href = "{{route('frontendnews')}}" class = "text-white text-decoration-none" style = "opacity:0.8;">
                                news
                            </a>
                        </li>
                        <li class = "breadcrump-item active text-white">
                            {{Str::limit($news->title),40}}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- featured image -->
<div class = "container my-5">
    <div class = "row justify-content-center">
        <div class = "col-lg-10">
            <figure class = "mb-0">
                @if($news->image)
                    <img src = "{{asset('storage/'.$news->image)}}"
                    alt = "{{$news->title}}"
                    class = "img-fuild w-100 rounded-4 shadow"
                    style = "max-height:480;object-fit:cover;"
                    >
                @else
                    <img src = "https://via.placeholder.com/1200x675"
                    alt = "gambar berita"
                    class = "img-fuild w-100 rounded-4 shadow"
                    style = "max-height:480;object-fit:cover;"
                    >
                @endif

                <figcaption class = "text-muted text-center mt-2"
                style = "font-size:0.85rem;">
                gambar ilustrasi Artikel
                </figcaption>
            </figure>
        </div>
    </div>
</div>

<!-- artikel content -->
<div class = "container mb-5">
    <div class = "row justify-content-center">
        <div class = "col-lg-8">
            <article>
                <div style = "font-size: 1.1rem; line-height: 1.9rem; color: #374151;">
                    {!! nl2br(e($news->content))!!}
                </div>
            </article>
        </div>
    </div>
</div>

<!-- share buttons -->
<div class = "container mb-5">
    <div class = "row justify-content-center">
        <div class = "col-lg-4">
            <hr class = "mb-4">
            <p class = "fw-semibold mb-3">
                bagikan artikel ini :
            </p>
            <div class = "d-flex gap-2 flex-wrap">
                <a
                    href = "https://wwww.facebook.com/share.php?u={{urlencode(request()->url())}}"
                    target = "_blank"
                    class = "btn btn-outline-primary btn-sm btn-primary"
                >
                    facebook 
                </a>
                <a
                    href = "https://wwww.twitter.com/intend/tweet?url={{urlencode(request()->url())}}&text={{urlencode($news->title)}}"
                    target = "_blank"
                    class = "btn btn-outline-primary btn-sm btn-primary"
                >
                    twitter
                </a>
                <a
                    href = "https://wwww.linkedin.com/share.php?u={{urlencode(request()->url())}}&title={{urlencode($news->title)}}"
                    target = "_blank"
                    class = "btn btn-outline-primary btn-sm btn-primary"
                >
                    linkedin
                </a>
            </div>
            <hr class = "mt-4">
        </div>
    </div>
</div>

@endsection
