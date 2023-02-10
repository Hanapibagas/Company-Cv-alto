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
            <form action="{{ route('store_career') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control-file" name="banner">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Kirim
                </button>
            </form>
        </div>
    </div>
</div>
@endsection