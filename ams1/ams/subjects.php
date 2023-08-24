<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AMS</title>
  <link rel="stylesheet" href="styles1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<?php
      session_start();
      $Facultyid= $_SESSION['Facultyid'];
      $conn = mysqli_connect('localhost','root','','attendance_management_system');
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql="select Faculty_name from facultytable where Faculty_id=$Facultyid";
    $res = mysqli_query($conn,$sql);

      ?>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <h1 class="navbar-brand">Attendance Management System</h1>
    <!--<button type="button" class="button.navbar.toggler" name="button"></button>-->


    <ul class="navbar-nav ms-auto">
      <centre><li class="nav-item"><a href="#" class="nav-link">
        <?php
          echo mysqli_fetch_array($res)[0];
        ?>
      </a></li></centre>
      <!-- <li class="nav-item"><a href="#" class="nav-link">Back</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li> -->
      <li class="nav-item"><a href="login.html" class="nav-link">logout</a></li>


    </ul>
  </nav>
  <h1 class="heading">Select your subject</h1>

  <div class="container">

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

    <?php
    $conn = mysqli_connect('localhost','root','','attendance_management_system');
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql0 = "select * from coursetable where FID=$Facultyid";
    $res0 = mysqli_query($conn,$sql0);

    if(mysqli_num_rows($res0)>0){

      while($rowdata=mysqli_fetch_row($res0)){
        $coursecode[]=$rowdata[0];
        $titlearray[]=$rowdata[1];
        $sem[]=$rowdata[3];
        $dept[]=$rowdata[4];

      }
    }

    ?>

  <script type="text/javascript" >

var titlearray=<?php echo json_encode($titlearray); ?>;
var sem =<?php echo json_encode($sem); ?>;
var coursecode=<?php echo json_encode($coursecode); ?>;
var dept=<?php echo json_encode($dept); ?>;
var href=["#","date.php","#","#"];


var dynamic=document.querySelector('.container');
for (var i = 0; i < titlearray.length; i++) {
  var fetch =document.querySelector('.container').innerHTML;
  dynamic.innerHTML = `
  <a class="pqr" href="${href[i]}">
  <div class="boxes">

  <div class="box-content">
        <div class="card-body">
          <h2 class="card-title">${titlearray[i]}</h2>
          <p class="card-text">Course code: ${coursecode[i]}</p>
          <p class="card-text">Sem: ${sem[i]}</p>
          <p class="card-text">Department :${dept[i]}</p>
          </a>
        </div>
      </div>
    </div> ` + fetch;
}
  </script>
</body>

</html>
