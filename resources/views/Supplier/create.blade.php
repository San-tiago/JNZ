<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Supplier Details</h1>

    <form action="{{url('/supplier-add')}}" method="post">
        @csrf
        Supplier Name: <input type="text" name="supplier_name" value="{{ old('supplier_name') }}"><br>
        <span style="color: red">@error('supplier_name'){{$message}}@enderror</span><br>

        Address: <input type="text" name="address" value="{{ old('address') }}"><br>
        <span style="color: red">@error('address'){{$message}}@enderror</span><br>

        Contact Number: <input type="text" name="contact_number" value="{{ old('contact_number') }}"><br>
        <span style="color: red">@error('contact_number'){{$message}}@enderror</span><br>

        Product: <input type="text" name="product" value="{{ old('product') }}"><br>
        <span style="color: red">@error('product'){{$message}}@enderror</span><br>
        <input type="submit" name="" value="Submit"><br>
    </form>
</body>
</html>