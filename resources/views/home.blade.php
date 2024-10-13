@extends('layout')

@section('contant')
    <div class="container" style="margin-top:25px">
        <a class="btn btn-success mb-3" href="add_post">Add new post</a>
        @foreach ($datas as $data)
            <div class="card">
                <div class="card-header" style="text-align:center">
                    Contents
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $data->name }}</h5>
                    <p class="card-text">{{ $data->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div><br>
        @endforeach
    </div>
@endsection
