<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>

    <form action="{{url('/product-add')}}" method="post">
        @csrf
        Product Name: <input type="text" name="product_name" value="{{ old('product_name') }}"><br>
        <span style="color: red">@error('product_name'){{$message}}@enderror</span><br>

        Category: <input type="text" name="category" value="{{ old('category') }}"><br>
        <span style="color: red">@error('category'){{$message}}@enderror</span><br>

        Price : <input type="text" name="price" value="{{ old('price') }}"><br>
        <span style="color: red">@error('price'){{$message}}@enderror</span><br>

        Measurement: <input type="text" name="measurement" value="{{ old('measurement') }}"><br>
        <span style="color: red">@error('measurement'){{$message}}@enderror</span><br>
        <input type="submit" name="" value="Submit"><br>
    </form>
</body>
</html>