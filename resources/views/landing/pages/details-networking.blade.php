@extends('layouts.app')

@section('title')
Networking Details
@endsection

@section('content')
<div class="container" style="margin-top: 120px; margin-bottom: 30px">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="blog-details">
                <div class="row">
                    <div class="col-md-4">
                        <div class="article-image text-center">
                            <img src="https://linyjayainformatika.co.id/public/storage/jualan/1643094794.jpg"
                                alt="image" style="width: 100%; border-radius:20px;">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="">
                            <p style="font-size:25px; font-weight:bold; line-height:30px; color:black;">
                                WINDOWS 10 PRO
                            </p>
                            <br>
                            <p style="font-size:30px; font-weight:bold; color:black;">Rp. 250,000 </p>
                            <a href="https://wa.me/6282192272289?text=Hallo Liny Jaya... Saya ingin order produk *WINDOWS 10 PRO* *Harga : Rp. 250,000* https://linyjayainformatika.co.id/produk/windows-10-pro "
                                target="blank" class="btn btn-block btn-lg btn-success" style="width:100%;"> Order
                                Sekarang !</a>
                            <p style="font-size: 16px; padding-top:10px;"><b>Deskripsi Produk </b></p>
                            <p>
                                Windows 10 membawa konsep “Fluent Design System“ yang modern, transparent, dan
                                memiliki&nbsp;<em>depth</em>. Kesan transparent tampak di berbagai sudut desktop
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.pages.footer-blue')
@endsection