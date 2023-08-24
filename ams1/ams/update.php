<?php
$conn = mysqli_connect('localhost','root','','attendance_management_system');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// date_default_timezone_set('Asia/Kolkata');
// $date = date('d_m_y_h_i', time());
$date = $_POST['date'];
$hour = $_POST['hour'];
$newdate = $date."_".$hour;
$sql0 = "ALTER TABLE 20is520_attendance ADD $newdate int(1) ";
mysqli_query($conn,$sql0);


$roll = 1;

if (isset($_POST)) {

  $attendenceStatus = $_POST['att'];
  $length = count($attendenceStatus);
  for($i=0;$i<$length;$roll++){

    //echo $roll;
    if($attendenceStatus[$i]==1 && $attendenceStatus[$i+1]==0)
    {
      //update attendance ::

      $sql1 = "UPDATE 20is520_attendance SET $newdate = $attendenceStatus[$i] where Roll_no=$roll;";
      mysqli_query($conn,$sql1);

      //fetch total attenddence ::

      $sql2 = "select Total_attendance from 20is520_attendance where Roll_no=$roll;";
      $res2 = mysqli_query($conn,$sql2);
      $totalattendence = $res2->fetch_array()[0];

      //update totalAttendence ::

      $totalattendence+=1;
      $sql3 = "UPDATE 20is520_attendance SET Total_attendance = $totalattendence where Roll_no=$roll;";
      mysqli_query($conn,$sql3);

      $i=$i+2;
    }
    else{

      //update attendance ::

      $sql1 = "UPDATE 20is520_attendance SET $newdate = $attendenceStatus[$i] where Roll_no=$roll;";
      mysqli_query($conn,$sql1);

      //fetch total attenddence ::

      $sql2 = "select Total_attendance from 20is520_attendance where Roll_no=$roll;";
      $res2 = mysqli_query($conn,$sql2);
      $totalattendence = $res2->fetch_array()[0];

      $i=$i+1;
    }

     //update attendence_percentage ::
     $sql4="select * from 20is520_attendance where Roll_no=$roll;";
     $res4=mysqli_query($conn,$sql4);
     $col=mysqli_num_fields($res4);
     $col=$col-5;
     $attendence_percentage = 100*$totalattendence/$col;

     $sql5 = "UPDATE 20is520_attendance SET Attendance_Percentage= $attendence_percentage where Roll_no=$roll;";
     mysqli_query($conn,$sql5);
}
  header("Location: aview.php");
}
?>
