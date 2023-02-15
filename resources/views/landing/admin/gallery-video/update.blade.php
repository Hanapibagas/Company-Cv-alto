@extends('layouts.master')

@section('title')
Portofolio
@endsection


@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah gallery photos</h1>
    </div>

    @if ( $errors->any() )
    <div class="alert alert-danger">
        <ul>
            @foreach ( $errors->all() as $error )
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('update_video', $edit->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="floatingInput">Sampul</label><br>
                    <small>Pilih gambar jika ingin mengubah</small>
                    <input value="{{ $edit->video }}" type="file" class="form-control-file" id="floatingInput"
                        placeholder="Cover" name="video">
                    @if ( $edit->video ) <br>
                    <video controls style="width: 250px">
                        <source src="{{ asset('storage/'.$edit->video) }}" type="video/mp4">
                    </video>
                    @else
                    <p>Video Tidak Sedia</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Kirim
                </button>
            </form>
        </div>
    </div>
</div>
@endsection