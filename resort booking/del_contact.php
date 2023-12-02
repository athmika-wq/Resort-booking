<?php

include("connection.php");


if(isset($_POST['delete_btn_set']))
{
    $delete_id =$_POST['delete_id'];

    $reg_query = "delete from contact where id='$delete_id' ";
    $reg_query_run = mysqli_query($conn,$reg_query);

    if($reg_query_run)
    {
       ?>
        <script src="sweetalert.min.js"></script>
<script>

    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover the Customer Message !",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Customer Messagey has been deleted Successfully !", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
</script>
<?php
        header("Location:contactdetails.php");
    }
    else{
        header("Location:contactdetails.php");
    }
}

?>