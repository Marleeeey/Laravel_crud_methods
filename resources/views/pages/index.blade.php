@extends('layouts.layout')

@section('content')
    <a class="btn btn-success" href="/product/create">Add product</a>
    @if(count($product) > 0)
        @foreach($product as $prdt)
            <h1><a href="{{url('/product/' . $prdt->id)}}" style="text-decoration: none; color: black;">{{$prdt->title}}</a></h1>
            <h3>{{$prdt->price}}</h3>
            <h4>{{$prdt->product_code}}</h4>
            <small>{{$prdt->description}}</small>
            <small>{{$prdt->created_at}}</small>
        @endforeach
    @else
        <h1>Store is empty</h1>
    @endif





@endsection