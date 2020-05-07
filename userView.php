<?php
$myfile = fopen("user.txt", "r") or die("Unable to open file!");
echo "<table border=1 cellspacing=0 >";
echo "<tr>";
		
		echo "<td>Tài Khoản</td>";
		echo "<td>Mật Khẩu</td>";
	echo "</tr>";
while(!feof($myfile)) {
   $obj=fgets($myfile);
   $arr=explode(';', $obj);
foreach($arr as $key=>$value){
    $user = json_decode($value);
   
	echo "<tr>";
		
		echo "<td>".$user->UserName."</td>";
		echo "<td>".$user->Pass."</td>";
	echo "</tr>";    
}
}
fclose($myfile);
?>


