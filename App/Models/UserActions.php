<?php
    class UsersActions {
      private $idUser;
      private $idUserAction;
      private $ip;


      private $sessionNumber;
      private $timeLogin;
      private $timeExit;
      private $enterFair;
      private $enterCheckOut;
      private $didTheOrder;
      private $likes;
      private $dislikes;
      private $improvements;
      private $thingWouldLike;
      private $contacUs;

      private $con;

      function __construct($con) {
          $this->con = $con;
      }
      function setIp($ip){
        $this->ip = $ip;
        echo $this->ip;
      }

      function countUsersActionsByIp(){
      /* try{
        $sql = $this->con->conn()->query("SELECT COUNT(*)  FROM `UserActions` WHERE ip = '$this->ip'  ");
          $data = $sql->fetch(PDO::FETCH_ASSOC);
          $this->con->close();
          return $data;
            }
        catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
          }*/
      }

/*
      function setContactUs($contactUs){
        $this->contactUs=$contactUs;
      }

      function setContactMedia($contactUsMedia){
        $this->contactUsMedia=$contactUsMedia;
      }

        function setIdUser($idUser){
          $this->idUser=$idUser;
        }
        function setIdUserAction($idUserAction){
          $this->idUserAction=$idUserAction;
        }
        function setOperativeSystem($operativeSystem){
          $this->operativeSystem=$operativeSystem;
        }
        function setSessionNumber($idSessionNumber){
          $this->idSessionNumber=$idSessionNumber;
        }
        function setEnterFair($enterFair){
          $this->enterFair = $enterFair;
        }
        function setSessionId($sessionId){
          $this->sessionId = $sessionId;
        }
        function setTimeLogin($timeLogin){
          $this->timeLogin = $timeLogin;
        }
        function setTimeLoginLandingPage($timeLoginLandingPage){
          $this->timeLoginLandingPage = $timeLoginLandingPage;
        }
        function setTimeExit($timeExit){
          $this->timeExit = $timeExit;
        }


        function readUsersActionsSession(){
          try{
            $sql = $this->con->conn()->query("SELECT `idUserActions` FROM `UserActions` WHERE `idUser`= '$this->idUser' ORDER BY `timeLogin` DESC LIMIT 1 ");
            $data = $sql->fetch(PDO::FETCH_OBJ);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

        function readUserActionsIdUser(){
          try{
            $sql = $this->con->conn()->query("SELECT `idUser` FROM `UserActions` WHERE `ip`= '$this->ip' ORDER BY `idUserActions` DESC LIMIT 1 ");
            $data = $sql->fetch(PDO::FETCH_OBJ);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }


        function readUsersActions(){
          try{
            $sql = $this->con->conn()->query("SELECT  `Users`.NIT, `Users`.email, `UserActions`.EnterFair, `UserActions`.timeLogin,
             `UserActions`.timeGoCheckOut, `UserActions`.timeExit, `UserActions`.sessionNumber
            FROM `UserActions`
            INNER JOIN `Users`
            ON `Users`.idUser=`UserActions`.idUser");
            $data = $sql->fetchAll(PDO::FETCH_OBJ);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }


        function readUsersActionsIp(){
         try{
          $sql = $this->con->conn()->query("SELECT COUNT(*)  FROM `UserActions` WHERE ip = '$this->ip'  ");
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }




        function saveUserActions(){
          try{
            $sql = "INSERT INTO `UserActions`(idUser,timeLoginLandingPage, EnterFair, ip)
                  VALUES (
                    '$this->idUser',
                    '$this->timeLoginLandingPage',
                    '$this->enterFair',
                    '$this->ip'
                  )";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

        function updateUserActions(){

          try{
            $sql = "UPDATE
            `UserActions`
            SET `EnterFair` =  '$this->enterFair',
            `sessionNumber` =  '$this->sessionId'

            WHERE `idUserActions` = '$this->idUser'
            ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }


        function updateContactUs(){
          try{
            $sql = "UPDATE
            `UserActions`
            SET `contactUs` =  '$this->contactUs',
            `contactUsMedia` =  '$this->contactUsMedia'

            WHERE `idUserActions` = '$this->idUserAction'
            ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }






        function updateUserActionsOS(){
          try{
            $sql = "UPDATE
            `UserActions`
            SET `operativeSystem` =  '$this->operativeSystem'

            WHERE `idUserActions` = '$this->idUserAction'
            ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }


        }


        function readUserActionLastId(){
          try{
             $sql = $this->con->conn()->query("SELECT `idUserActions`  FROM `UserActions` ORDER BY `idUserActions` DESC LIMIT 1");
             $data = $sql->fetch(PDO::FETCH_ASSOC);
             $this->con->close();
             return $data;
               }
           catch(PDOException $e){
               echo $query . "<br>" . $e->getMessage();
             }
        }

        //


        function updateTimeExit(){
          try{
            $sql = "UPDATE
            `UserActions`
            SET `timeExit` =  '$this->timeExit'
            WHERE `idUserActions` = '$this->idUser'
            ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

*/


}
?>
