@extends('layout')

@section('contant')
    <div class="container" style="margin-top:25px">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->name }}</h5>
                <p class="card-text">{{ $post->description }}</p>
            </div>
            <div class="card-footer">
                <a class="btn btn-danger mb-3" href="/posts">Back</a>
            </div>
        </div>
    </div>
@endsection
