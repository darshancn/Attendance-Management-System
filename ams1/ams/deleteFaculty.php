<?php

   if(isset($_POST['FID']) && isset($_POST['Facultyname'])){

    $Faculty_id=$_POST['FID'];
    $Faculty_name=$_POST['Facultyname'];

    $conn = new mysqli("localhost", "root", "", "attendance_management_system");

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql0 = "DELETE FROM `facultytable` WHERE Faculty_id = $Faculty_id and Faculty_name= '$Faculty_name' ;";
    try {
        $res0=mysqli_query($conn,$sql0);
      }
      
      catch(Exception $e) {
        header('Location: deleteUnsuccess.html');
      }
      
    if($res0)
            {
                echo "Login Successfull !!!";
                header('Location:deleteSuccess.html');
                exit;
            }
            else{
                echo "Invaild Password !!!";
                header('Location:deleteUnsuccess.html');
            }
}
else{
    echo "post unsucsseful";
}
?>