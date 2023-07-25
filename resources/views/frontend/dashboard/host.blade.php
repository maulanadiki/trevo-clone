@section('title','Sewakan Mobil Anda & Dapat Uang Secara Online - TREVO')

@extends('frontend.layout.layout')
@section('konten')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<style>
.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
<div class="container-fluid p-0 m-0 konten__container">
    <div class="host__header text-light">
        <div class="text-center">
            <p>Menjadi Host Trevo</p>
            <h1>Mobilmu, Gayamu</h1>
        </div>
    </div>

    <div class="row mt-5 mb-5 me-0 ms-0">
        <div class="col-md-4 col-12">
            <div class="col-md-11 col-12 gap-3">
                <h2 class="mb-5">Kenapa Berbagi Mobil di TREVO</h2>
                <span class="host__reason">Berbagi melalui teknologi yang disediakan TREVO itu mudah dan aman. Kamu
                    punya pilihan untuk menentukan ketersediaan mobil dan harga, serta menjadikan TREVO sebagai sumber
                    penghasilan tambahan.</span>
            </div>
        </div>
        <div class="col-md-4  col-12">
            <div class="col-md-11 col-12 gap-3">
                <h2 class="mb-5" for="melindungi">Kami melindungi Anda dengan TREVO Shield</h2>
                <span class="host__reason">TREVO Shield adalah proteksi kendaraan Anda selama trip bersama TREVO
                    berlangsung terhadap resiko kecelakaan, pencurian, bencana alam dan tuntutan pihak ke-3.</span>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="col-md-11 col-12 gap-3">
                <h2 class="mb-5" for="semua">Semua Guest sudah terverifikasi</h2>
                <span class="host__reason">Seluruh Guest kami telah melakukan verifikasi pada KTP, SIM, dan buku
                    tabungan sehingga kami hanya mengizinkan para pengguna TREVO yang sudah lolos tahap verifikasi untuk
                    memesan mobil Anda.</span>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-12 text-center">
        <h2 class="font-bold">MULAI BERBAGI MOBIL ANDA MELALUI <span class="text-trevo">Tiga Tahapan</span> </h2>
        <div class="col-md-11 col-12">
            <iframe class="host__video" src="https://www.youtube.com/embed/7IKSNlXlh5I" frameborder="0"
                allowfullscreen></iframe>
        </div>
    </div>

    <div class="col-md-12 col-12">
        <div class="row m-0 p-0">
            <div class="col-md-4">
                <div class="col-md-11 col-12">
                    <p class="host__circle">1</p>
                </div>
                <div class="col-md-11 col-12">
                    <p class="host__step">Berbagi tanpa dipungut biaya</p>
                </div>
                <div class="col-md-11 col-12">
                    <p class="host__descript">Semua jenis mobil yang umurnya tidak lebih dari 10 tahun dapat didaftarkan
                        pada TREVO tanpa dipungut biaya. Silakan hubungi kami jika kamu tertarik untuk mendaftarkan
                        mobil klasiknya sekalipun.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-11 col-12">
                    <p class="host__circle">2</p>
                </div>
                <div class="col-md-11 col-12">
                    <p class="host__step">Berbagi sesuai dengan kenyamanan anda</p>
                </div>
                <div class="col-md-11 col-12">
                    <p class="host__descript">Atur tanggal ketersediaan, harga dan fitur lainnya untuk disewakan pada
                        Guest. Tenang, mobilnya masih bisa kamu gunakan untuk keperluan pribadi sesuai dengan tanggal
                        ketersediaan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-11 col-12">
                    <p class="host__circle">3</p>
                </div>
                <div class="col-md-11 col-12">
                    <p class="host__step">Berbagi dengan percaya diri</p>
                </div>
                <div class="col-md-11 col-12">
                    <p class="host__descript">Setelah mobilnya sudah berhasil didaftarkan, Guest dapat memesan mobil
                        kamu. Guest dan Host bisa langsung saling berkomunikasi setelah pesanan terkonfirmasi.</p>
                </div>
            </div>

            <div class="col-md-12 col-12 text-center">
                <a href="#" class="host__question"> <img src="{{asset('/images/host/info.svg') }}" alt=""> apa yang
                    harus saya siapkan ?</a>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-12 host__higlight">
        <div class="col-md-12 col-12">KAMI AKAN SELALU BERADA DI SISIMU, SEPERTI TEMAN</div>
        <div class="col-md-12 col-12">
            <!-- <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('/images/host/likeafriend1.png') }}" alt="">
                        <p class="host__friends">1</p>
                        <p class="host__descriptions"></p>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('/images/host/likeafriend1.png') }}" alt="">
                        <p class="host__friends">1</p>
                        <p class="host__descriptions"></p>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('/images/host/likeafriend1.png') }}" alt="">
                        <p class="host__friends">1</p>
                        <p class="host__descriptions"></p>
                    </div>
                    <div class="swiper-slide">
                    <img src="{{asset('/images/host/likeafriend1.png') }}" alt="">
                        <p class="host__friends">1</p>
                        <p class="host__descriptions"></p>
                    </div>
                    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div> -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
// var swiper = new Swiper(".mySwiper", {
//     pagination: {
//         el: ".swiper-pagination",
//         type: "fraction",
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });
</script>
@endsection