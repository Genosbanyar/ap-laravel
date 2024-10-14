@extends('layout')

@section('contant')
    <div class="container" style="margin-top:25px">
        <div class="card">
            <div class="card-header" style="text-align:center">
                Add new posts
            </div>
            <div class="card-body">
                <form method="POST" action="/posts">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="type" value="{{ old('name') }}" name="name" class="form-control"
                            id="exampleFormControlInput1" placeholder="Enter title...">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea placeholder="Ehter contents" class="form-control" name="description" id="exampleFormControlTextarea1"
                            rows="3">{{ old('description') }}</textarea>
                    </div>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="card-footer">
                <button class="btn btn-info mb-3" type="submit" name="add_post">Add new post</button>
                <a class="btn btn-danger mb-3" href="/posts">Back</a>
            </div>
            </form>
        </div>
    @endsection
