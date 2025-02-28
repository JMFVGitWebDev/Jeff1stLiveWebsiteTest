<?php

session_start();

$_SESSION['customercode'] = "JeffLLC";

$_SESSION['application'] = "JeffTestApp";

//$_SESSION['CmlUrl'] = "JeffTestApp";




header('Location: onebigcomponent.php');



?>
