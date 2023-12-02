<?php 
 include("connection.php");
session_start()

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
    <li><a href="account.php">Accounts</a></li>
          <li><a href="table_reserve.php">Table booking</a></li>
          <li><a href="reservation.php">Room booking</a></li>
          <li><a href="contactdetails.php">Contact us</a></li>
          <li><a href="logindetails.php">Customer logged in</a></li>

      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="adminlogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

  


<!--Admin Modal -->
<div class="modal fade" id="AdminModal" tabindex="-1" role="dialog" aria-labelledby="AdminModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="AdminModalLabel">ADMIN DATA</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="add_admin.php" method="POST">
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number</label>
                            <input type="text" name="number"  class="form-control" placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email"  class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password"  class="form-control" placeholder="Password" required>
                        </div>
                    
                    </div>
         
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submi" name="save_admin" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

        <div class="container">
            <div class="row">
                <div class="card">
                <?php
                if(isset($_SESSION['status']) && $_SESSION['status'] !='' )
                {
                  ?>
                  <script src="sweetalert.min.js"></script>
    
                  <script>
                        swal({
                        title: "Successfully!!",
                        text: "Admin Data Added !",
                        icon: "success",
                        button: "Done!",
                      });
                        
                          </script>
                    <?php
                    unset($_SESSION['status']);
                }
                ?>
                    <div class="card-header">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AdminModal">
                            Add Admin
                            </button>
                    </div>
                        <div class="card-body">
                          
                
                        </div>

                </div>
            </div>
        </div>




        <h1>ADMIN LOGIN DETAILS</h1>
<table border="2">
  <tr>
    <th>Sl.no</th>
    <th>Full Name</th>
    <th>Mobile Number</th>
    <th>Email</th>
    <th>Password</th>
    <th>Update</th>
    <th colspan="2" align-text="center">Delete</th>
    
  </tr>
  <?php
  include("connection.php");
  error_reporting(0);
  $query = "select * from adminlogin";
  $data = mysqli_query($conn,$query);

  $total = mysqli_num_rows($data);

  if($total!=0)
  {
    while($result=mysqli_fetch_assoc($data))
    {
      ?>
      
      <tr>
      <input type="hidden" class="delete_val" value="<?php echo $result['id']; ?>">
      <td><?php echo $result['id']; ?></td>
      <td><?php echo $result['name']; ?></td>
      <td> <?php echo $result['number']; ?></td>
      <td> <?php echo $result['email']; ?></td>
      <td><?php echo $result['password']; ?></td>
      <td>
      <form action="update.php" method="POST">
          <input type="hidden" name="update_id"  value="<?php echo $result['id']; ?>"><a href="update.php?id=<?php echo $result['id'];?>"
          <button type="submit" name="update_btn" class="btn btn-info update_btn" value="update">Update</button>
          </a>
      </form>
      </td>
      <td>
      <form action="del.php" method="POST">
          <input type="hidden" name="delete_id" class="delete_id_value" value="<?php echo $result['id']; ?>">
          <button type="submit" name="delete_btn" class="btn btn-danger delete_btn ">Delete</button>
      </form>
      
      </td>
      </tr>
      
      <?php
    }
  }
  else{
    echo "No records found";
  }
  ?>
  

  </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
    <script src="sweetalert.min.js"></script>
    <script>
            $(document).ready(function() {


                        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

               $('.delete_btn').click(function (e) {
                 e.preventDefault();
                  var delete_id = $(this).closest("tr").find('.delete_id_value').val()
                
                      swal({
                      title: "Are you sure?",
                      text: "Once deleted, you will not be able to recover the Customer Message!",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                         var_data = {
                           "_token": $('input[name="csrf-token"]').val(),
                           "id": delete_id,
                         };
                          $.ajax({
                            type:"POST",
                            url:"del.php",
                            data: {
                              "delete_btn_set":1,
                              "delete_id":delete_id,
                            },
                            success: function(response) {
                              swal(" Customer Message has been deleted Successfully!", {
                                    icon: "success",
                                  }) .then((result) => {
                                    location.reload();
                                  });
                            }
                          });
                        
                       
                      } 
                    });
                
               
            });

         });
            
            </script>


  </body>
</html>