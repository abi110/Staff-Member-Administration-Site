<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Address Book</title>
  </head>
  <body>
    <h1>Address Book</h1>
    <p>Staff Database</p>
    <?php
      if(!isset($_POST['position'])) {
        $errorMessage= "<li>You forgot to select a Position!</li>";}
      
      ?>
    <p><a href="add-staff.php">Add a new staff member</a></p>
    <p>
      <a href="view-staff.php">View All</a>
      <form action='viewselected.php' method='POST'>
        <label for='position'>Filter by Position:</label><br>
        <select name='position'>
          <option value="">Select Position</option>
          <option value="Lecturer">Lecturer</option>
          <option value="Senior Lecturer">Senior Lecturer</option>
          <option value="Professor">Professor</option>
          <option value="Reader">Reader</option>
        <br>
        <input type='submit' value='Submit'/>
      </form>
    </p>
  </body>
</html>
