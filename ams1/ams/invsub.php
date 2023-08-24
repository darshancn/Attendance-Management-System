<?php
$conn = mysqli_connect('localhost','root','','attendance_management_system');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST)) {
  $e1 = $_POST["e1"];
  $e2 = $_POST["e2"];
  $e3 = $_POST["e3"];
  $e4 = $_POST["e4"];
  $e5 = $_POST["e5"];
  $USN = $_POST["usn"];
  $sql0 = "update 20is520_cie set E1 = '$e1', E2 = '$e2', E3 = '$e3', E4 = '$e4', E5 = '$e5' where USN= '$USN';";
  mysqli_query($conn,$sql0);
  $CIE = ($e1+$e2+$e3+$e4+$e5)/2;
  $sql1 = "update 20is520_cie set CIE = '$CIE' where USN= '$USN';";
  mysqli_query($conn,$sql1);
  if($CIE>=25)
  {
    $sql2 = "update 20is520_cie set Eligibility = 'E' where USN= '$USN';";
    mysqli_query($conn,$sql2);
  }
  else {
    $sql2 = "update 20is520_cie set Eligibility = 'NE' where USN= '$USN';";
    mysqli_query($conn,$sql2);
  }
}
header("Location: tcie.php");
?>
