<?php

   if(isset($_POST['FID']) && isset($_POST['Facultyname']) && isset($_POST['Password'])){

    $Faculty_id=$_POST['FID'];
    $Faculty_name=$_POST['Facultyname'];
    $password=$_POST['Password'];

    $conn = new mysqli("localhost", "root", "", "attendance_management_system");

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql0 = "UPDATE `facultytable` SET `Faculty_name`='$Faculty_name',`Password`='$password' WHERE Faculty_id = $Faculty_id;";
    

    try {
        $res0=mysqli_query($conn,$sql0);
      }
      
      catch(Exception $e) {
        header('Location: InsertUnsuccess.html');
      }
      
    if($res0)
            {
                echo "Login Successfull !!!";
                header('Location:InsertSuccess.html');
                exit;
            }
            else{
                echo "Invaild Password !!!";
                header('Location: InsertUnsuccess.html');
            }
}
else{
    echo "post unsucsseful";
}
?>