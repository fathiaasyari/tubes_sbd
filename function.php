<?php
session_start();
function transportMode(){
    $conn = mysqli_connect("localhost","root","","emisi");
    $sql = "SELECT * from transportationmodes order by mode_name ASC";

    // buat query
    $result = $conn->query($sql);

    // eksekusi query
    $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}

function userTrips(){
    //buat koneksi
    $conn = mysqli_connect("localhost","root","","emisi");
    $user_id = $_SESSION['user_id'];
    //buat string sql
    $sql = "SELECT
                trips.date, 
                users.username, 
                transportationmodes.mode_name, 
                trips.distance, 
                trips.energy_btu
            FROM
                transportationmodes
                INNER JOIN
                trips
                ON 
                    transportationmodes.mode_id = trips.mode_id
                INNER JOIN
                users
                ON 
                    users.user_id = trips.user_id
            WHERE
                users.user_id = $user_id;
            ";

    // buat query
    $result = $conn->query($sql);

    // eksekusi query
    $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}
