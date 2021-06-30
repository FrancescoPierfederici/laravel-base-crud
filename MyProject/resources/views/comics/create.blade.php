<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
<form action ="{{route('comics.store')}}" method="post">
    @csrf
    
    <label for="title">Title</label>
    <input type="text" name="title" id="title">

    <label for="description">Description</label>
    <input type="text" name="description" id="description">

    <label for="thumb">Preview</label>
    <input type="text" name="thumb" id="thumb">

    <label for="price">Price</label>
    <input type="price" name="price" id="price">

    
    <label for="series">Series</label>
    <input type="series" name="series" id="series">

        
    <label for="sale_date">Sale_date</label>
    <input type="sale_date" name="sale_date" id="sale_date">

    <label for="type">Type</label>
    <input type="type" name="type" id="type">

    <input type="submit" value="invia">
</form>


</body>
</html>