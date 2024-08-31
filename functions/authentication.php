<?php

    session_start();
    include('../config/dbconnection.php');

    if(isset($_POST['register_btn'])) {

        $fname =mysqli_real_escape_string($conn,$_POST['name']);
        $lname =mysqli_real_escape_string($conn,$_POST['name']);
        $email =mysqli_real_escape_string($conn,$_POST['name']);
        $phone =mysqli_real_escape_string($conn,$_POST['name']);
        $dob =mysqli_real_escape_string($conn,$_POST['name']);
        $password =mysqli_real_escape_string($conn,$_POST['name']);
        $cpassword =mysqli_real_escape_string($conn,$_POST['name']);

        $check_email_query = "SELECT * FROM users WHERE email = '$email'";
        $check_email_query_run = mysqli_query($conn,$check_email_query);

        if(mysqli_num_rows($check_email_query_run) > 0){
            $_SESSION['message'] = "Email already exists";
            header("location: ../register.php");
        } else {
            if($password==$cpassword){

                $password = md5($password);
                $insert_query = "INSERT INTO users(fname,lname,email,phone,dob,password) VALUES('$fname','$lname','$email','$phone','$dob','$password')";
                $insert_quert_run = mysqli_query($conn,$insert_query);

                if($insert_quert_run){
                    $_SESSION['message'] = "You are now registered";
                    $_SESSION['name'] = $name;
                    header("location: ../login.php");
                }
                else {
                    $_SESSION['message'] = "Database error";
                    header("location: ../register.php");
                }
    
            } else {
                $_SESSION['message'] = "Passwords does not match";
                header("location: ../register.php");
            }
        }   
    }
?>