<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input{
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<form action="{{ route("addProduct") }}" method="post" enctype="multipart/form-data">
    @csrf
    <input name="productName" placeholder="product name" type="text">
    <input name="productPrice" placeholder="product price" type="text">
    <textarea placeholder="product description" name="productDescription"></textarea>
    <input type="file" name="image1" id="">
    <input type="file" name="image2" id="">
    <input type="file" name="image3" id="">
    <input type="file" name="image4" id="">
    <input type="file" name="image5" id="">
    <button type="submit">Add</button>
</form>
</body>
</html>
