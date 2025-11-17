<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO login (full_name, username, email, year, password) 
              VALUES ('$full_name', '$username', '$email', '$year', '$password')";
    
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: login.php?registered=1");
        exit();
    } else {
        echo "Gagal mendaftar: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <div class='container'>
        <h2>Register</h2>
        <form method="post">
            <table>
                <tr>
                    <td><label for="full_name">Full Name</label></td>
                    <td>:</td>
                    <td><input type="text" name="full_name" placeholder="Name" required></td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="Username" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td><input type="email" name="email" placeholder="Email" required></td>
                </tr>
                <tr>
                    <td><label for="year">Year of Birth</label></td>
                    <td>:</td>
                    <td><input type="date" name="year" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align:center">
                        <button type="submit" name="register">REGISTER</button>
                    </td>
                </tr>
            </table>
        </form>
        <p>Already have an account? <a href='login.php'>Login here</a></p>
        <a href='index.php'>Back to home page</a>
    </div>
</body>
</html>
