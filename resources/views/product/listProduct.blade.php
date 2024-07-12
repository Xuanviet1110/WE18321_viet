<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{ route('product.addProduct') }}">Them moi</a>

    <h3>Danh sachs sản phẩm</h3>
    <form action="{{ route('product.searchProduct') }}" method="GET">
    <input type="text" name="search_term" placeholder="Tìm kiếm sản phẩm..." />
    <button type="submit">Tìm kiếm</button>
</form>
    <table border="1" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>category </th>
                <th>price</th>
                <th>view</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listProduct as $value)
            <tr>
            <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->category_name }}</td>
                <td>{{ $value->price }}</td>
                <td>{{ $value->view }}</td>
                <td>
                <a class="btn btn-primary" href="{{ route('product.updateProduct',$value->id)}}">Chỉnh sửa</a>
                    <a class="btn btn-danger" href="{{ route('product.deleteProduct',$value->id)}}">Xoa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>