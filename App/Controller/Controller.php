<?php
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time');

require_once('../../App/Config/database.php');
require_once('../../App/Lib/geoplugin.class.php');
require_once('../../App/Models/UserActions.php');
require_once('../../App/Models/Users.php');
require_once('../../App/Models/Avatars.php');


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

      $timezone  = -5;
      $timeLogin =  gmdate("20y-m-d h:i:s", time() + 3600*($timezone));

      $userActions = new UsersActions(new Database());
      $userActions->setIdUserActions($idUserActions);
      $userActions->setTimeLogin($timeLogin);
      $userActions->updateTimeLogin();
}

//function readIdAvatar(){
//  echo "entramos";
  /*$avatar = new Avatars(new Database());
  $avatar->setAvatar($_POST['avatar']);
  $idAvatar = ($avatar->getAvatar()[0]->idAvatars);

  return $idAvatar;*/
//}

else if ($_POST['module'] == 'setAvatar') {
  $avatar = new Avatars(new Database());
  $avatar->setAvatar($_POST['avatar']);
  $idAvatar = ($avatar->getAvatar()[0]->idAvatars);

  //readIdAvatar();

  echo $idAvatar."Primer paso";


  if ($idAvatar == 0 || $idAvatar  ==  "") {

    echo "sera que al menos entramos aca";
    $avatar = new Avatars(new Database());
    $avatar->setAllAvatarsAvailable();
    //$idAvatar = readIdAvatar();
  }

    $avatar = new Avatars(new Database());
    $avatar->setIdAvatar($idAvatar);
    $avatar->updateAvatar();
    session_start();
    $_SESSION['idAvatar'] = $idAvatar;
    echo $idAvatar;




}





else if ($_POST['module'] == 'getAvatar') {
  session_start();
  echo $_SESSION['idAvatar'];
}

else if ($_POST['module'] == 'turnsSend'){
  $user = new Users(new Database());
  $user->setEmail($_POST['email']);
  $user->setNIT($_POST['NITValue']);
  $existUser =  $user->readUserExist()["COUNT(*)"];


  if ($existUser > 0) {
    $user = new Users(new Database());

     $user->setName($_POST['name']);
     $user->setEmail($_POST['email']);
     $user->setNIT($_POST['NITValue']);
     $user->setCompany($_POST['companyUserTurn']);
     $user->setPositionCompany($_POST['PositionInCompanyUserTurn']);
     $user->setPhoneNumber($_POST['PhoneUserTurn']);
     $user->setDate($_POST['date']);

     $user->updateUser();
     echo $_POST['name']. " tu turno ha sido cambiado correctamente para la fecha: ". $_POST['date'];
  }
  elseif ($existUser == 0) {
     $user = new Users(new Database());

     $user->setName($_POST['name']);
     $user->setEmail($_POST['email']);
     $user->setNIT($_POST['NITValue']);
     $user->setCompany($_POST['companyUserTurn']);
     $user->setPositionCompany($_POST['PositionInCompanyUserTurn']);
     $user->setPhoneNumber($_POST['PhoneUserTurn']);
     $user->setDate($_POST['date']);

     $user->createUser();
     echo $_POST['name']. " tu turno ha sido creado correctamente para la fecha: ". $_POST['date'];
  }
  else {
     echo "Se ha presentado una inconsistencia, por favor intente de nuevo";
  }






/* */
}

//




 ?>
