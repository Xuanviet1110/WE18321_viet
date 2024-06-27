<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chao mn</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
        </thead>
    
    <tbody>
    <?php foreach($abc as $value): ?>
<tr>
    <td><?php echo $value['id']?></td>
    <td><?php echo $value['name']?></td>
</tr>
<?php endforeach; ?>
    </tbody>
        </table>
</body>
</html>