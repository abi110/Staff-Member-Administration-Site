<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "staff";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $statement = "DELETE FROM `staffmembers` WHERE `Name` = '{$_POST['Name']}'";

mysqli_query($conn, $statement);
?>