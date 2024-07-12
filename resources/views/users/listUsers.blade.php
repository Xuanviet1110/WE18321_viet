<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('users.addUsers') }}">Them moi</a>
    <h3>Danh sachs users</h3>
    <table border="1" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phòng ban</th>
                <th>Ten don vi</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listUsers as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phongban_id }}</td>
                <td>{{ $value->ten_donvi }}</td>
                
                <td>
                    <a href="{{ route('users.deteleUser',$value->id)}}">Xoa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>