@extends('layouts.app')

@section('title')
Events Details
@endsection

@section('content')
<div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
    <div class="w-lg-65 mx-lg-auto">
        <div class="mb-4">
            <h1 class="h2" style="text-indent: 20px">
                Alto Perkasa Berbagi Ilmu Dengan Mengadakan Pelatihan Kilat Pembuatan Web Khusus Untuk Tingkat
                Pemula Yang Ingin Sukses Jadi Web Developer.
            </h1>
        </div>
    </div>
    <div class="my-4 my-sm-8">
        <img class="img-fluid rounded-lg" style="width: 50%; margin-left: 24%"
            src="{{ asset('pages/frontend/img/events/1628254834.jpeg') }}" alt="Image Description">
    </div>
    <div class="w-lg-65 mx-lg-auto">
        <p>
            Akhirnya alto Perkasa ingin berbagi ilmu dan pengalaman bagi para pemula yang ingin berkarir
            sebagai develop web. Sesungguhnya ilmu yang akan kami bagikan sungguh mahal tetapi demi menghasilkan SDM IT
            khususnya programmer web di Indonesia serta mendukung ekonomi kreative kami hadir dengan biaya kontribusi yg
            tergolong murah dengan membuka kesempatan bagi seluruh kalangan baik dari pelajar, mahasiswa, pekerja dan
            umum untuk mulai belajar membangun web sendiri.
        </p>
        <p>
            Banyak keuntungan yang bisa kita dapatkan ketika mahir dalam membuat web professional khususnya di era
            industri 4.0 yang serba digitalisasi dan sangat dibutuhkan oleh banyak industri maupun instansi. Kegiatan
            pelatihan kilat ini rencana akan diadakan pada tanggal 8 sd 9 Maret 2020 di Aula Liny Komputer yang dimulai
            setiap pukul 09.00 sd 16.00. Pelatihan ini akan dipandu langsung oleh para Tim Develop yang berpengalaman
            dan sudah terbukti membangun berbagai web maupun sistem informasi diberbagai instansi/perusahaan. Olehnya
            itu jangan sia-siakan kesempatan ini jika anda ingin punya minat menjadi programmer web karena kesempatan
            untuk suskes dibidang IT salahsatunya adalah menjadi develop web, tutup Kalfin Alloto'dang sebagai founder
            CV. Alto Perkasa saat diwawancara.
        </p>
        <div class="row justify-content-sm-between align-items-sm-center mt-5">
            <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex align-items-center">
                    <span class="text-cap mb-0 me-2">Share:</span>
                    <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                        <i class="bi-facebook"></i>
                    </a>
                    <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                        <i class="bi-twitter"></i>
                    </a>
                    <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                        <i class="bi-instagram"></i>
                    </a>
                    <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                        <i class="bi-telegram"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-auto">
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#" data-toggle="tooltip"
                    data-placement="top" title="Bookmark story">
                    <i class="bi-bookmark"></i>
                </a>
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#" data-toggle="tooltip"
                    data-placement="top" title="Report story">
                    <i class="bi-flag"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@include('includes.pages.footer-blue')

@endsection