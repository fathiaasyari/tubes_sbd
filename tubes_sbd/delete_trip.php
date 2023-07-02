<?php 
    $conn = mysqli_connect("localhost","root","","emisi");
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    if(isset($_POST['delete_trip'])){
        $user_id = $_SESSION['user_id'];

        $sql = "DELETE FROM trips WHERE user_id = '$user_id'";

        $result = mysqli_query($conn,$sql);

        header("Location: akun.php");
    }
?>