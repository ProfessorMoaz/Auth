@extends('master-layout')
@section('content')
<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h2 class="text-primary m-0">Wanderlust</h2>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('index')}}" class="nav-item nav-link">Home</a>
                <a href="{{ route('packages')}}" class="nav-item nav-link active">Packages</a>
                <a href="{{ route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ route('home')}}" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header2">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown"> "Embark on Your Ultimate Adventure with
                        Wanderlust Tour! Discover Pakistan's Cities in Style and Comfort. Book Your Journey Today!"
                    </p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Eg: Thailand">
                        <button type="button"
                            class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                            style="margin-top: 7px;">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
            <h1 class="mb-5">Awesome Packages</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-map-marker-alt text-primary me-2"></i>Hunza Valley
                        </small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-calendar-alt text-primary me-2"></i>7 days, 6 nights
                        </small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                            Person</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">75,000 Pkr</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>
                            This package offers a comprehensive exploration of Hunza Valley's beauty and culture.
                            The price includes accommodation in comfortable hotels or guesthouses, transportation,
                            guided tours to attractions, and some meals.
                            Prices may vary depending on the level of accommodation, group size, and additional
                            activities chosen.
                        </p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/package-2.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-map-marker-alt text-primary me-2"></i>Swat Valley </small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-calendar-alt text-primary me-2"></i> 6 days, 5 nights</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                            Person</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">65,000 Pkr</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>
                            This package provides an adventurous journey through the stunning landscapes of Swat
                            Valley.
                            The price includes accommodation, transportation, guided tours, and basic meals.
                            Prices may vary based on accommodation standards, group size, and optional activities
                            such as skiing or wildlife safaris.
                        </p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/package-3.jpg" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-map-marker-alt text-primary me-2"></i>Skardu Adventure</small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-calendar-alt text-primary me-2"></i> 8 days, 7 nights </small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                            Person</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">90,000 Pkr</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p>
                            This expedition offers an immersive experience in Skardu's rugged terrain and natural
                            wonders.
                            The price includes accommodation, transportation, guided treks, and meals.
                            Prices may vary depending on accommodation preferences, trekking difficulty, and
                            additional activities such as boating or cultural experiences.
                        </p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Package End -->
@endsection