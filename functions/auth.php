<?php

    session_start();
    include('../config/dbconnection.php');

    if(isset($_POST['register_btn'])) {

        $fname =mysqli_real_escape_string($conn,$_POST['F_name']);
        $lname =mysqli_real_escape_string($conn,$_POST['L_name']);
        $email =mysqli_real_escape_string($conn,$_POST['Email']);
        $password =mysqli_real_escape_string($conn,$_POST['Password']);
        $cpassword =mysqli_real_escape_string($conn,$_POST['Re-Password']);

        $check_email_query = "SELECT * FROM users WHERE email = '$email'";
        $check_email_query_run = mysqli_query($conn,$check_email_query);

        if(mysqli_num_rows($check_email_query_run) > 0){
            $_SESSION['message'] = "Email already exists";
            header("location: ../register.php");
        } else {
            if($password==$cpassword){

                $insert_query = "INSERT INTO users(fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
                $insert_quert_run = mysqli_query($conn,$insert_query);

                if($insert_quert_run){
                    $_SESSION['message'] = "You are now registered";
                    $_SESSION['name'] = $fname;
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
    } else if(isset($_POST['login_btn'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
        $login_query_run = mysqli_query($conn, $login_query);

        if(mysqli_num_rows($login_query_run) > 0) {
            $_SESSION['auth'] = true;

            $userdata = mysqli_fetch_array($login_query_run);
            $username = $userdata['name'];
            $email = $userdata['email'];

            $_SESSION['auth_user'] = [
                'name' => $username,
                'email' => $email
            ];

            $_SESSION['message'] = "Logged In Successfully";
            header('Location: ../User/vehicle.php');


        } else {
            $_SESSION['message'] = "Invalid Credentials";
            header('Location: ../login.php');
        }
    }
?>