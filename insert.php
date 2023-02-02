<?php
    $location = $_POST['Location'];
    $email = $_POST['Email'];
    $position = $_POST['Position'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "staff";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $statement = "INSERT INTO staffmembers('Name', 'Email`, `Position`) VALUES ('$name', '$email', '$position')";
    mysqli_query($conn, $statement);
?>
