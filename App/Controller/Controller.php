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

  if ($countIp > 0) {
    $userActions = new UsersActions(new Database());
    $userActions->setIp($geoplugin->ip);
    $idUser = $userActions->getIdUser()->idUser;

    $userActions = new UsersActions(new Database());
    $userActions->setIdUser($idUser);
    $userActions->setIp($geoplugin->ip);
    $userActions->setEnterFair('0');
    $userActions->setCity($geoplugin->city);
    $userActions->createUserActionIp();
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
    $userActions->setEnterFair('0');
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

  $userActions = new UsersActions(new Database());
  $userActions->setIp($geoplugin->ip);

  $var = $userActions->readIp();
  $idUser = $var->idUser;
  $idUserActions = $var->idUserActions;


    if ($idUser == ''){
      $userActions = new UsersActions(new Database());
      $userActions->setIp($geoplugin->ip);
      $countIp = $userActions->countUsersActionsByIp()["COUNT(*)"];

       if ($countIp > 0) {
         $userActions = new UsersActions(new Database());
         $userActions->setIp($geoplugin->ip);
         $idUser = $userActions->getIdUser()->idUser;

         $userActions = new UsersActions(new Database());
         $userActions->setIdUser($idUser);
         $userActions->setIp($geoplugin->ip);
         $userActions->setEnterFair('1');
         $userActions->setCity($geoplugin->city);
         $userActions->createUserActionIp();
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
         $userActions->setEnterFair('1');
         $userActions->setCity($geoplugin->city);
         $userActions->createUserActionIp();
       }
    }
    else {
      $userActions = new UsersActions(new Database());
      $userActions->setIdUserActions($idUserActions);
      $userActions->setEnterFair('1');
      $userActions->updateEnterFair();
      }

}

else if ($_POST['module'] == 'uploadTimeEnterFair') {

  echo "hola como estas";


}

//




 ?>
