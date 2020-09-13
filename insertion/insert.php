<?php

$link = mysqli_connect("sql304.epizy.com", "epiz_25747826", "Mer2020", "epiz_25747826_merclasses");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$fathers_name = mysqli_real_escape_string($link, $_REQUEST['fathers_name']);
$class = mysqli_real_escape_string($link, $_REQUEST['class']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
 
 
// Attempt insert query execution
$sql = "INSERT INTO contact_table (name, fathers_name, class, email , phone,message) VALUES ('$name', '$fathers_name' , '$class', '$email' ,'$phone' ,'$message')";
if(mysqli_query($link, $sql)){
    //echo "<h1 >Thanks , We will Contact You Soon.</h1>";
   
header("Location: ../../index.php");
exit();

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>