<?php 
    session_start();

    if(isset($_POST['submit'])){
        $invalidEmail = '';
        $invalidPassword = '';

        if($_POST['email'] === 'Varun' and $_POST['password'] === '123'){
            $_SESSION['isLoggedIn'] = true;
            header('Location:index.php');
        }else{
            $invalidEmail = 'Wrong Email';
            $invalidPassword = 'Wrong Password';
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <?php 
            if(isset($invalidEmail) and strlen($invalidEmail) > 0) echo('<p style="color:red; font-size:10px">Invalid Email</p>');
        ?>
        <input type="text" name="email" value=""><br>
        Varun
        <?php 
            if(isset($invalidPassword) and strlen($invalidPassword) > 0) echo('<p style="color:red; font-size:10px">Invalid Password</p>');
        ?>
        <input type="password" name="password" value=""><br>
        123
        <input type="submit" name="submit">
    </form>
</body>
</html>