<?php
  
  $host="localhost";
  $user="root";
  $pass="";
  $dbname="bookgym";
  
  $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  
  if($_POST) 
  {
      $name     = strip_tags($_POST['login']);
      
   $stmt=$dbcon->prepare("SELECT login FROM users WHERE login=:name");
   $stmt->execute(array(':name'=>$name));
   $count=$stmt->rowCount();
      
   if($count>0)
   {
    echo "<span style='color:brown;'>Ta nazwa użytkownika jest już zajęta !!!</span>";
   }
   else
   {
    echo "<span style='color:green;'>Możesz użyć tej nazwy. </span>";
   }
  }
?>