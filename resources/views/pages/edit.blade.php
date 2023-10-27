@extends('layouts.layout')
@section('content')
    <form action="{{ url('/product/' .$product->id) }}" method='POST'>

        @csrf
        @method('PATCH')
        <label for="title">Title :</label><br>
        <input type="text" name="title" class="form-control" placeholder="Tittle" value="{{$product->title}}"><br>
        <label for="price">Price :</label><br>
        <input type="text" placeholder="Price" class="form-control" name="price" value="{{$product->price}}"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
@endsection