<?php

   if(isset($_POST['Course_code']) && isset($_POST['Course_name']) && isset($_POST['Sem']) && isset($_POST['Department']) ){
    
    $Course_code=$_POST['Course_code'];
    $Course_name=$_POST['Course_name'];
    $Sem=$_POST['Sem'];
    $Department=$_POST['Department'];

    $conn = new mysqli("localhost", "root", "", "attendance_management_system");

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

     $sql0 = "DELETE FROM `coursetable` WHERE Course_code = '$Course_code' and Sem = '$Sem';";

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