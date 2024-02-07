<?php 
$sql = "SELECT * from student";
$result=mysqli_query($conn, $sql);
$record=mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $username=$record['username'];
    $password=$record['password'];

    if(isset($_POST['submit'])) {
        if($_POST['username']==$username && $_POST['password']==$password){
            echo "Login Successful";
        }
        else {
            echo "Incorrect details";
        }
    }
?>
    <div class="container" style="border: 1px solid black; max-width: 400px;">
        <h3>Login Form</h3>
        <form method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Login" name="submit" style="display: block; margin: auto;">
            <div class="opt-text">
                <p style="text-align:center; text-decoration: underline;">Lost your password?</p>
                <p style="text-align:center";><span>Don't have an account?</span> <span  style="text-decoration: underline;">Signup here!</span></p>
            </div>
        </form>
    </div>
</body>
</html>