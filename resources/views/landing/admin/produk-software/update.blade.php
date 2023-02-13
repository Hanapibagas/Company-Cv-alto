@extends('layouts.master')

@section('title')
Produk Software
@endsection


@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah software</h1>
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
            <form action="{{ route('update_software', $edit->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value="{{ $edit->title }}" type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="blok w-full">{{ $edit->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="title">Harga</label>
                    <input value="{{ $edit->price }}" type="number" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label for="floatingInput">Sampul</label><br>
                    <small>Pilih gambar jika ingin mengubah</small>
                    <input value="{{ $edit->image }}" type="file" class="form-control-file" id="floatingInput"
                        placeholder="Cover" name="image">
                    @if ( $edit->image )
                    <img class="mt-3" width="100px" height="100px" src="{{ asset ('storage/'.$edit->image) }}"
                        alt="fesfh">
                    @else
                    <p>Gambar Tidak Sedia</p>
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

@push('add-script')
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi');
</script>
@endpush