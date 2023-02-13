@extends('layouts.master')

@section('title')
Events
@endsection

@push('add-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css" />
@endpush

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar events</h1>
        <a href="{{ route('index_create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Tambah Events
        </a>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $event as $files )
                        <tr>
                            <th>{{ $files->title }}</th>
                            <th>
                                <img src="{{ asset('storage/'.$files->image) }}" alt="" style="width: 150px"
                                    class="img-thumbnail">
                            </th>
                            <th>
                                <a href="{{ route('edit_events', $files->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('delete_events', $files->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('add-script')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endpush
