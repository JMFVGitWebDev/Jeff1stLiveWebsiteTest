<!DOCTYPE html 
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="http://example.com/myicon.png">
</head>
</html>



<?php

echo '<h1>Welcome To The Redirect File!</h1>';

session_start();

$_SESSION['customercode'] = "JeffLLC";

$_SESSION['application'] = "JeffTestApp";

//$_SESSION['CmlUrl'] = "JeffTestApp";




//header('Location: https://jmfvgitwebdev.github.io/Jeff1stLiveWebsiteTest/onebigcomponent.php');



?>
