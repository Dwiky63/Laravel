<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class FrontedNewsController extends Controller
{
   public function index(Request $request)
   {
       // Semua berita untuk statistik hero (total artikel, penulis, bulan ini)
       $allNews = News::with('author')->orderBy('created_at', 'desc')->get();

       // Berita utama (1 artikel terbaru)
       $featured = News::with('author')->orderBy('created_at', 'desc')->first();

       // Berita samping (3 artikel terbaru setelah featured)
       $sideNews = News::with('author')
                       ->orderBy('created_at', 'desc')
                       ->limit(3)->offset(1)
                       ->get();

       // Artikel lainnya (semua berita setelah featured, selalu terupdate)
       $latestNews = News::with('author')
                         ->orderBy('created_at', 'desc')
                         ->limit(PHP_INT_MAX)->offset(1)
                         ->get();

       return view('frontend.news.index', compact('allNews', 'featured', 'sideNews', 'latestNews'));
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
