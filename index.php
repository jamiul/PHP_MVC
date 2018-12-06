<?php include "inc/header.php"; ?>

<?php
include_once 'system/libs/Main.php';
/* index.php?url=controller/method/para*/
#$main = new Main();

$url = $_GET['url'];
$url = rtrim($url, '/'); #Remove / sign
$url = explode("/", $url);

#include 'app/controllers/Jamiul.php';
include 'app/controllers/'.$url[0].'.php';#Add dynamically

#$controller = new Jamiul();
$controller = new $url[0]();# Add Dynamically

/*echo "<pre>"; #Show All the url
print_r($url);
echo "</pre>"; */

/*echo($controller = $url[0]."</br>");#Display Array
echo($method = $url[1]."</br>");
echo($para = $url[2]."</br>");*/

?>

















<?php include "inc/footer.php"; ?>