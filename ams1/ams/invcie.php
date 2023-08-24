<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/invciestyle.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
  ?>
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
        <a class="nav-link" href="tcie.php">Take CIE</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Attendance
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="date.php">Take Attendance</a></li>
          <li><a class="dropdown-item" href="aview.php">View Attendance Details</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" ><span id="clock"></span></a>
      </li>
  </div>
</div>
</nav>
<br>
<br>
<?php
if (isset($_POST)) {
  $USN = $_POST['usn'];
}
?>
<div class="box1">
  <h5>Course code : 20IS520</h5>
  <br>
  <h5>Course name : Database Management Systems</h5>
  <br>
  </div>
  <div class="box2">
  <h3 >Enter CIE details of :    <?php
  echo $USN;
  $sql0 = "Select S_name from 20is520_attendance where USN = '$USN';";
  $res = mysqli_query($conn,$sql0);
  $row = mysqli_fetch_row($res);
  echo " ($row[0])";
  ?></h3>
</div>
<br>
<div class="rounded-5 box3">
  <form action="invsub.php" method="post">
    <p></p>
  <div class="mb-3">
    <label for="e1" class="form-label"></label>
    <input type="text" class="form-control" name="e1" id="e1" placeholder="E1" required>
  </div>
  <div class="mb-3">
    <label for="e2" class="form-label"></label>
    <input type="text" class="form-control" name="e2" id="e2" placeholder="E2" required>
  </div>
  <div class="mb-3">
    <label for="e3" class="form-label"></label>
    <input type="text" class="form-control" name="e3" id="e3" placeholder="E3" required>
  </div>
  <div class="mb-3">
    <label for="e4" class="form-label"></label>
    <input type="text" class="form-control" name="e4" id="e4" placeholder="E4" required>
  </div>
  <div class="mb-3">
    <label for="e5" class="form-label"></label>
    <input type="text" class="form-control" name="e5" id="e5" placeholder="E5"required>
  </div>
  <input type="hidden" name="usn" value="<?php echo $USN ?>">
  <div class="submit">
  <input class="btn" type="submit" name="submit" value="Submit">
  </div>
</form>
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
