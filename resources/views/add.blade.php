@extends('layout')

@section('contant')
    <div class="container" style="margin-top:25px">
        <a class="btn btn-success mb-3" href="add_post">Add new post</a>
        <div class="card">
            <div class="card-header" style="text-align:center">
                Add new posts
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-control">Title</label>
                    <input class="form-control" type="text" name="title" placeholder="Enter title...">
                    <label class="form-control">Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter description"></textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
