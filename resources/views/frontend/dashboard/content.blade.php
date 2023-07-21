@section('title','Dashboard')

@extends('frontend.layout.layout')
@section('konten')
<div class="container-fluid p-0 m-0">
    <!-- slider -->
    <swiper-container class="mySwiper p-0 m-0" pagination="true" pagination-clickable="true" navigation="false"
        space-between="30" centered-slides="true" autoplay-delay="10500" autoplay-disable-on-interaction="false"
        direction="vertical" mousewheel="true">
        <swiper-slide>
            <img src="{{asset('/asset/slider/slider1.webp')}}" alt="">
            <div class="slider__tagline">
                <p class="slider__tagline__header">Sewa Mobil, <br> Apa pun, Kapan Pun ! <br> #TrevoSelaluAda</p>
                <p class="slider__tagline__description">
                    TREVO adalah aplikasi marketplace sewa mobil terbesar di Indonesia dengan ribuan unit kendaraan
                    untuk
                    sewa seminggu, sehari hingga sebulan.
                </p>
            </div>
            <div class="slider__tagline__button ">
                <div>
                    <p>Coba TREVO sekarang !</p>
                    <button class="button button-swipper">ini tombol</button>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide><img src="{{asset('/asset/slider/slider2.webp')}}" alt="">
            <div class="slider__tagline">
                <p class="slider__tagline__header">Sewa Mobil, <br> Apa pun, Kapan Pun ! <br> #TrevoSelaluAda</p>
                <p class="slider__tagline__description">
                    TREVO adalah aplikasi marketplace sewa mobil terbesar di Indonesia dengan ribuan unit kendaraan
                    untuk
                    sewa seminggu, sehari hingga sebulan.
                </p>
            </div>
            <div class="slider__tagline__button ">
                <div>
                    <p>Coba TREVO sekarang !</p>
                    <button class="button button-swipper">ini tombol</button>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide><img src="{{asset('/asset/slider/slider3.webp')}}" alt="">
            <div class="slider__tagline">
                <p class="slider__tagline__header">Sewa Mobil, <br> Apa pun, Kapan Pun ! <br> #TrevoSelaluAda</p>
                <p class="slider__tagline__description">
                    TREVO adalah aplikasi marketplace sewa mobil terbesar di Indonesia dengan ribuan unit kendaraan
                    untuk
                    sewa seminggu, sehari hingga sebulan.
                </p>
            </div>
            <div class="slider__tagline__button ">
                <div>
                    <p>Coba TREVO sekarang !</p>
                    <button class="button button-swipper">ini tombol</button>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide><img src="{{asset('/asset/slider/slider4.webp')}}" alt="">
            <div class="slider__tagline">
                <p class="slider__tagline__header">Sewa Mobil, <br> Apa pun, Kapan Pun ! <br> #TrevoSelaluAda</p>
                <p class="slider__tagline__description">
                    TREVO adalah aplikasi marketplace sewa mobil terbesar di Indonesia dengan ribuan unit kendaraan
                    untuk
                    sewa seminggu, sehari hingga sebulan.
                </p>
            </div>
            <div class="slider__tagline__button ">
                <div>
                    <p>Coba TREVO sekarang !</p>
                    <button class="button button-swipper">ini tombol</button>
                </div>
            </div>
        </swiper-slide>
    </swiper-container>


    <!-- cerita -->
    <div class="story__container col-md-12 text-center">
        <div class="col-md-12 pt-5 pb-5 text-center text-light">
            <p class="p-0 m-0 story__title">Cerita perjalanan Trevo</p>
        </div>
        <div class="col-md-10 mx-auto">
            <div class="row">
                <div class="col-md-3">
                    <div class="story__people mx-auto">
                        <img src="{{asset('/asset/slider/people.png')}}" class="story__people" alt="people">
                    </div>
                    <div class="d-flex flex-row justify-content-center align-content-center">
                      <p class="story__point">1.5K</p>
                      <p class="story__descript">Pengguna</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="story__people mx-auto">
                        <img src="{{asset('/asset/slider/booking-completed.png')}}" class="story__people" alt="people">
                    </div>
                    <div class="d-flex flex-row justify-content-center align-content-center">
                      <p class="story__point">71.7K</p>
                      <p class="story__descript">Booking Selesai</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="story__people mx-auto">
                        <img src="{{asset('/asset/slider/indonesia.png')}}" class="story__people" alt="people">
                    </div>
                    <div class="d-flex flex-row justify-content-center align-content-center">
                      <p class="story__point">22</p>
                      <p class="story__descript">Kota di indonesia</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="story__people mx-auto">
                        <img src="{{asset('/asset/slider/inscrit.png')}}" class="story__people" alt="people">
                    </div>
                    <div class="d-flex flex-row justify-content-center align-content-center">
                      <p class="story__point">10.2K</p>
                      <p class="story__descript">Mobile Terdaftar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kenapa sewa mobil ? -->
    <div class="why__container col-md-12 text-center">
      <p class="why__title">Kenapa sewa di Trevo</p>
    </div>
</div>
@endsection