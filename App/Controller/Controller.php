<?php
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time');

require_once('../../App/Config/database.php');
require_once('../../App/Lib/geoplugin.class.php');
require_once('../../App/Models/UserActions.php');
require_once('../../App/Models/Users.php');

function getIp(){
  $geoplugin = new geoPlugin();
  $geoplugin->locate();
  return $geoplugin->ip;
}

/*User Action Table*/
function countUsersActionsByIpFromUA(){//UA -> User Action
  $userActions = new UsersActions(new Database());
  $userActions->setIp(getIp());
  $countIp = $userActions->countUsersActionsByIp()["COUNT(*)"];
}
function getIdUserFromUA(){//UA -> User Action
  $userActions = new UsersActions(new Database());
  $userActions->setIp(getIp());
  $idUser = $userActions->getIdUser()->idUser;
}
function createUserActionIp(){
  $userActions = new UsersActions(new Database());
  $userActions->setIdUser($idUser);
  $userActions->setIp(getIp());
  $userActions->setCity($geoplugin->city);
  $userActions->createUserActionIp();
}

/*User*/
function createUserFromU(){//U -> User
  $user = new Users(new Database());
  $user->setEmail("");
  $user->setNIT("");
  $user->createUser();
}

if ($_POST['module'] == 'setIp') {
   countUsersActionsByIpFromUA();
  if ($countIp > 0) {
    getIdUserFromUA();
  }
  else {
    createUserFromU();

    $user = new Users(new Database());
    $idUser = $user->lastIdUser()->idUser;

    $userActions = new UsersActions(new Database());
    $userActions->setIdUser($idUser);
    $userActions->setIp(getIp());
    $userActions->setCity($geoplugin->city);
    $userActions->createUserActionIp();
  }
}

else if ($_POST['module'] == 'download') {
  $geoplugin = new geoPlugin();
  $geoplugin->locate();
  $geoplugin->ip;

  $userActions = new UsersActions(new Database());
  $userActions->setIp($geoplugin->ip);
  $idUserAction = $userActions->getIdUserAction()->idUserActions;

  $userActions = new UsersActions(new Database());
  $userActions->setIdUserAction($idUserAction);
  $userActions->setDownload(1);
  $userActions->updateDownload();
}
else if ($_POST['module'] == 'unityLoginData') {
  $geoplugin = new geoPlugin();
  $geoplugin->locate();
  $geoplugin->ip;


  echo "string".$_POST['email'].$_POST['NIT'].$geoplugin->ip;
}




 ?>
