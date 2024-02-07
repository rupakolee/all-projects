<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Datalist tag in html</h1>
    <form method="post">
        <label for="country">Country</label>
        <input id="country" name="country" list="countries">
        <datalist id="countries" name="countries">
        <option value="Nepal">Nepal</option>
        <option value="India" disabled>India</option>   <!-- "disabled doesn't pass the data" -->
        <option value="China">China</option>
    </datalist>
    <input type="submit" value="Submit" name="submit">
    <br>
    <input type="text" readonly value="read-only">
</form>
        <?php

        if (isset($_POST['submit'])) {
            if (isset($_POST['country'])) {
                echo "{$_POST['country']}<br>";
            }
        }

        ?>

</body>
</html>