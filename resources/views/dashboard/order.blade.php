@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Orders</h1>
   <a href="{{url('/add-order')}}"><button>Add</button></a>

   <table>
        <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Address</th>
            <th>Contact Number</th> 
            <th>Order/s</th> 
            <th>Action</th>
        </tr>

        @foreach($customers as $customer)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$customer->first_name}}</td>
            <td>{{$customer->last_name}}</td>
            <td>{{$customer->middle_name}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->contact_number}}</td>
            <td>
                <a href="{{url('customer/edit/'.$customer->id)}}">Edit</a>
                <a href="{{url('customer/delete/'.$customer->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
