<?php

   if(isset($_POST['Course_code']) && isset($_POST['FID']) && isset($_POST['Faculty_name']) ){
    
    $Course_code=$_POST['Course_code'];
    // $Course_name=$_POST['Course_name'];
    // $Sem=$_POST['Sem'];
    // $Department=$_POST['Department'];
    $Faculty_id=$_POST['FID'];
    $Faculty_name=$_POST['Facultyname'];

    $conn = new mysqli("localhost", "root", "", "attendance_management_system");

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

     $sql0 = "UPDATE `coursetable` SET `FID`=$Faculty_id WHERE Course_code = '$Course_code';";
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