<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADD ORDER</h1>
    <form action="{{url('/customerorder-add')}}" method="post">
        @csrf
        Product Name: <input type="text" name="product_name" value="{{$product->product_name}}"><br>
        <span style="color: red">@error('product_name'){{$message}}@enderror</span><br>

        Category: <input type="text" name="category" value="{{$product->category}}"><br>
        <span style="color: red">@error('category'){{$message}}@enderror</span><br>

        Price: <input type="text" name="price" value="{{ $product->price }}"><br>
        <span style="color: red">@error('price'){{$message}}@enderror</span><br>

        Quantity: <input type="text" name="quantity"><br>
        <span style="color: red">@error('quantity'){{$message}}@enderror</span><br>

        Total: <input type="text" name="total"><br>
        <span style="color: red">@error('total'){{$message}}@enderror</span><br>

        Customer: <select name="customer">
        @foreach($customers as $customer)
            <option>{{$customer->first_name}}</option>
        @endforeach
                </select>
        <span style="color: red">@error('customer'){{$message}}@enderror</span><br>

        <input type="submit" name="" value="Submit"><br>
    </form>
</body>
</html>