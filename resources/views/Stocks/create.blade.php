<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Stock</h1>

    <form action="{{url('/stock-add')}}" method="post">
        @csrf
        Product Name: <input type="text" name="product_name" value="{{ old('product_name') }}"><br>
        <span style="color: red">@error('product_name'){{$message}}@enderror</span><br>

        Units In Stock: <input type="text" name="stock" value="{{ old('stock') }}"><br>
        <span style="color: red">@error('stock'){{$message}}@enderror</span><br>

       Category: <input type="text" name="category" value="{{ old('category') }}"><br>
        <span style="color: red">@error('category'){{$message}}@enderror</span><br>

        Price: <input type="text" name="price" value="{{ old('price') }}"><br>
        <span style="color: red">@error('price'){{$message}}@enderror</span><br>
        <input type="submit" name="" value="Submit"><br>
    </form>
</body>
</html>