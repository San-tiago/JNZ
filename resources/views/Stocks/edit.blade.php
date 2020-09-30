<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Stock</h1>

    <form action="{{url('/stock/update/'.$product->id)}}" method="post">
        @csrf
        Product Name: <input type="text" name="product_name" value="{{$product->product_name}}"><br>
        <span style="color: red">@error('product_name'){{$message}}@enderror</span><br>
        
        Unit In Stock: <input type="text" name="stock" value="{{$product->stock }}"><br>
        <span style="color: red">@error('stock'){{$message}}@enderror</span><br>
       
        Category: <input type="text" name="category" value="{{ $product->category}}"><br>
        <span style="color: red">@error('category'){{$message}}@enderror</span><br>

        Price: <input type="text" name="price" value="{{ $product->price }}"><br>
        <span style="color: red">@error('price'){{$message}}@enderror</span><br>

        <input type="submit" name="" value="Submit"><br>

    </form>
</body>
</html>