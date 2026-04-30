@extends('layouts.frontend')

@section('title', 'About Us')

@section('content')
   <div class="about-hero">
        <div class="container">
            <p class="teks-warning fw-bold mb-2">who we are </P>
            <h1> about <span> modern news </span> </h1>
            <p class="nt-3">
                Relay adalah komponen elektronik yang seringkali terlihat sepele tetapi memiliki peran yang sangat penting dalam berbagai sistem elektrik dan elektronik. Relay berfungsi sebagai sakelar elektromagnetik yang dapat mengontrol aliran listrik pada rangkaian. Dalam artikel ini, kita akan membahas lebih lanjut tentang fungsi relay, jenis-jenis relay yang berbeda, prinsip dan cara kerjanya dalam berbagai aspek kehidupan.
            </p>
        </div>
   </div>

   <div class="bg-light py-5">
        <div class="continer">
            <div class="row g-4 text-center>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-number"> 50+ </div>
                        <div class="stat-label"> global beraus </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-number"> 100 </div>
                        <div class="stat-label"> jurnalist </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-number"> 200 </div>
                        <div class="stat-label"> monthly readrs </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-number"> 300 </div>
                        <div class="stat-label"> founded </div>
                    </div>
                </div>
            </div>
        </div>
   </div>


<!-- our story -->
 <div class="py-5">
    <div class="container">
        <div class="row align-items-center g-5"> 
            <!-- teks -->
             <div class="col-lg-6">
                <h2 class="section-title"> our story </h2>
                <p class="text-mooted"> 
                    Yang dimaksud relay adalah sebuah komponen elektronika yang berbentuk sakelar yang dioperasikan dengan listrik, dilengkapi 2 bagian diantaranya elektromagnet (Coil) dan mekanikal (Switch). Dimana komponen tersebut memanfaatkan prinsip elektromagnetik untuk dapat menggerakkan sakelar sehingga dapat menghantarkan arus listrik.
                </p>
                <p class="text-mooted"> 
                    Yang dimaksud relay adalah sebuah komponen elektronika yang berbentuk sakelar yang dioperasikan dengan listrik, dilengkapi 2 bagian diantaranya elektromagnet (Coil) dan mekanikal (Switch). Dimana komponen tersebut memanfaatkan prinsip elektromagnetik untuk dapat menggerakkan sakelar sehingga dapat menghantarkan arus listrik.
                </p>
                <p class="text-mooted"> 
                    Yang dimaksud relay adalah sebuah komponen elektronika yang berbentuk sakelar yang dioperasikan dengan listrik, dilengkapi 2 bagian diantaranya elektromagnet (Coil) dan mekanikal (Switch). Dimana komponen tersebut memanfaatkan prinsip elektromagnetik untuk dapat menggerakkan sakelar sehingga dapat menghantarkan arus listrik.
                </p>
                <a href="/news" class="btn btn-primary px-4 mt-2" style="background:var(--brand-blue);border:none;border-radius:10px;">
                    read our latest news
                </a>
             </div>
             <!-- image-->
              <div class="col-lg-6">
                <img
                    src=Dual-Channel-Relay-Module.jpg
                    alt="our news"
                    class="img-fluid"
                    style="border-radius:16px; box-shadow:0 8px 30px rgba(0,0,0,0.15);"
                    >
              </div>
        </div>
    </div>
 </div>
@endsection
