@extends('layout')

@section('contant')
    <div class="container" style="margin-top:25px">
        <div class="card">
            <div class="card-header" style="text-align:center">
                Edit posts
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="/posts/{{ $post->id }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="type" name="name" value="{{ old('name', $post->name) }}" class="form-control"
                            id="exampleFormControlInput1" placeholder="Enter title...">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea placeholder="Ehter contents" class="form-control" name="description" id="exampleFormControlTextarea1"
                            rows="3">{{ old('description', $post->description) }}</textarea>
                    </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-info mb-3" type="submit" name="add_post">Update post</button>
                <a class="btn btn-danger mb-3" href="/posts">Back</a>
            </div>
            </form>
        </div>
    @endsection
