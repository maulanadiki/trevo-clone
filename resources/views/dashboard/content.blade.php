
@section('title','Dashboard')

@extends('layout.layout')
@section('konten')
  <swiper-container class="mySwiper p-0 m-0" pagination="true" pagination-clickable="true" navigation="false" space-between="30"
    centered-slides="true" autoplay-delay="1000" autoplay-disable-on-interaction="false" direction="vertical" mousewheel="true" >
    <swiper-slide><img src="{{asset('/images/11146.jpg') }}" alt=""> </swiper-slide>
    <swiper-slide><img src="{{asset('/images/16371.jpeg') }}" alt=""></swiper-slide>
    <swiper-slide><img src="{{asset('/images/37693.png') }}" alt=""></swiper-slide>
    <swiper-slide><img src="{{asset('/images/38075.jpeg') }}" alt=""></swiper-slide>
    <swiper-slide><img src="{{asset('/images/81045.jpeg') }}" alt=""></swiper-slide>
    <swiper-slide><img src="{{asset('/images/97835.png') }}" alt=""></swiper-slide>
  </swiper-container>
@endsection
