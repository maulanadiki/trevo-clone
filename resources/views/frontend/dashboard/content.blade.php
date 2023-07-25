@section('title','Dashboard')

@extends('frontend.layout.layout')
@section('konten')

<div class="container-fluid p-0 m-0 konten__container">
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
                <div class="col-md-3 col-6">
                    <div class="story__people mx-auto">
                        <img src="{{asset('/asset/slider/people.png')}}" class="story__people" alt="people" />
                    </div>
                    <div class="d-flex flex-row justify-content-center align-content-center">
                        <p class="story__point">1.5K</p>
                        <p class="story__descript">Pengguna</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="story__people mx-auto">
                        <img src="{{asset('/asset/slider/booking-completed.png')}}" class="story__people"
                            alt="people" />
                    </div>
                    <div class="d-flex flex-row justify-content-center align-content-center">
                        <p class="story__point">71.7K</p>
                        <p class="story__descript">Booking Selesai</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="story__people mx-auto">
                        <img src="{{asset('/asset/slider/indonesia.png')}}" class="story__people" alt="people" />
                    </div>
                    <div class="d-flex flex-row justify-content-center align-content-center">
                        <p class="story__point">22</p>
                        <p class="story__descript">Kota di indonesia</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="story__people mx-auto">
                        <img src="{{asset('/asset/slider/inscrit.png')}}" class="story__people" alt="people" />
                    </div>
                    <div class="d-flex flex-row justify-content-center align-content-center">
                        <p class="story__point">10.2K</p>
                        <p class="story__descript">Mobile Terdaftar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cara daftar -->
    <div class="why__container col-md-12 text-center">
        <p class="why__title pb-5 pt-5">Kenapa sewa di Trevo</p>
        <div class="row gap-3 p-0 m-0 justify-content-center">
            <div class="why__card col-md-2 col-sm-2 col-5" onmouseover="changeImage(this)"
                onmouseout="restoreImage(this)">
                <img src="{{asset('/asset/slider/keys-purple.png')}}" alt="" id="image1" />
                <div class="flex flex-coloumn justify-content-center">
                    <p class="why__card__title">Bisa Lepas Kunci</p>
                    <p class="why__card__description">
                        pergi ke berbagai destinasi sesukamu dengan jaminan privasi dari
                        sewa mobil lepas kunci
                    </p>
                </div>
            </div>

            <div class="why__card col-md-2 col-sm-2 col-5" onmouseover="changeImage(this)"
                onmouseout="restoreImage(this)">
                <img src="{{asset('/asset/slider/car-purple.png')}}" alt="" id="image2" />
                <div class="flex flex-coloumn justify-content-center">
                    <p class="why__card__title">Bisa Lepas Kunci</p>
                    <p class="why__card__description">
                        pergi ke berbagai destinasi sesukamu dengan jaminan privasi dari
                        sewa mobil lepas kunci
                    </p>
                </div>
            </div>

            <div class="why__card col-md-2 col-sm-2 col-5" onmouseover="changeImage(this)"
                onmouseout="restoreImage(this)">
                <img src="{{asset('/asset/slider/phone-purple.png')}}" alt="" id="image3" />
                <div class="flex flex-coloumn justify-content-center">
                    <p class="why__card__title">Bisa Lepas Kunci</p>
                    <p class="why__card__description">
                        pergi ke berbagai destinasi sesukamu dengan jaminan privasi dari
                        sewa mobil lepas kunci
                    </p>
                </div>
            </div>

            <div class="why__card col-md-2 col-sm-2 col-5" onmouseover="changeImage(this)"
                onmouseout="restoreImage(this)">
                <img src="{{asset('/asset/slider/security-purple.png')}}" alt="" id="image4" />
                <div class="flex flex-coloumn justify-content-center">
                    <p class="why__card__title">Bisa Lepas Kunci</p>
                    <p class="why__card__description">
                        pergi ke berbagai destinasi sesukamu dengan jaminan privasi dari
                        sewa mobil lepas kunci
                    </p>
                </div>
            </div>
        </div>


        <!-- tombol gues -->
        <div class="col-md-12 mb-5 d-flex justify-content-center gap-3">
            <button class="gues__host">Guest</button>
            <button class="gues__host">Host</button>
        </div>

        <!-- cara daftar -->
        <div class="row p-0 m-0">
            <div class="col-md-6 text-center">
                <img src="{{asset('/asset/slider/big-phone.png')}}" alt="tata cara penggunaan aplikasi"
                    class="cara__img" />
            </div>

            <div class="col-md-6 col-12 text-start">
                <h4 for="step-rent" class="mb-5 text-center" style="color: rgb(95, 53, 175)">
                    Cara Menyewa Mobil di trevo
                </h4>
                <div number="1" class="cara__sewa mb-5">
                    <p class="cara__title">Download & Sign Up</p>
                    <p class="cara__description">
                        Daftar dengan alamat email dan masukkan kode OTP
                    </p>
                </div>
                <div number="2" class="cara__sewa mb-5">
                    <p class="cara__title">Verifikasi Akun</p>
                    <p class="cara__description">
                        Lengkapi profil dengan Selfie serta unggah SIM & KTP kamu
                    </p>
                </div>
                <div number="3" class="cara__sewa mb-5">
                    <p class="cara__title">Pilih Mobil dan Detail Pemesanan</p>
                    <p class="cara__description">
                        Cari mobil sesuai budget dan kebutuhanmu. Masukkan tanggal, waktu dan
                        alamat pengantaran. Tentukan opsi pengantaran serta asuransi
                        perjalanan
                    </p>
                </div>
                <div number="4" class="cara__sewa mb-5">
                    <p class="cara__title">Lakukan Pembayaran</p>
                    <p class="cara__description">
                        Tersedia metode pembayaran melalui bank BCA, Mandiri, BNI, BRI,
                        Permata atau melalui e-wallet Gopay, Shopee Pay, Link Aja, OVO, serta
                        melalui layanan paylater Indodana
                    </p>
                </div>
                <div number="5" class="cara__sewa mb-5">
                    <p class="cara__title">Nikmati Perjalanan</p>
                    <p class="cara__description">
                        Tunggu mobil diantar untuk perjalanmu yang bebas dan menyenangkan
                    </p>
                </div>
            </div>
        </div>
    </div>

    <p class="testimoni__title text-center mb-5" style="color: rgb(95, 53, 175);">Kata Pengguna</p>
    <div class="d-flex flex-row gap-4 p-0 m-0 overflow-auto  justify-content-center">
        <div class="testimoni__card">
            <div class="d-flex flex-row justify-content-center card__header">
                <img src="{{asset('/asset/slider/avatar.png') }}" style="widht:90px; height:90px;" alt="avatar">
                <div class="testimoni__nama">
                    <p class="text-lg">Michellin</p>
                    <span class="text-sm">traveller</span>
                    <div class="testimoni__rating">
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                    </div>
                </div>
                <img src="{{asset('/asset/slider/double-quote.png') }}" alt="double-quote"
                    style="width:90px; height:90px;">
            </div>
            <div class="card__body">
                <p class="text-sm card__body__quote">Di apps ini kalian mudah buat car sharing n bs jg kl kalian mau
                    jalan2 d dlm kota slama lebaran inii.. driver ny ramaahhh mbl bagus bersih dan baruuu</p>
            </div>
        </div>
        <div class="testimoni__card">
            <div class="d-flex flex-row justify-content-center card__header">
                <img src="{{asset('/asset/slider/avatar.png') }}" style="widht:90px; height:90px;" alt="avatar">
                <div class="testimoni__nama">
                    <p class="text-lg">Rigel_$</p>
                    <span class="text-sm">Photographer</span>
                    <div class="testimoni__rating">
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                    </div>
                </div>
                <img src="{{asset('/asset/slider/double-quote.png') }}" alt="double-quote"
                    style="width:90px; height:90px;">
            </div>
            <div class="card__body">
                <p class="text-sm card__body__quote">Semangat untuk bagikan kode referralnya Kakak. Semakin banyak yg
                    menggunakan kode referralmu maka semakin besar kesempatan yg kakak...</p>
            </div>
        </div>
        <div class="testimoni__card">
            <div class="d-flex flex-row justify-content-center card__header">
                <img src="{{asset('/asset/slider/avatar.png') }}" style="widht:90px; height:90px;" alt="avatar">
                <div class="testimoni__nama">
                    <p class="text-lg">Abidza145</p>
                    <span class="text-sm">Businessman</span>
                    <div class="testimoni__rating">
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                        <span class="star filled">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                </div>
                <img src="{{asset('/asset/slider/double-quote.png') }}" alt="double-quote"
                    style="width:90px; height:90px;">
            </div>
            <div class="card__body">
                <p class="text-sm card__body__quote">Mobilnya bagus bagus ga nyesel sewa di trevo</p>
            </div>
        </div>
    </div>



</div>

<script src="{{asset('/asset/js/content.js')}}"></script>
@endsection