<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>sinh vien</h1>
    <table>
        <thead>
            <th>ten</th>
            <th>nam sinh</th>
            <th>que</th>
        </thead>
    
    <tbody>
    <?php foreach($sv as $value): ?>
<tr>
    <td><?php echo $value['ten']?></td>
    <td><?php echo $value['namsinhvien']?></td>
    <td><?php echo $value['que']?></td>
</tr>
<?php endforeach; ?>
    </tbody>
        </table>
</body>
</html>