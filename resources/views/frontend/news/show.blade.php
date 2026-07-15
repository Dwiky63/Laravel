@extends('layouts.frontend')

@section('title', $news->title)

@section('content')


<!-- ============================================================ -->
<!-- Hero Section                                                  -->
<!-- ============================================================ -->
<section style="
    background: linear-gradient(135deg, #FF6B4A 0%, #FFB020 100%);
    padding: 80px 0 60px;
    margin-top: 56px;
">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">

                <span class="badge bg-white text-warning fw-bold mb-3">
                    News &amp; Insights
                </span>

                <h1 class="display-5 fw-bold mb-3">
                    {{ $news->title }}
                </h1>

                <p class="mb-4" style="opacity: 0.9;">
                    Dipublikasikan pada
                    <time datetime="{{ $news->created_at }}">
                        {{ date('d F Y', strtotime($news->created_at)) }}
                    </time>
                    &nbsp;&middot;&nbsp; 5 menit baca
                </p>

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-white text-decoration-none" style="opacity: 0.8;">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('frontendnews') }}" class="text-white text-decoration-none" style="opacity: 0.8;">
                                News
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-white">
                            {{ Str::limit($news->title, 30) }}
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->


<!-- ============================================================ -->
<!-- Featured Image                                                -->
<!-- ============================================================ -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <figure class="mb-0">
                @if($news->image)
                    <img
                        src="{{ asset('storage/' . $news->image) }}"
                        alt="{{ $news->title }}"
                        class="img-fluid w-100 rounded-4 shadow"
                        style="max-height: 480px; object-fit: cover;"
                    >
                @else
                    <img
                        src="https://via.placeholder.com/1200x675"
                        alt="Gambar Berita"
                        class="img-fluid w-100 rounded-4 shadow"
                        style="max-height: 480px; object-fit: cover;"
                    >
                @endif

                <figcaption class="text-muted text-center mt-2" style="font-size: 0.85rem;">
                    Gambar ilustrasi artikel
                </figcaption>
            </figure>

        </div>
    </div>
</div>
<!-- End Featured Image -->


<!-- ============================================================ -->
<!-- Article Content                                              -->
<!-- ============================================================ -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <article>
                <div style="font-size: 1.1rem; line-height: 1.9; color: #374151;">
                    {!! nl2br(e($news->content)) !!}
                </div>
            </article>

        </div>
    </div>
</div>
<!-- End Article Content -->


<!-- ============================================================ -->
<!-- Share Buttons                                                 -->
<!-- ============================================================ -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <hr class="mb-4">

            <p class="fw-semibold mb-3">Bagikan artikel ini:</p>

            <div class="d-flex gap-2 flex-wrap">
                <a
                    href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                    target="_blank"
                    class="btn btn-outline-primary btn-sm rounded-3"
                >
                    Facebook
                </a>

                <a
                    href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($news->title) }}"
                    target="_blank"
                    class="btn btn-outline-dark btn-sm rounded-3"
                >
                    Twitter / X
                </a>

                <a
                    href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}"
                    target="_blank"
                    class="btn btn-outline-info btn-sm rounded-3"
                >
                    LinkedIn
                </a>
            </div>

            <hr class="mt-4">

        </div>
    </div>
</div>
<!-- End Share Buttons -->




@endsection
