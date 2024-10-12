@extends('layout')

@section('contant')
    <h3>Contant Page</h3>
    @foreach ($data as $keys => $values)
        <p>{{ $keys . ' = ' . $values }}</p>
    @endforeach
@endsection
