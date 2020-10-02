@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Available Products</h1>
  
   <table>
        <tr>
            <th>id</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th> 
            <th>Stock</th> 
            <th>Status</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->stock}}</td>
            <td><a href="{{url('add/order/'.$product->id)}}">Order</a></td>
            <td><a href="{{url('add/order/'.$product->id)}}">Purchase</a></td>

        </tr>
        @endforeach

    </table>
</div>
@endsection
