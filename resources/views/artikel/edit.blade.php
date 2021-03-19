@extends('layouts.main')

@section('title', 'Edit Movie')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-2 fw-normal">Edit Movies</h1>
            <form action="/movie/{{$movie->id}}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Movie </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $movie->title }}">
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year Movie </label>
                    <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ $movie->year }}">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre Movie </label>
                    <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre" value="{{ $movie->genre }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ $movie->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endSection