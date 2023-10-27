@extends('layouts.layout')
@section('content')
    <div class="card" style="margin:20px; width:100%;">
        <div class="card-header">Create new product</div>
    </div>

    <form action="{{ url('/product') }}" method='POST'>

        @csrf
        <label for="title">Title :</label><br>
        <input type="text" name="title" class="form-control" placeholder="Tittle"><br>
        <label for="price">Price :</label><br>
        <input type="text" placeholder="Price" class="form-control" name="price"><br>
        <input type="submit" value="Submit" class="btn btn-success"><br>
    </form>

@endsection
