@extends('layouts.layout')

@section('content')
    <h1>{{$product->title}}</h1>
    <h3>{{$product->price}}</h3>
    <small>{{$product->created_at}}</small><br>
    <a href="{{url('/product/' . $product->id . '/edit')}}" class="btn btn-primary">Edit</a>
    <form action="{{url('/product'. '/' . $product->id)}}" method="POST">
        @method('DELETE')
        {{ csrf_field() }}
        <button type="submit" onclick="return confirm('u sure u wanna delete it ?')" class="btn btn-danger">Delete</button>
    </form>
    
@endsection