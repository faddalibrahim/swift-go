<?php

    require __DIR__."../config/database.config.php";
    require __DIR__."../constants/person.constants.php";

    class Person extends Database{
        private $table = PERSON_TABLE;

        public function login($email,$password){
            $sql = "SELECT * FROM $this->table WHERE `email`=':email'";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':email',$email);

            $stmt->execute();
        }

        public function register($firstname,$lastname,$email,$password){
            $sql = "INSERT INTO $this->table (`firstname`, `lastname`, `email`, `password`) VALUES (':firstname', ':lastname', ':email', ':password')";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':firstname',$firstname);
            $stmt->bindParam(':lastname',$lastname);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$password);

            $stmt->execute();
        }


       
    }



?>