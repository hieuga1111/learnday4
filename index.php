<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div id="abc">
 <?php
  date_default_timezone_set("Asia/Ho_Chi_Minh");
  echo "Chào bạn, bây giờ là ". date("h")." giờ ".date("i")." phút ngày ".date("d/m") . "<br>";
  
?>

<h2>ĐĂNG KÍ ĐI NÀO</h2>
<form method="post" action="userRegister.php"">  
  Username: <input type="text" name="username">
  <br><br>
  Pass: <input type="text" name="pass">
  <br><br>
 
  <input type="submit" name="Submit" value="Đăng kí">  
</form>
</div>

        
    </body>
</html>
