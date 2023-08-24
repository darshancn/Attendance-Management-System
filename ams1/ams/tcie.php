<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <style>
    .input-box{
      width:80px
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Attendance Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="subjects.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cview.php">View CIE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Attendance
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="date.php">Take Attendance</a></li>
            <li><a class="dropdown-item" href="aview.php">View Attendance details</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" ><span id="clock"></span></a>
        </li>
    </div>
  </div>
</nav>
<br>
<?php
$conn = mysqli_connect('localhost','root','','attendance_management_system');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "select * from 20is520_attendance";
$res1 = mysqli_query($conn,$sql1);
?>
<div class="container">
  <br>
  <br>
<h5>Course code : 20IS520</h5>
<br>
<h5>Course name : Database Management Systems</h5>
<br>
<h5>Course Instructor : Prathiba R J </h5>
<br>
<table class="table">
<thead>
<tr>
  <th scope="col">Roll</th>
  <th scope="col">USN</th>
  <th scope="col">Name</th>
  <th scope="col">E1</th>
  <th scope="col">E2</th>
  <th scope="col">E3</th>
  <th scope="col">E4</th>
  <th scope="col">E5</th>
  <th scope="col">Submit</th>
</tr>
</thead>
<tbody>
<?php
    while ($row = mysqli_fetch_row($res1))
    {
      $event1 = "SELECT E1 FROM 20is520_cie WHERE USN = '$row[1]' ;";
      $er1 = mysqli_fetch_row(mysqli_query($conn,$event1));
      $event2 = "SELECT E2 FROM 20is520_cie WHERE USN = '$row[1]' ;";
      $er2 = mysqli_fetch_row(mysqli_query($conn,$event2));
      $event3 = "SELECT E3 FROM 20is520_cie WHERE USN = '$row[1]' ;";
      $er3 = mysqli_fetch_row(mysqli_query($conn,$event3));
      $event4 = "SELECT E4 FROM 20is520_cie WHERE USN = '$row[1]' ;";
      $er4 = mysqli_fetch_row(mysqli_query($conn,$event4));
      $event5 = "SELECT E5 FROM 20is520_cie WHERE USN = '$row[1]' ;";
      $er5 = mysqli_fetch_row(mysqli_query($conn,$event5));
?>
      <tr>
      <th scope="row"><?php echo $row[0]; ?></th>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
      <form action="invsub.php" method="post">
        <td><input type="text" name="e1" class="input-box" placeholder="<?php echo $er1[0]; ?>" required></td>
        <td><input type="text" name="e2" class="input-box" placeholder="<?php echo $er2[0]; ?>" required></td>
        <td><input type="text" name="e3" class="input-box" placeholder="<?php echo $er3[0]; ?>" required></td>
        <td><input type="text" name="e4" class="input-box" placeholder="<?php echo $er4[0]; ?>" required></td>
        <td><input type="text" name="e5" class="input-box" placeholder="<?php echo $er5[0]; ?>" required></td>
        <td><input class="btn-secondary" type="submit" name="sub" value="  OK  "></td>
        <input type="hidden" name="usn" value="<?php echo $row[1]; ?>">
      </tr>
      </form>
  <?php
  }
?>
</tbody>
</table>
<br>
</div>


<script type="text/javascript">
    var clockElement = document.getElementById('clock');

    function clock() {
        clockElement.textContent = new Date().toLocaleString();
    }

    setInterval(clock, 1000);
</script>
  </body>
</html>
