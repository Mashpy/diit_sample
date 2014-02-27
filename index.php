<?php
$conn  = file('diitdb.sql');
if($conn->errno){
printf("Unable to connect to database : %s",$conn->errno);
exit();
}
echo "connected";

 ?>
