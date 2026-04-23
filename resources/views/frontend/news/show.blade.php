@extends('layouts.frontend')

@section('title', $news->title)

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></li>
                   <li class="breadcrumb-item active">{{ Str::limit($news->title, 20) }}</li>
               </ol>
           </nav>

           <h1 class="display-4">{{ $news->title }}</h1>
           <p class="text-muted">
               Published on {{ $news->created_at->format('d M Y') }} |
               Author: <strong>{{ $news->author->name }}</strong>
           </p>
           <hr>
           <img src="https://via.placeholder.com/800x400" class="img-fluid rounded mb-4" alt="Featured Image">
          
           <div class="content leading-relaxed" style="font-size: 1.1rem; line-height: 1.8;">
               {!! nl2br(e($news->content)) !!}
           </div>

           <div class="mt-5">
               <a href="{{ route('news.index') }}" class="btn btn-secondary">Back to News List</a>
           </div>
       </div>
   </div>
</div>
@endsection
