<?php
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time');

require_once('../config/database.php');
require_once('../Lib/geoplugin.class.php');

private $userActions;

function queryUserActions(){
  $db = new Database();
  $userActions = new UsersActions($db);
  $this->userActions = $userActions;
}

if ($_POST['module'] == 'setIp') {

  $geoplugin = new geoPlugin();
  $geoplugin->locate();
  $geoplugin->ip;
  echo $geoplugin->ip;

/*
  $readUsersActions = new Read();
  $readUsersActions->queryUserActions();
  $this->userActions->setIp($geoplugin->ip);*/
  //$this->userActions->countUsersActionsIp()["COUNT(*)"];


/*  if ($countIp > 0) {

  }
  else {

  }*/


}





 ?>