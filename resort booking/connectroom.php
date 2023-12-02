<?php
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $a_date = $_POST['a_date'];
  $d_date = $_POST['d_date'];
  $people = $_POST['people'];
  $room = $_POST['room'];

  
  $db = mysqli_connect('localhost','root','','resort booking');
  if($db->connect_error){
      die('Connection Failed:'.$db->connect_error);
  }else{
      $sql = "INSERT INTO room (name, email, phone, a_date, d_date, people, room)
      VALUES('$name', '$email', '$phone', '$a_date', '$d_date', '$people', '$room')";
     mysqli_query($db, $sql);
     $_SESSION['name'] = $name;
     $_SESSION['success'] = "Your message is sent..";
     header('location: index.php'); //redirecting to home page            

  }
  ?>