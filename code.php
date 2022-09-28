<?php
session_start();
$con = mysqli_connect("localhost","root","","register");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
if(isset($_POST['update_user']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phoneNum = mysqli_real_escape_string($con, $_POST['phoneNum']);
    $fullName = mysqli_real_escape_string($con, $_POST['fullName']);
    $Passward = mysqli_real_escape_string($con, $_POST['Passward']);

    $query = "UPDATE users SET email='$email', phoneNum='$phoneNum', fullName='$fullName', Passward='$Passward' WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "user Updated Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Updated";
        header("Location: admin.php");
        exit(0);
    }

}


if(isset($_POST['save_user']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phoneNum = mysqli_real_escape_string($con, $_POST['phoneNum']);
    $fullName = mysqli_real_escape_string($con, $_POST['fullName']);
    $Passward = mysqli_real_escape_string($con, $_POST['Passward']);

    $query = "INSERT INTO users (email,phoneNum,fullName,Passward) VALUES ('$email','$phoneNum','$fullName','$Passward')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "user Created Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Created";
        header("Location: admin.php");
        exit(0);
    }
}
?>