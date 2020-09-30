@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Accounts</h1>
   <table>
        <tr>
            <th>id</th>
            <th>Username</th>
            <th>Password</th>
            <th>First Name</th> 
            <th>Last Name</th> 
            <th>Action</th>
        </tr>

        @foreach($accounts as $account)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$account->supplier_name}}</td>
            <td>{{$account->address}}</td>
            <td>{{$account->contact_number}}</td>
            <td>{{$account->product}}</td>
            <td>
                <a href="{{url('supplier/edit/'.$account->id)}}">Edit</a>
                <a href="{{url('supplier/delete/'.$account->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
