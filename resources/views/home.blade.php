@extends('layout')

@section('contant')
    <div class="container" style="margin-top:25px">
        <a class="btn btn-success mb-3" href="/posts/create">Add new post</a>
        @foreach ($datas as $data)
            <div class="card">
                <div class="card-header" style="text-align:center">
                    Contents
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $data->name }}</h5>
                    <p class="card-text">{{ $data->description }}</p>
                    <div class="d-flex justify-content-between" style="width:200px">
                        <a href="/posts/{{ $data->id }}" class="btn btn-primary">View</a>
                        <a href="/posts/{{ $data->id }}/edit" class="btn btn-warning">Edit</a>
                        <form method="post" action="/posts/{{ $data->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                    </div>
                </div>
            </div><br>
        @endforeach
    </div>
@endsection
