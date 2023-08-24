<?php

    if(isset($_POST['Facultyid']) && isset($_POST['password'])){
        $Faculty_id=$_POST['Facultyid'];
        $password=$_POST['password'];

        $conn = new mysqli("localhost", "root", "", "attendance_management_system");

        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql0 = "select * from facultytable where Faculty_id = $Faculty_id ;";
        $res0=mysqli_query($conn,$sql0);

        if(mysqli_num_rows($res0)>0){
            
            $sql2 = "select * from facultytable where Faculty_id = $Faculty_id and Password = '$password' and Faculty_name = 'Admin';";
            $res2=mysqli_query($conn,$sql2);
              if(mysqli_num_rows($res2)>0)
            {
                echo "Login Successfull !!!";
                session_start();
                $_SESSION['Facultyid']=$Faculty_id;
                header('Location: admin.html');
                exit;
            }
            else{
                echo "Invaild Password !!!";
                header('Location: false.html');
            }

        }
        else{
            echo "Invalid Faculty ID ???";
            header('Location: false.html');
        }
    }
?>
