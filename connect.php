
<?php #connect to db
function OpenConn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "staff";
    $conn= mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed");
    }
    elseif ($conn) {
        echo("Connected Successfully");
    }
    else{
        echo ("Unknown Error");
    }
}

?>


