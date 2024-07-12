<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.addPostProduct') }}" method="POST">
        @csrf
        <label for="">Giá:</label>
        <input type="text" name="nameProduct"><br>
        <label for="">Giá:</label>
        <input type="text" name="priceProduct"><br>
        <label for="">Phong ban</label>
        <select name="categoryname" id="">
            @foreach ($category as $value)
            <option value="{{ $value->id}}">{{ $value->name }}</option>
            @endforeach
        </select><br>
        <label for="view">view</label>
        <input type="text" name="viewProduct"><br>
        <button>Them moi</button>
    </form>
</body>
</html>