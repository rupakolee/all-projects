<?php
$db_host="localhost";
$db_user="root";
$db_password='';
$db_name="T.U.";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
if($result===false) {
    echo mysqli_error($conn);
}
else {
    $records = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($records as $record): ?>
        <li>id: <?=$record['id'];?></li>
        <li>name: <?=$record['name'];?></li>
        <li>address: <?=$record['address'];?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>