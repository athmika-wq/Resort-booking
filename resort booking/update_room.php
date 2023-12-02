

<?php
include ("connection.php");
// if($conn){
//   echo "succuss";
// }

// extract($_POST);
// extract($_GET);

$id=$_GET['id'];
// echo $id;

if(isset($_POST['submit']))
{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $a_date = $_POST['a_date'];
        $d_date=$_POST['d_date'];
        $people=$_POST['people'];
        $room=$_POST['room'];
        $query= "UPDATE `room` SET 'name' = '$name', email = '$email', phone = '$phone', a_date = '$a_date',d_date='$d_date' ,people = '$people',room = '$room' WHERE `room`, id = $id;";
        $query_run = mysqli_query($conn, $query);
        
        if($query_run)
        {
          echo'<script type="text/javascript"> alert("Data Updated") </script>';
          header("location:account.php");
            
        }
        else{
            echo'<script type="text/javascript"> alert("Data Not Updated") </script>';
        }
}



$query ="select * from room where id='$id'";
$query_run = mysqli_query($conn,$query);
$result = mysqli_fetch_array($query_run);



            ?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
h1{
  text-align: center;
}

th, td {
  text-align: left;
  padding: 16px; 
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
.form-group{
    text-align:center;
    margin:10px 0px 15px 0px;
    padding:8px 15px 8px 15px;
}
input{
    width:20%;
    height:5%;
    border:1px;
    border-radius:05px;
    padding:8px 15px 8px 15px;
    margin:10px 0px 15px 0px;
    box-shadow:1px 1px 2px 1px grey;
}

</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Admin</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="indexadmin.php">Home</a></li>
          <li><a href="table_reserve.php">Table booking</a></li>
          <li><a href="reservation.php">Room booking</a></li>
         <li><a href="contactdetails.php">Contact us</a></li>
          <li><a href="logindetails.php">Customer logged in</a></li>

      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="account.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>





                    <h1>Edit roombooking</h1>
                    <div class="modal-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $result['id']?>">
                                      <div class="form-group">
                                            <label for="">name</label>
                                            <input type="text" name="name" placeholder="name" value="<?php echo $result['name']?>"></br></br>
                                        </div>
                                        <div class="form-group">
                                            <label for="">email </label>
                                            <input type="text" name="email" placeholder="email" value="<?php echo $result['email']?>"></br></br>
                                        </div>
                                        <div class="form-group">
                                            <label for="">phone</label>
                                            <input type="phone" name="phone" placeholder="phone" value="<?php echo $result['phone'] ?>"></br></br>
                                        </div>
                                        <div class="form-group">
                                            <label for="">a_date</label>
                                            <input type="text" name="a_date" placeholder="a_date" value="<?php echo $result['a_date'] ?>"></br></br>
                                        </div>
                                        <div class="form-group">
                                            <label for="">d_date</label>
                                            <input type="text" name="d_date" placeholder="d_date" value="<?php echo $result['d_date'] ?>"></br></br>
                                        </div>
                                        <div class="form-group">
                                            <label for="">people</label>
                                            <input type="text" name="people" placeholder="people" value="<?php echo $result['people'] ?>"></br></br>
                                        </div>
                                        <div class="form-group">
                                            <label for="">room</label>
                                            <input type="text" name="room" placeholder="room" value="<?php echo $result['room'] ?>"></br></br>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" id="update" name="submit" class="btn btn-primary"><strong>Update</button>
                                            <a href="account.php" class="btn btn-danger">Cancel</a>
                                            </form>






                                            <?php
                                           
                                            ?>


                                        </div>
                          
                    </div>
            <?php  
  
?>

</body>
</html>