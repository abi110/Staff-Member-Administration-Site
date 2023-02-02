<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Address Book</title>
  </head>
  <body>
    <h1>Edit Staff</h1>
    <p>Edit Staff Member - Staff Database</p>
    <?php
      //Establish connection
        $staffID = $_GET["id"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "staff";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $statement = "SELECT * FROM staffmembers WHERE Name = '{$staffID}'";
        $result = mysqli_query($conn, $statement);
        // Prepopulate form with existing data
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['Name'];
            $email = $row['Email'];
            $position = $row['Position'];
        }
    ?>
    <form action="update.php" method="post">
      <label for="Name">Name:</label>
      <input type="text" Name="Name" id="Name" value="<?php echo $name; ?>" />
      <br />
      <label for="email">Email:</label>
      <input type="text" name="Email" id="Email" value="<?php echo $email; ?>" />
      <br />
      <label for="position">Position:</label>
      <input type="text" name="Position" id="Position" value="<?php echo $position; ?>" />
      <br />
      <input type="submit" value="Submit" />
      </form>
    <p><a href="index.php">Back to home</a></p>
    </p>
  </body>
</html>