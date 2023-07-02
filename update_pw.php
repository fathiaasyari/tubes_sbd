<?php 
 
    $conn = mysqli_connect("localhost","root","","emisi");
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    if (isset($_POST['submit'])) {
        $email = $_SESSION['email'];
        $lpassword = md5($_POST['lpassword']);
        $npassword = md5($_POST['npassword']);
        $cpassword = md5($_POST['cpassword']);
        $password = $_SESSION['password'];

        if($lpassword == $password){
            if ($npassword == $cpassword) {
                $query = "UPDATE users SET password='$npassword' WHERE email='$email'";
                $result = mysqli_query($conn, $query);            
                echo "<script>alert('Password Berhasil Diubah')</script>";
            } else {
                echo "<script>alert('Password Tidak Sesuai')</script>";
            }
        }else{
            echo "<script>alert('Password Lama Tidak Sesuai')</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
 
    <title>Change Password</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="password" placeholder="Password Lama" name="lpassword" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password Baru" name="npassword" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Change</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
    </div>
</body>
</html>