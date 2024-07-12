<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.updatePostProduct') }}" method="POST">
        @csrf
        <input type="hidden" value="{{$product->id}}" name="idProduct" >
        <label for="">Tên:</label>
        <input type="text" name="nameProduct" value="{{$product->name}}" ><br>
        <label for="">Giá:</label>
        <input type="text" name="priceProduct" value="{{$product->price}}"><br>
        <label for="">Danh mục</label>
        <select name="categoryname" id="">
            @foreach ($category as $value)
            <option 
            @if ($product->category_id ==$value->id)
            selected
            @endif
            value="{{ $value->id}}">
            {{ $value->name }}
        </option>
            @endforeach
        </select><br>
        <label for="view">view</label>
        <input type="text" name="viewProduct" value="{{$product->view}}"><br>
        <button>Chỉnh sửa</button>
    </form>
</body>
</html>