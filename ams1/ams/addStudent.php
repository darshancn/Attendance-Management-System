<?php

   if(isset($_POST['USN']) && isset($_POST['Student_name']) && isset($_POST['Sem']) && isset($_POST['Dept'])){
    
    $USN=$_POST['USN'];
    $Student_name=$_POST['Student_name'];
    $Sem=$_POST['Sem'];
    $Department=$_POST['Dept'];

    $conn = new mysqli("localhost", "root", "", "attendance_management_system");

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql0 = "INSERT INTO `student_details`(`USN`, `S_name`, `Sem`, `Dept`) VALUES ('$USN','$Student_name',$Sem,'$Department');";

    try{
        $res0=mysqli_query($conn,$sql0);
    
        if($Sem==5){
            $sql1 = "INSERT INTO `20is520_attendance`(`USN`, `S_name`) VALUES ('$USN','$Student_name');";
            $res1=mysqli_query($conn,$sql1);
        }
    }
    catch(Exception $e){
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