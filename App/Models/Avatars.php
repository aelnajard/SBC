<?php
    class Avatars {
      private $idAvatar;
      private $avatar; // gender
      private $available;
      private $conn;

        function __construct($conn) {
            $this->conn = $conn;
        }
        function setAvatar($avatar){
          $this->avatar = $avatar;
        }


        function getAvatar(){


        try{

          $sql = $this->conn->conn()->query("SELECT `idAvatars` FROM  `Avatars` WHERE gender = '$this->avatar' AND name = '1' GROUP BY `idAvatars` DESC LIMIT 1  ");
            $data = $sql->fetchAll(PDO::FETCH_OBJ);
            $this->conn->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }







        //






  /*
        function setIdUser($idUser){
          $this->idUser = $idUser;
        }
        function setNIT($NIT){
          $this->NIT = $NIT;
        }
        function setEmail($email){
          $this->email = $email;
        }
        function setPhone($phone){
          $this->phone = $phone;
        }

        function createUser(){
          try{
            $sql = "INSERT INTO `Users`(NIT, email)
                  VALUES (
                    '$this->NIT',
                    '$this->email'
                  )";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }
        function readUserLastId(){//"LAST_INSERT_ID()"
          try{
           $sql = $this->con->conn()->query("SELECT `idUser` FROM `Users` ORDER BY `idUser` DESC LIMIT 1");
             $data = $sql->fetch(PDO::FETCH_ASSOC);
             $this->con->close();
             return $data;
               }
           catch(PDOException $e){
               echo $query . "<br>" . $e->getMessage();
             }
        }


        function readUserExist(){
         try{
          $sql = $this->con->conn()->query("SELECT COUNT(*)  FROM `Users` WHERE email = '$this->email'
          AND NIT = '$this->NIT'");
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }



        function readIdUser(){
          try{
            $sql = $this->con->conn()->query("SELECT *  FROM `Users` WHERE email = '$this->email'
            AND NIT = '$this->NIT'");
            $data = $sql->fetch(PDO::FETCH_OBJ);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }






        function updatePhone(){
          try{
            $sql = "UPDATE
            `Users`
            SET `phoneNumber` =  '$this->phone'

            WHERE `idUser` = '$this->idUser'
            ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }





















        function readEmail(){
          try{
          $sql = $this->con->conn()->query("SELECT COUNT(*)  FROM `Users` WHERE email = '$this->email'");
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

*/















}
?>
