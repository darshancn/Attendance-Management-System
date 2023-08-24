<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="true.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="validation">

      <div class="popup" id="popup">
        <br>
        <br>
        <h3>Edit Attendance</h3 >
        <br>
        <!-- <p>Click OK to continue</p>
        <a href="subjects.php">

    <button class="true">OK</button>
  </a> -->
  <?php
  $conn = mysqli_connect('localhost','root','','attendance_management_system');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
   if (isset($_POST)) {
    $field = $_POST['date'];
   }
   ?>
  <form class="" action="drop.php" method="post">
    <label for="rno">Roll number</label>
    <input type="text" name="rno" value=""><br>
    <br>
    <label for="p">PRESENT / ABSENT </label>
    <select class="" name="p">
      <option value="1">Present</option>
      <option value="2">Absent</option>
    </select>
    <input type="hidden" name="date" value="<?php echo $field; ?>">
    <br>
    <br>
    <input class="btn-secondary" type="submit" name="submit" value="   OK   ">
  </form>
      </div>
    </div>
