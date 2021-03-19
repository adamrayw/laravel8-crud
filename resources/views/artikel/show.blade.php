@extends('layouts.main')

@section('title', 'Detail Movie')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-2 fw-normal">Detail Movies</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }} <span class="badge bg-primary">{{ $movie->year }}</span></h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $movie->genre }}</h6>
                    <p class="card-text">{{ $movie->description }}</p>
                    <a href="#" class="card-link">Kembali</a>
                    <form action="/movie/{{ $movie->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <a href="/movie/edit/{{ $movie->id }}" class="card-link">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection