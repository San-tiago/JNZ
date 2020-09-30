@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Stocks</h1>
   <a href="{{url('/add-stock')}}"><button>Add</button></a>

   <table>
        <tr>
            <th>id</th>
            <th>Product Name</th>
            <th>Units In Stock</th>
            <th>Category</th> 
            <th>Price</th> 
            <th>Action</th>
        </tr>
        @foreach($stocks as $stock)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$stock->product_name}}</td>
            <td>{{$stock->stock}}</td>
            <td>{{$stock->category}}</td>
            <td>{{$stock->price}}</td>
            <td>
                <a href="{{url('stock/edit/'.$stock->id)}}">Edit</a>
                <a href="{{url('stock/delete/'.$stock->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
