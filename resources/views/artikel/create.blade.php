@extends('layouts.main')

@section('title', 'Tambah Movie')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-2 fw-normal">Detail Movies</h1>
            <form action="/artikel" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Movie </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                    <div class="invalid-feedback">
                        @error('title')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year Movie </label>
                    <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year') }}">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre Movie </label>
                    <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre" value="{{ old('genre') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" value="{{ old('title') }}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endSection