<?php
$myfile = fopen("user.txt", "a") or die("Unable to open file!");

$username = $_POST['username'];
$pass=$_POST['pass'];
$arr = array(
    "UserName" => $username ,
    "Pass"=>$pass
    
);
 
$jsonobj=json_encode($arr);

fwrite($myfile, $jsonobj);
fwrite($myfile,",");
fclose($myfile);

			
			
?>


