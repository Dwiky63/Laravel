<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Career;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 3 berita terbaru untuk carousel hero
        $hotNews = News::with('author')->orderBy('created_at', 'desc')->take(3)->get();

        // 4 berita terbaru untuk list sidebar
        $latestNews = News::orderBy('created_at', 'desc')->take(4)->get();

        // 3 berita untuk section "Berita Terbaru" di bawah carousel
        $beritaUtama = News::orderBy('created_at', 'desc')->take(3)->get();

        // 3 lowongan karir yang masih open
        $careers = Career::where('status', 'open')->latest()->take(3)->get();

        return view('frontend.home', compact('hotNews', 'latestNews', 'beritaUtama', 'careers'));
    }
}
