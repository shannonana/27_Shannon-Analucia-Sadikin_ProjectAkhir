<?php

session_start();//

include 'koneksi.php';//

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['full_name'] = $user['full_name'];
        header("Location: data.php");

    } else {
        echo "<script>alert('Wrong username or password!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class='head'>
        <header>
            <div class="nav-container">
                <div class="logo">Library</div>
                <nav>
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="login.php" class="login-btn">Login</a>
                </nav>
            </div>
        </header>
    </div>
    <div class="container">
        <h2> Login </h2>
        <form method="post">
            <fieldset>
                <table>
                    <!-- username -->
                    <tr>
                        <td><label for="username">Username </label></td>
                        <td>:</td>   
                        <td><input type="text" name="username" placeholder="user"></td><br>
                    </tr>
    
                    <!-- password -->
                    <tr>
                        <td><label for="password">Password </label></td>
                        <td>:</td>
                        <td><input type="password" name="password" placeholder="pass"></td><br>
                    </tr>
    
                    <!-- button -->
                    <tr>
                        <td colspan="3" style="text-align:center">
                            <button type="submit" name="login">LOGIN</button>
                            <p>Don't have an account? <a href="register.php">Register here!</a></p>
                            <a href='index.php'>back to home page</a>   
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_GET['registered'])) {
    echo "<script>alert('Registration successful! Please log in.');</script>";
}
?>
