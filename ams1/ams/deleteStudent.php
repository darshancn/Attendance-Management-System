<?php

   if(isset($_POST['USN']) && isset($_POST['Studentname'])){

    $USN=$_POST['USN'];
    $Student_name=$_POST['Studentname'];

    $conn = new mysqli("localhost", "root", "", "attendance_management_system");

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql0 = "DELETE FROM `20is520_attendance` WHERE USN = '$USN';"; 

  
    try{
        $res0=mysqli_query($conn,$sql0);
            $sql1 ="DELETE FROM `student_details` WHERE USN = '$USN' ;";
            $res1=mysqli_query($conn,$sql1);
        
    }
    catch(Exception $e){
        echo "$e";
        header('Location: InsertUnsuccess.html');
    }

   if($res0)
            {
                echo "Login Successfull !!!";
                header('Location:deleteSuccess.html');
                exit;
            }
            else{
                echo "Invaild Password !!!";
                header('Location: deleteUnsuccess.html');
            }
}
else{
    echo "post unsucsseful";
}
?>