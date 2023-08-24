<?php
$conn = mysqli_connect('localhost','root','','attendance_management_system');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST)) {
  $Roll = $_POST['rno'];
  $P = $_POST['p'];
  $field = $_POST['date'];
  // $date = "99_99_99";
  // $date[0] = $field[0];
  // $date[1] = $field[1];
  // $date[2] = $field[2];
  // $date[3] = $field[3];
  // $date[4] = $field[4];
  // $date[5] = $field[5];
  // $date[6] = $field[6];
  // $date[7] = $field[7];
  // $hour = $field[9];
  if ($P == 1){
    if(($r = ($res = mysqli_query($conn,"select $field from 20is520_attendance where Roll_no = $Roll;")) ->fetch_array()[0]) != 1){
        $sql1 = "UPDATE `20is520_attendance` SET $field = '1' WHERE Roll_no = $Roll;";
        mysqli_query($conn,$sql1);
        $sql2 = "select Total_attendance from 20is520_attendance where Roll_no=$Roll;";
        $res2 = mysqli_query($conn,$sql2);
        $totalattendence = $res2->fetch_array()[0];
        $totalattendence+=1;
        $sql3 = "UPDATE 20is520_attendance SET Total_attendance = $totalattendence where Roll_no=$Roll;";
        mysqli_query($conn,$sql3);
        $sql4="select * from 20is520_attendance where Roll_no=$Roll;";
        $res4=mysqli_query($conn,$sql4);
        $col=mysqli_num_fields($res4);
        $col=$col-5;
        $attendence_percentage = 100*$totalattendence/$col;

        $sql5 = "UPDATE 20is520_attendance SET Attendance_Percentage= $attendence_percentage where Roll_no=$Roll;";
        mysqli_query($conn,$sql5);
      }
}

else {
  if(($r =($res = mysqli_query($conn,"select $field from 20is520_attendance where Roll_no = $Roll;"))->fetch_array()[0]) != 0){
    $sql1 = "UPDATE `20is520_attendance` SET $field = '0' WHERE Roll_no = $Roll;";
    mysqli_query($conn,$sql1);
    $sql2 = "select Total_attendance from 20is520_attendance where Roll_no=$Roll;";
    $res2 = mysqli_query($conn,$sql2);
    $totalattendence = $res2->fetch_array()[0];
    $totalattendence-=1;
    $sql3 = "UPDATE 20is520_attendance SET Total_attendance = $totalattendence where Roll_no=$Roll;";
    mysqli_query($conn,$sql3);
    $sql4="select * from 20is520_attendance where Roll_no=$Roll;";
    $res4=mysqli_query($conn,$sql4);
    $col=mysqli_num_fields($res4);
    $col=$col-5;
    $attendence_percentage = 100*$totalattendence/$col;

    $sql5 = "UPDATE 20is520_attendance SET Attendance_Percentage= $attendence_percentage where Roll_no=$Roll;";
    mysqli_query($conn,$sql5);
}
}
}
// $roll = 1;
// $sqllen = "SELECT COUNT(*) FROM 20is520_attendance;";
// $reslen = mysqli_query($conn,$sqllen);
// $length = $reslen->fetch_array()[0];
// for($i=0;$i<$length;$roll++){
// $sql2 = "select Total_attendance from 20is520_attendance where Roll_no=$roll;";
// $res2 = mysqli_query($conn,$sql2);
// $totalattendence = $res2->fetch_array()[0];
//
// //update totalAttendence ::
//
// $totalattendence-=1;
// $sql3 = "UPDATE 20is520_attendance SET Total_attendance = $totalattendence where Roll_no=$roll;";
// mysqli_query($conn,$sql3);
// $i=$i+1;

header("Location: aview.php");
 ?>
