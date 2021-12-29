<?php
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time');

require_once('../../App/Config/database.php');
require_once('../../App/Lib/geoplugin.class.php');
require_once('../../App/Models/UserActions.php');
require_once('../../App/Models/Users.php');


if ($_POST['module'] == 'setIp') {

 $geoplugin = new geoPlugin();
 $geoplugin->locate();
 $geoplugin->ip;

 $userActions = new UsersActions(new Database());
 $userActions->setIp($geoplugin->ip);
 $countIp = $userActions->countUsersActionsByIp()["COUNT(*)"];

 echo $countIp;

  if ($countIp > 0) {
    echo "hola";
  }
  else {
    $user = new Users(new Database());
    $user->setEmail("");
    $user->setNIT("");
    $user->createUser();

    $user = new Users(new Database());
    $idUser = $user->lastIdUser()->idUser;

    $userActions = new UsersActions(new Database());
    $userActions->setIdUser($idUser);
    $userActions->setIp($geoplugin->ip);
    $userActions->createUserActionIp();

  }


}





 ?>
