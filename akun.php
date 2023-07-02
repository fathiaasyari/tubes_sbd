<?php 
 
    $conn = mysqli_connect("localhost","root","","emisi");
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
 
    <title>Account</title>
</head>
<body>
    
    <div class="container">
        <div class="d-grid gap-2" >
            <button class="btn btn-primary" type="button"><a href="index.php" style="color: white">HOME</a></button>
            <br>
        </div>
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Info Akun</div>
            <div class="card-body">
                <h3 class="card-title"><?= $_SESSION['username']; ?></h3>
                <p class="card-text">Email : <?= $_SESSION['email']; ?></p>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg"><a href="logout.php" style="color: white">Logout</a></button>
        <br><br>
        <button type="button" class="btn btn-primary btn-lg"><a href="update_pw.php" style="color: white">Ubah Password</a></button>
        <br><br>
        <button type="button" class="btn btn-primary btn-lg"><a href="delete_akun.php" style="color: white">Hapus Akun</a></button>
    </div>
</body>
</html>