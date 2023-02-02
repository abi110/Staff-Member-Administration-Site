<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Address Book</title>
  </head>
  <body>
    <h1>Add Staff</h1>
    <p>Add Staff Member - Staff Database</p>
    <?php;
        $staffID = $_GET["id"];
        echo($staffID)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "staff";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["Name"])) {
                $nameErr = "Name is required";} 
            else {
                $name = test_input($_POST["Name"]);}
            if (empty($_POST["Email"])) {
                $emailErr = "Email is required";}
            else {
                $email = test_input($_POST["Email"]);}
            if (empty($_POST["Position"])) {
                $positionErr = "Position is required";}
            else {
                $position = test_input($_POST["Position"]);}
        }
        ?>

    <form action='insert.php' method='POST'>
        Name: <input type='text' name='Name' required/><br>
        Email: <input type='text' name='Email' required/><br>
        Position: <input type='text' name='Position' required/><br>
        <input type='submit' value='Submit'/>
    </form>
    <p><a href="index.php">Back to home</a></p>
    </p>
  </body>
</html>