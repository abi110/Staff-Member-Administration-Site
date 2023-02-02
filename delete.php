<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Address Book</title>
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
    </style>
  </head>
  <body>
    <h1>Delete Staff</h1>
    <p>Delete Staff Member - Staff Database</p>
    <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Position</th>
    </tr>
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
      echo '<tr>';
      echo '<td>' . $row['Name'] . '</td>';
      echo '<td>' . $row['Email'] . '</td>';
      echo '<td>' . $row['Position'] . '</td>';
      echo '</tr>';
    }
    ?>
    </table>
    <p>Confirm Deletion</p>
    <form action="remove.php" method="post">
      <input type="hidden" name="Name" value="<?php echo $staffID; ?>" />
      <input type="submit" value="Delete" />
      </form>
    <p><a href="index.php">Back to home</a></p>
    </p>
  </body>
</html>