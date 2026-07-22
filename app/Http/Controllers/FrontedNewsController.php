<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class FrontedNewsController extends Controller
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

       // Berita sebelumnya (ID lebih kecil / lebih lama)
       $prevNews = News::where('id', '<', $id)
                       ->orderBy('id', 'desc')
                       ->first();

       // Berita selanjutnya (ID lebih besar / lebih baru)
       $nextNews = News::where('id', '>', $id)
                       ->orderBy('id', 'asc')
                       ->first();

       // Berita terkait: 3 berita terbaru selain berita yang sedang dibuka
       $relatedNews = News::with('author')
                          ->where('id', '!=', $id)
                          ->orderBy('created_at', 'desc')
                          ->take(3)
                          ->get();

       return view('frontend.news.show', compact('news', 'prevNews', 'nextNews', 'relatedNews'));
   }
}
