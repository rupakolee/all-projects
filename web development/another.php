<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>
        <input type="checkbox" name="box" id="" value="Nepali">Nepali</br>
        </label>
        <label>
            <input type="checkbox" name="box" id="" value="Nanana">Nanana</br>
        </label>
        <label>
            <input type="checkbox" name="box" id="" value="Social">Social</br>
        </label>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])) {
        if (isset($_POST['box'])) {
            echo $_POST['box'];
        }
    }
        
    ?>
</body>
</html>