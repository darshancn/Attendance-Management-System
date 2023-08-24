<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
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
          <a class="nav-link" href="date.php">Take Attendance</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CIE
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="tcie.php">Update CIE</a></li>
            <li><a class="dropdown-item" href="cview.php">View CIE details</a></li>
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
date_default_timezone_set('Asia/Kolkata');
$date = date('d_m_Y_h_i', time());
// $sql0 = "ALTER TABLE 20is520_attendance ADD $date int(1)";
// mysqli_query($conn,$sql0);
$sql1 = "select * from 20is520_attendance";
$res1 = mysqli_query($conn,$sql1);
$sql = "SHOW COLUMNS FROM 20is520_attendance";
$result = mysqli_query($conn,$sql);
$count=mysqli_num_fields($res1);
?>
<div class="container-fluid">
  <br>
  <br>
<h5>Course code : 20IS520</h5>
<br>
<h5>Course name : Database Management Systems</h5>
<br>
<h5>Course Instructor : Prathiba R J </h5>
<br>
<table class="table" id="tb">
<thead>
<tr>
  <?php
  while($row = mysqli_fetch_array($result)){
    ?> <th><?php echo $row['Field'];
    if(!($row['Field'] == 'Roll_no' || $row['Field'] == 'USN' || $row['Field'] == 'S_name' || $row['Field'] == 'Total_attendance' || $row['Field'] == 'Attendance_Percentage'))
    {
      ?>
      <form class="" action="d.php" method="post">
          <input type="submit" name="export" value="Edit" class="btn btn-secondary">
          <input type="hidden" name="date" value="<?php echo $row['Field']; ?>">
      </form>
      <?php
    }
    ?> </th>
  <?php
  }
  ?>
  <th scope="col"></th>
</tr>
</thead>
<tbody>
<?php
   $roll=1;
    while ($row1 = mysqli_fetch_row($res1))
    {
?>
      <tr>
      <th scope="row"><?php echo $roll; ?></th>
      <td><?php echo $row1[1]; ?></td>
      <td><?php echo $row1[2]; ?></td>
      <td><?php echo $row1[3]; ?></td>
      <td><?php echo $row1[4]; ?></td>
      <?php
        $c =5;
        $d= $count-5;
        while($d>0)
        {
          ?>
          <td><?php echo $row1[$c];$d--;$c++; ?>
          </td>
          <?php
        }
       ?>
       </form>
      </tr>
  <?php
  $roll=$roll+1;
  }
?>
</tbody>
</table>
</div>
<div >
<br>
</div>
<script type="text/javascript">
    var clockElement = document.getElementById('clock');

    function clock() {
        clockElement.textContent = new Date().toLocaleString();
    }

    setInterval(clock, 1000);
    </script>
<form class="" action="exp.php" method="post">
  <center>
    <input type="submit" name="export" value="Export" class="btn btn-secondary">
  </center>
</form>
<br>
<br>
  </body>
</html>
