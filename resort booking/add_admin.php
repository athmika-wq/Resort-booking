<?php
session_start();
$conn =  mysqli_connect("localhost","root","","resort booking");



if(isset($_POST['save_admin']))
{
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
             $query ="insert into adminlogin(name ,number,email,password) values('$name','$number','$email','$password')";
                        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            $_SESSION['status'] = "Admin Profile Added ";
            $_SESSION['status_code'] = "Success";
            header('Location:account.php');
        }
        else
        {
            $_SESSION['status'] = "Admin Profile Not Added";
            $_SESSION['status_code'] = "error";
            header('Location:account.php');
        }
    

}
?>