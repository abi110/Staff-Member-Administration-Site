<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
      <h1>Address Book (PHP Output - view selected staff)</h1>
      <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Position</th>
      <th>Options</th>
    </tr>
    <?php
      //Establish connection
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "staff";
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      $statement = "SELECT * FROM staffmembers WHERE Position='{$_POST['position']}'";
      // Perform query
      $result = mysqli_query($conn, $statement);
      while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'. $row['Name'] .'</td>';
            echo '<td>'. $row['Email'] .'</td>';
            echo '<td>'. $row['Position'] .'</td>';
            echo '<td><a href="edit.php?id='.$row['Name'].'">Edit</a> | <a href="delete.php?id='.$row['Name'].'">Delete</a></td>';
            echo '</tr>';
        } 
      ?>
  </table>
      
      <p><a href="index.php">Back to home</a></p>
  </body>
</html>
