<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Customer</h1>

    <form action="{{url('/customer/update/'.$customer->id)}}" method="post">
        @csrf
        First Name: <input type="text" name="first_name" value="{{$customer->first_name}}"><br>
        <span style="color: red">@error('first_name'){{$message}}@enderror</span><br>

        Last Name: <input type="text" name="last_name" value="{{ $customer->last_name}}"><br>
        <span style="color: red">@error('last_name'){{$message}}@enderror</span><br>

        Middle Name: <input type="text" name="middle_name" value="{{ $customer->middle_name }}"><br>
        <span style="color: red">@error('middle_name'){{$message}}@enderror</span><br>

        Address: <input type="text" name="address" value="{{$customer->address }}"><br>
        <span style="color: red">@error('address'){{$message}}@enderror</span><br>
        
        Contact Number: <input type="text" name="contact_number" value="{{$customer->contact_number }}"><br>
        <span style="color: red">@error('contact_number'){{$message}}@enderror</span><br>
        <input type="submit" name="" value="Submit"><br>
    </form>
</body>
</html>