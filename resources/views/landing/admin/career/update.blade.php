@extends('layouts.master')

@section('title')
Create Career
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Career</h1>
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
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="floatingInput">Sampul</label><br>
                    <small>Pilih gambar jika ingin mengubah</small>
                    <input value="{{$banner->banner}}" type="file" class="form-control-file" id="floatingInput"
                        placeholder="Cover" name="cover">
                    @if ($banner->banner )
                    <img class="mt-3" width="100px" height="100px" src="{{ asset ('storage/'.$banner->banner) }}"
                        alt="fesfh">
                    @else
                    <p>Gambar Tidak Sedia</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </form>
        </div>
    </div>
</div>
@endsection