@extends('layouts.frontend')

@section('title', $news->title)

@section('content')
<!-- hero section -->
<section style="
 background: linear-gradient(135deg, #ff6b4a 0%, #ffb020 100%);
 padding: 80px 0 60px;
 margin-top: 56px;
 ">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">

                <span class="badge bg-white text-warning fw-bold mb-3">
                    news &amp; insights
                </span>
                <h1 class="display-5 fw-bold mb-3">
                    {{$news->title}}
                </h1>
                <p class="mb-4" style="opacity:0.9;">
                dipublikasikan pada
                <time datetime="{{$news->created_at}}">
                    {{date('d F Y',strtotime($news->created_at))}}
                </time>
                &nbsp;&middot;&nbsp;5 menit baca </p>

                <!-- bread crumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}" class="text-white text-decoration-none" style="opacity:0.8;">
                                home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('frontendnews')}}" class="text-white text-decoration-none" style="opacity:0.8;">
                                news
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-white">
                            {{Str::limit($news->title, 40)}}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- featured image -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <figure class="mb-0">
                @if($news->image)
                    <img src="{{asset('storage/'.$news->image)}}"
                    alt="{{$news->title}}"
                    class="img-fluid w-100 rounded-4 shadow"
                    style="max-height:480px; object-fit:cover;"
                    >
                @else
                    <img src="https://via.placeholder.com/1200x675"
                    alt="gambar berita"
                    class="img-fluid w-100 rounded-4 shadow"
                    style="max-height:480px; object-fit:cover;"
                    >
                @endif

                <figcaption class="text-muted text-center mt-2"
                style="font-size:0.85rem;">
                gambar ilustrasi Artikel
                </figcaption>
            </figure>
        </div>
    </div>
</div>

<!-- artikel content -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <article>
                <div style="font-size: 1.1rem; line-height: 1.9rem; color: #374151;">
                    {!! nl2br(e($news->content))!!}
                </div>
            </article>
        </div>
    </div>
</div>

<!-- share buttons -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <hr class="mb-4">
            <p class="fw-semibold mb-3">
                bagikan artikel ini :
            </p>
            <div class="d-flex gap-2 flex-wrap">
                <a
                    href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(request()->url())}}"
                    target="_blank"
                    class="btn btn-outline-primary btn-sm"
                >
                    facebook
                </a>
                <a
                    href="https://twitter.com/intent/tweet?url={{urlencode(request()->url())}}&text={{urlencode($news->title)}}"
                    target="_blank"
                    class="btn btn-outline-info btn-sm"
                >
                    twitter
                </a>
                <a
                    href="https://www.linkedin.com/shareArticle?mini=true&url={{urlencode(request()->url())}}&title={{urlencode($news->title)}}"
                    target="_blank"
                    class="btn btn-outline-secondary btn-sm"
                >
                    linkedin
                </a>
            </div>
            <hr class="mt-4">
        </div>
    </div>
</div>

<!-- author card -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-3">
                <div class="d-flex align-items-center gap-3">

                    <div
                        class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold"
                        style="width:60px; height:60px; background:linear-gradient(135deg, #ff6b35, #ffb64a); flex-shrink:0;"
                    >
                        {{ strtoupper(substr($news->author?->name ?? 'A', 0, 1)) }}
                    </div>
                    <div>
                        <h6 class="mb-1 fw-bold">{{ $news->author?->name ?? 'Admin' }}</h6>
                        <p class="mb-0 text-muted" style="font-size:0.85rem;">
                            penulis konten dan team lead
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- previous and next article -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="row g-3">

                <!-- Sebelumnya -->
                <div class="col-6">
                    @if($prevNews)
                        <a
                            href="{{route('frontendnews.show', $prevNews->id)}}"
                            class="card border-0 shadow-sm rounded-3 text-decoration-none h-100 p-3 d-block"
                            style="transition:background 0.3s;"
                            onmouseover="this.style.background='#fff3eb'"
                            onmouseout="this.style.background='white'"
                        >
                            <small class="d-block mb-1 fw-semibold" style="color:#ff6b35;">&larr; Sebelumnya</small>
                            <strong style="font-size:0.9rem; color:#1a1a1a;">
                                {{Str::limit($prevNews->title, 60)}}
                            </strong>
                        </a>
                    @else
                        <div class="card border-0 bg-light rounded-3 h-100 p-3 d-flex align-items-center justify-content-center">
                            <small class="text-muted">Tidak ada artikel sebelumnya</small>
                        </div>
                    @endif
                </div>

                <!-- Selanjutnya -->
                <div class="col-6">
                    @if($nextNews)
                        <a
                            href="{{route('frontendnews.show', $nextNews->id)}}"
                            class="card border-0 shadow-sm rounded-3 text-decoration-none h-100 p-3 d-block text-end"
                            style="transition:background 0.3s;"
                            onmouseover="this.style.background='#fff3eb'"
                            onmouseout="this.style.background='white'"
                        >
                            <small class="d-block mb-1 fw-semibold" style="color:#ff6b35;">Selanjutnya &rarr;</small>
                            <strong style="font-size:0.9rem; color:#1a1a1a;">
                                {{Str::limit($nextNews->title, 60)}}
                            </strong>
                        </a>
                    @else
                        <div class="card border-0 bg-light rounded-3 h-100 p-3 d-flex align-items-center justify-content-center">
                            <small class="text-muted">Tidak ada artikel selanjutnya</small>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>

<!-- related news -->
<section class="py-5" style="background:#fff8f3;">
    <div class="container">
        <h2 class="fw-bold mb-4" style="color:#222222;">
            berita terkait
        </h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse($relatedNews as $related)
            <div class="col">
                <a href="{{route('frontendnews.show', $related->id)}}"
                   class="card border-0 shadow-sm rounded-4 h-100 text-decoration-none"
                   style="transition: transform 0.3s, box-shadow 0.3s;"
                   onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 28px rgba(0,0,0,0.12)';"
                   onmouseout="this.style.transform=''; this.style.boxShadow='';"
                >
                    @if($related->image)
                        <img
                            src="{{asset('storage/'.$related->image)}}"
                            alt="{{$related->title}}"
                            class="card-img-top"
                            style="object-fit:cover; height:200px;"
                        >
                    @else
                        <div class="card-img-top d-flex align-items-center justify-content-center"
                             style="height:200px; background:linear-gradient(135deg,#ff6b35,#ffb64a);">
                            <span style="font-size:3rem;">📰</span>
                        </div>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <small class="text-muted mb-2" style="font-size:0.75rem;">
                            {{ date('d F Y', strtotime($related->created_at)) }}
                        </small>
                        <h6 class="card-title fw-bold" style="color:#1a1a1a; line-height:1.4;">
                            {{ Str::limit($related->title, 70) }}
                        </h6>
                        <p class="card-text text-muted mt-1" style="font-size:0.85rem; flex:1;">
                            {{ Str::limit($related->content, 100) }}
                        </p>
                        <span class="fw-semibold mt-2" style="color:#ff6b35; font-size:0.85rem;">
                            baca selengkapnya &rarr;
                        </span>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12">
                <p class="text-muted text-center py-4">Belum ada berita terkait.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>


<!-- news letter -->
<section style="background:linear-gradient(135deg, #ff6b35 0%, #ff8f57 50%, #ffb64a 100%);">
    <div class="container py-5 text-white text-center">
        <h2 class="fw-bold mb-3">dapatkan berita</h2>
        <p class="mb-4" style="opacity:0.9;">
            dapatkan berita terbaru langsung di inbox anda
        </p>
        <form class="d-flex gap-2 justify-content-center">
            <input type="email"
            placeholder="masukan email anda"
            class="form-control"
            style="max-width:320px;">
            <button type="submit"
            class="btn btn-outline-light px-4">
                subscribe
            </button>
        </form>

    </div>
</section>
@endsection
