<?php
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time');

require_once('../Lib/geoplugin.class.php');




$geoplugin = new geoPlugin();
$geoplugin->locate();
echo $geoplugin->ip;


 ?>
