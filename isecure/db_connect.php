<?php

$server		="sql304.epizy.com";
$username	="epiz_25747826";
$password	="Mer2020";
$database	="epiz_25747826_login";


$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
// 	echo "success";

// }

	die("Error".mysqli_connect_error());
}





?>