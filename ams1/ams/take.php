<?php
  if (isset($_POST)) {
   if (isset($_POST['date'])){
    $d = $_POST['date'];
    $date = "99_99_99";
    $date[0]=$d[8];
    $date[1]=$d[9];
    $date[2]="_";
    $date[3]=$d[5];
    $date[4]=$d[6];
    $date[5]="_";
    $date[6]=$d[2];
    $date[7]=$d[3];
    $hour = $_POST['hour'];
  }
  else {
    $date = $_POST['rdate'];
    $hour = $_POST['rhour'];
  }
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
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
          <a class="nav-link" href="aview.php">View Attendance</a>
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
    // date_default_timezone_set('Asia/Kolkata');
    // $date = date('d_m_Y_h_i', time());
    // $sql0 = "ALTER TABLE 20is520_attendance ADD $date int(1)";
    // mysqli_query($conn,$sql0);
    $sql1 = "select * from 20is520_attendance";
    $res1 = mysqli_query($conn,$sql1);
  ?>
    <form action="update.php" method="post">
    <input type="hidden" name="date" value="<?php echo $date ?>">
    <input type="hidden" name="hour" value="<?php echo $hour ?>">
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
      <th scope="col"><?php echo $date."_".$hour;?>(check if attended)</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $roll=1;
        while ($row = mysqli_fetch_row($res1))
        {
    ?>
          <tr>
          <th scope="row"><?php echo $roll; ?></th>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td>
              <!-- <input type="hidden" name="att[]" value="0" unchecked> -->
              <input type="checkbox" name="att[]" value="1" checked>
              <input type="hidden" name="att[]" value="0">
            </td>
          </tr>
      <?php
      $roll=$roll+1;
      }
    ?>
  </tbody>
</table>
</div>
<div class="submit">
<input class="btn" type="submit" name="submit" value="Submit">
</div>
<div >
  <br>
</div>
</form>
<hr>
<div class="foot">
Attendance Management System
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
