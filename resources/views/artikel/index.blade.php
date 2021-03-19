@extends('layouts.main')

@section('title', 'Top Movie')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-2 fw-normal">Top Movies</h1>
            <a href="/movie/create" class="btn btn-primary">Tambah Movie</a>
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <ul class="list-group list-group-flush">
                @foreach($data as $d)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="">
                        <h5 class="mb-1 fw-light">{{ $loop->iteration }} - {{$d->title}} <span class="badge bg-primary">{{ $d->year }}</span></h5>
                        <small class="text-muted">{{ $d->genre }}</small>
                    </div>
                    <a href="/movie/{{ $d->id }}" class="btn btn-warning">Detail</a>
                </li>
                @endforeach
            </ul>


            <a href=""></a>
        </div>
    </div>
</div>
@endSection