@extends('layouts.frontend')

@section('title', 'Company News')

@section('content')
<div class="container">
   <h2 class="mb-4">Latest News</h2>
   <div class="row">
       @forelse($allNews as $item)
           <div class="col-md-4 mb-4">
               <div class="card h-100 shadow-sm">
                   <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="{{ $item->title }}">
                   <div class="card-body">
                       <h5 class="card-title">{{ $item->title }}</h5>
                       <p class="card-text text-muted">{{ Str::limit($item->content, 100) }}</p>
                   </div>
                   <div class="card-footer bg-white border-top-0">
                       <div class="d-flex justify-content-between align-items-center">
                           <small class="text-muted">By: {{ $item->author->name }}</small>
                           <a href="{{ route('news.show', $item->id) }}" class="btn btn-sm btn-primary">Read More</a>
                       </div>
                   </div>
               </div>
           </div>
       @empty
           <p class="text-center">No news available at the moment.</p>
       @endforelse
   </div>
</div>
@endsection
