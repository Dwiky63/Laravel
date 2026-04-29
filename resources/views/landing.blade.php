@extends('layouts.frontend')

@section('title', 'Welcome')

@section('content')
<section class="hero-section text-center py-5 bg-light">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Welcome to iDev Company</h1>
        <p class="lead mb-4">Empowering Indonesia's digital future for Gen Z and Millennials</p>
        <div class="d-flex gap-3 justify-content-center">
            <a href="/about" class="btn btn-primary btn-lg">Learn More</a>
            <a href="/contact" class="btn btn-outline-primary btn-lg">Contact Us</a>
        </div>
    </div>
</section>

<section class="features-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Digital Solutions</h5>
                        <p class="card-text">We provide cutting-edge digital solutions tailored to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Creative Services</h5>
                        <p class="card-text">Transform your ideas into reality with our creative team.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Expert Support</h5>
                        <p class="card-text">24/7 support to ensure your success every step of the way.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
