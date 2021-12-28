<?php
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time');

require_once('../../App/Config/database.php');
require_once('../../App/Lib/geoplugin.class.php');
require_once('../../App/Models/UserActions.php');

if ($_POST['module'] == 'setIp') {

 $geoplugin = new geoPlugin();
 $geoplugin->locate();
 $geoplugin->ip;

 $userActions = new UsersActions(new Database());
 $userActions->setIp($geoplugin->ip);
 $countIp = $userActions->countUsersActionsByIp()["COUNT(*)"];


  if ($countIp == 0) {
    echo json_encode ($countIp);

  }
  else {

  }


}





 ?>
