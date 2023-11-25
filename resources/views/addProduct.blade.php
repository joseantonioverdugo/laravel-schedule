<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Add new Product</h1>

    <form method="POST" action="{{route('store')}}">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <label for="price">Price</label>
    <input type="number" name="price" id="price" step="0.01">
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" id="quantity">
    <input type="submit" value="Add Product">
    </form>
</body>
</html>