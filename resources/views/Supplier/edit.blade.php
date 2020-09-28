<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Supplier</h1>

    <form action="{{url('/supplier/update/'.$supplier->id)}}" method="post">
        @csrf
        Supplier Name: <input type="text" name="supplier_name" value="{{$supplier->supplier_name}}"><br>
        <span style="color: red">@error('supplier_name'){{$message}}@enderror</span><br>

        Address: <input type="text" name="address" value="{{ $supplier->address}}"><br>
        <span style="color: red">@error('address'){{$message}}@enderror</span><br>

        Contact Number: <input type="text" name="contact_number" value="{{ $supplier->contact_number }}"><br>
        <span style="color: red">@error('contact_number'){{$message}}@enderror</span><br>

        Product: <input type="text" name="product" value="{{$supplier->product }}"><br>
        <span style="color: red">@error('product'){{$message}}@enderror</span><br>
        <input type="submit" name="" value="Submit"><br>
    </form>
</body>
</html>