<?php

include("connection.php");


if(isset($_POST['delete_btn_set']))
{
    $delete_id =$_POST['delete_id'];

    $reg_query = "delete from room where id='$delete_id' ";
    $reg_query_run = mysqli_query($conn,$reg_query);

    if($reg_query_run)
    {
       ?>
        <script src="sweetalert.min.js"></script>
<script>

    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover the room booking data !",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal(" Booking Data has been Deleted Successfully!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
</script>
<?php
        header("Location:reservation.php");
    }
    else{
        header("Location:reservation.php");
    }
}

?>