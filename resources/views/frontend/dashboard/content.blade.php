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
        <p class="why__title pb-5 pt-5">Kenapa sewa di Trevo</p>

        <div class="col-md-11 mx-auto mb-5">
            <div class="d-flex flex-row gap-5 justify-content-center">
                <div class="why__card" onmouseover="changeImage(this)" onmouseout="restoreImage(this)">
                    <img src="{{asset('/asset/slider/keys-purple.png')}}" alt="" id="image1">
                    <div class="flex flex-coloumn justify-content-center">
                        <p class="why__card__title">Bisa Lepas Kunci</p>
                        <p class="why__card__description">pergi ke berbagai destinasi sesukamu dengan jaminan privasi
                            dari sewa mobil lepas kunci</p>
                    </div>
                </div>
                <div class="why__card" onmouseover="changeImage(this)" onmouseout="restoreImage(this)">
                    <img src="{{asset('/asset/slider/car-purple.png')}}" alt="" id="image2">
                    <div class="flex flex-coloumn justify-content-center">
                        <p class="why__card__title">Bisa Lepas Kunci</p>
                        <p class="why__card__description">pergi ke berbagai destinasi sesukamu dengan jaminan privasi
                            dari sewa mobil lepas kunci</p>
                    </div>
                </div>
                <div class="why__card" onmouseover="changeImage(this)" onmouseout="restoreImage(this)">
                    <img src="{{asset('/asset/slider/phone-purple.png')}}" alt="" id="image3">
                    <div class="flex flex-coloumn justify-content-center">
                        <p class="why__card__title">Bisa Lepas Kunci</p>
                        <p class="why__card__description">pergi ke berbagai destinasi sesukamu dengan jaminan privasi
                            dari sewa mobil lepas kunci</p>
                    </div>
                </div>
                <div class="why__card" onmouseover="changeImage(this)" onmouseout="restoreImage(this)">
                    <img src="{{asset('/asset/slider/security-purple.png')}}" alt="" id="image4">
                    <div class="flex flex-coloumn justify-content-center">
                        <p class="why__card__title">Bisa Lepas Kunci</p>
                        <p class="why__card__description">pergi ke berbagai destinasi sesukamu dengan jaminan privasi
                            dari sewa mobil lepas kunci</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-12 mb-5 d-flex justify-content-center gap-3">
            <button class="gues__host">Guest</button>
            <button class="gues__host">Host</button>
        </div>

        <div class="row p-0 m-0">
            <div class="col-md-6 text-center">
                <img src="{{asset('/asset/slider/big-phone.png')}}" alt="tata cara penggunaan aplikasi"
                    style="width: 625px; height:auto;">
            </div>

            <div class="col-md-6 text-start">

                <div number="1" class="cara__sewa mb-5">
                    <p class="cara__title">Download & Sign Up</p>
                    <p class="cara__description">Daftar dengan alamat email dan masukkan kode OTP</p>
                </div>
                <div number="2" class="cara__sewa mb-5">
                    <p class="cara__title">Verifikasi Akun</p>
                    <p class="cara__description">Lengkapi profil dengan Selfie serta unggah SIM & KTP kamu</p>
                </div>
                <div number="3" class="cara__sewa mb-5">
                    <p class="cara__title">Pilih Mobil dan Detail Pemesanan</p>
                    <p class="cara__description">Cari mobil sesuai budget dan kebutuhanmu. Masukkan tanggal, waktu dan alamat pengantaran. Tentukan opsi pengantaran serta asuransi perjalanan</p>
                </div>
                <div number="4" class="cara__sewa mb-5">
                    <p class="cara__title">Lakukan Pembayaran</p>
                    <p class="cara__description">Tersedia metode pembayaran melalui bank BCA, Mandiri, BNI, BRI, Permata atau melalui e-wallet Gopay, Shopee Pay, Link Aja, OVO, serta melalui layanan paylater Indodana</p>
                </div>
                <div number="5" class="cara__sewa mb-5">
                    <p class="cara__title">Nikmati Perjalanan</p>
                    <p class="cara__description">Tunggu mobil diantar untuk perjalanmu yang bebas dan menyenangkan</p>
                </div>
            </div>
        </div>
    </div>



</div>

<script src="{{asset('/asset/js/content.js')}}"></script>
@endsection