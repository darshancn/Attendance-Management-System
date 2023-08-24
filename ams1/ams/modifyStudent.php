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

    $sql0 = "UPDATE `student_details` SET `S_name`='$Student_name',`Sem`=$Sem,`Dept`='$Department' WHERE `USN`='$USN';";

    try{
        $res0=mysqli_query($conn,$sql0);
        
        if($Sem==5){
            $sql1 = "UPDATE `20is520_attendance` SET `S_name`='$Student_name' WHERE `USN`='$USN';";
            $res1=mysqli_query($conn,$sql1);
            $sql1 = "UPDATE `20is520_cie` SET `S_name`='$Student_name' WHERE `USN`='$USN';";
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