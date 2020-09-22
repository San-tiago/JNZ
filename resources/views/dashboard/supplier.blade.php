@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Suppliers</h1>
   <a href="{{url('/add-supplier')}}"><button>Add</button></a>
   <table>
        <tr>
            <th>id</th>
            <th>Supplier Name</th>
            <th>Address</th>
            <th>Contact Number</th> 
            <th>Product</th> 
            <th>Action</th>
        </tr>
        @foreach($suppliers as $supplier)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$supplier->supplier_name}}</td>
            <td>{{$supplier->address}}</td>
            <td>{{$supplier->contact_number}}</td>
            <td>{{$supplier->product}}</td>
            <td>
                <a href="{{url('user/edit/'.$supplier->id)}}">Edit</a>
                <a href="{{url('user/delete/'.$supplier->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
