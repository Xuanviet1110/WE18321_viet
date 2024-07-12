<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('users.addPostUsers') }}" method="POST">
        @csrf
        <label for="ten">Ten:</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label>
        <input type="text" name="emailUser"><br>
        <label for="">Phong ban</label>
        <select name="phongbanUser" id="">
            @foreach ($phongban as $value)
            <option value="{{ $value->id}}">{{ $value->ten_donvi }}</option>
            @endforeach
        </select><br>
        <label for="">Tuoi</label>
        <input type="text" name="tuoiUser"><br>
        <button>Them moi</button>
    </form>
</body>
</html>