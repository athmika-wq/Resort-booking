<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "resort booking");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

    
$SelectDay = mysqli_real_escape_string($link, $_REQUEST['SelectDay']);
$SelectHour = mysqli_real_escape_string($link, $_REQUEST['SelectHour']);
$FullName = mysqli_real_escape_string($link, $_REQUEST['FullName']);
$PhoneNumber = mysqli_real_escape_string($link, $_REQUEST['PhoneNumber']);
$HowManyPersons = mysqli_real_escape_string($link, $_REQUEST['HowManyPersons']);
$BOOKTABLE = mysqli_real_escape_string($link, $_REQUEST['BOOKTABLE']);

 
// Attempt insert query execution
$sql = "INSERT INTO table_reservation (SelectDay, SelectHour, FullName,PhoneNumber,HowManyPersons,BOOKTABLE) VALUES ('$SelectDay', '$SelectHour', '$FullName','$PhoneNumber','$HowManyPersons','$BOOKTABLE')";
if(mysqli_query($link, $sql)){
    echo "Table Booked successfully.....";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('location: index.php'); //redirecting to home page            

?>
