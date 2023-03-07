@extends('layouts.app')

@section('title')
Events
@endsection

@section('content')

@if (session('status'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses!',
        text : "{{ session('status') }}",
    });
</script>
@endif

<div class="container content-space-t-3 content-space-t-lg-5">
    <div class="w-lg-75 text-center mx-lg-auto">
        <div class="mb-5 mb-md-10">
            <h1 class="display-4">Formulir</h1>
        </div>
    </div>
</div>

<section class="blog-details-area ptb-110">
    <div class="container">
        <form action="{{ route('store_form_home') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="posisi">Melamar diPosisi <i class="text-danger" style="font-size: 14px;">*</i></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="posisi" id="exampleRadios1"
                        value="Tenaga Marketing Lapangan (TM)" checked="">
                    <label class="form-check-label" for="exampleRadios1">
                        Tenaga Marketing Lapangan (TM)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="posisi" id="exampleRadios2"
                        value="Tenaga Marketing Online (Media Sosial)">
                    <label class="form-check-label" for="exampleRadios2">
                        Tenaga Marketing Online (Media Sosial)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="posisi" id="exampleRadios3" value="Tim Kreative">
                    <label class="form-check-label" for="exampleRadios3">
                        Tim Kreative
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="posisi" id="exampleRadios4"
                        value="Programmer WEB (Fullstack)">
                    <label class="form-check-label" for="exampleRadios4">
                        Programmer WEB (Fullstack)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="posisi" id="exampleRadios5"
                        value="Programmer Mobile">
                    <label class="form-check-label" for="exampleRadios5">
                        Programmer Mobile
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="posisi" id="exampleRadios6"
                        value="Manajement Server &amp; Jaringan Komputer">
                    <label class="form-check-label" for="exampleRadios6">
                        Manajement Server &amp; Jaringan Komputer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="posisi" id="exampleRadios7"
                        value="Cameramen/Video Grapher">
                    <label class="form-check-label" for="exampleRadios7">
                        Cameramen/Video Grapher
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="posisi" id="exampleRadios8"
                        value="Teknisi Komputer &amp; Printer">
                    <label class="form-check-label" for="exampleRadios8">
                        Teknisi Komputer &amp; Printer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="posisi" id="exampleRadios9"
                        value="Teknisi Jaringan CCTV">
                    <label class="form-check-label" for="exampleRadios9">
                        Teknisi Jaringan CCTV
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="posisi" id="exampleRadios10"
                        value="Teknisi AC &amp; Kelistrikan">
                    <label class="form-check-label" for="exampleRadios9=10">
                        Teknisi AC &amp; Kelistrikan
                    </label>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="nama">Nama Lengkap <i class="text-danger" style="font-size: 14px;">*</i></label>
                <input type="text" class="form-control " name="nama_lengkap" id="nama" autocomplete="off" value=""
                    placeholder="Nama Lengkap" autofocus="">
            </div>
            <div class="form-group mb-3">
                <label for="alamat_domisili">Alamat Domisili <i class="text-danger"
                        style="font-size: 14px;">*</i></label>
                <input type="text" class="form-control " name="alamat" id="alamat_domisili" autocomplete="off" value=""
                    placeholder="...">
            </div>
            <div class="form-group mb-3">
                <label for="alamat_ktp">Alamat Sesuai KTP <i class="text-danger" style="font-size: 14px;">*</i></label>
                <input type="text" class="form-control " name="alamat_ktp" id="alamat_ktp" autocomplete="off" value=""
                    placeholder="...">
            </div>
            <div class="form-group mb-3">
                <label for="pendidikan">Pendidikan Terakhir <i class="text-danger"
                        style="font-size: 14px;">*</i></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" id="exampleRadios1" value="SMA/SMK"
                        checked="">
                    <label class="form-check-label" for="exampleRadios1">
                        SMA/SMK
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" id="exampleRadios2" value="D2">
                    <label class="form-check-label" for="exampleRadios2">
                        D2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" id="exampleRadios3" value="D3">
                    <label class="form-check-label" for="exampleRadios3">
                        D3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" id="exampleRadios4" value="D4">
                    <label class="form-check-label" for="exampleRadios4">
                        D4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" id="exampleRadios5"
                        value="S1 (Strata 1)">
                    <label class="form-check-label" for="exampleRadios5">
                        S1 (Strata 1)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pendidikan" id="exampleRadios6" value="S2">
                    <label class="form-check-label" for="exampleRadios6">
                        S2
                    </label>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="fb">Facebook </label>
                <input type="url" class="form-control " name="facebook" id="fb" autocomplete="off" value=""
                    placeholder="...">
            </div>
            <div class="form-group mb-3">
                <label for="ig">Instagram </label>
                <input type="text" class="form-control " name="instagram" id="ig" autocomplete="off" value=""
                    placeholder="...">
            </div>
            <div class="form-group mb-3">
                <label for="wa">WhatsApp</label>
                <input type="text" class="form-control " name="whatsapp" id="wa" autocomplete="off" value=""
                    placeholder="...">
            </div>
            <div class="form-group mb-3">
                <label for="pas_foto">Pas Photo <i class="text-danger" style="font-size: 14px;">* (JPG)</i></label>
                <input class="form-control " type="file" id="formFile" name="pas_foto" accept="image/*">
            </div>
            <div class="form-group mb-3">
                <label for="ijazah">Ijazah <i class="text-danger" style="font-size: 14px;">* (JPG)</i></label>
                <input class="form-control " type="file" id="formFile" name="ijaza" accept="image/*">
            </div>
            <div class="form-group mb-3">
                <label for="ktp">KTP <i class="text-danger" style="font-size: 14px;">* (JPG)</i></label>
                <input class="form-control " type="file" id="formFile" name="ktp" accept="image/*">
            </div>
            <div class="form-group mb-3">
                <label for="cv">Curriculum Vitae (CV) <i class="text-danger" style="font-size: 14px;">*
                        (PDF)</i></label>
                <input class="form-control " type="file" id="formFile" name="cv" accept=".pdf">
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-sm btn-success mb-2">KIRIM</button>
            </div>
        </form>
    </div>
</section>

@include('includes.pages.footer-blue')

@endsection