<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function index()
   {
       // Mengambil semua berita, diurutkan dari yang terbaru
       // Eager Loading 'author' untuk mengoptimalkan query relasi created_by
       $allNews = News::with('author')->orderBy('created_at', 'desc')->get();

       return view('frontend.news.index', compact('allNews'));
   }

   public function show($id)
   {
       // Mencari berita berdasarkan ID, jika tidak ada akan muncul error 404
       $news = News::with('author')->findOrFail($id);

       return view('frontend.news.show', compact('news'));
   }
}
