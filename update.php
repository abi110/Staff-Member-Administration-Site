<?php
    var_dump($_POST);
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $position = $_POST['Position'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "staff";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $statement = "UPDATE staffmembers SET 'Name' = ['$name'], 'Email' = ['$email'], 'Position'= ['$position'] WHERE 'Name' = ['$name']";

mysqli_query($conn, $statement);
?>