<?php
  
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $db = mysqli_connect('localhost','root','','resort booking');
  if($db->connect_error){
      die('Connection Failed:'.$db->connect_error);
  }else{
      $sql = "INSERT INTO contact (fullname, email, message)
      VALUES('$fullname', '$email', '$message')";
     mysqli_query($db, $sql);
     $_SESSION['fullname'] = $fullname;
     $_SESSION['success'] = "Your message is sent..";
     header('location: index.php'); //redirecting to home page            

  }
  ?>