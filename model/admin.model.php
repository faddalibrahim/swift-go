<?php

    require __DIR__."/../config/database.config.php";

    class Admin extends Database{
        private $table =  "admin";

         public function login($email,$password){

           $stmt = $this->getDataFromDB($email);


           if(!$stmt->rowCount()){
            //    print("invalid email or password");
               return "invalid email or passsword";
           }

           $admin_data = $stmt->fetch();

           if($password == $admin_data['password']){
               session_start();
               $_SESSION['user'] = $admin_data['name'];
               $_SESSION['email'] = $admin_data['email'];
               header("location: dashboard.php");
           }

        //    return "invalid email or passsword";
        }


        private function getDataFromDB($email){
            if(!$this->connect()){
                return;
            }

			$sql = "SELECT * from $this->table WHERE email = :email";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':email',$email);
			$stmt->execute();

			return $stmt;
		}
    
        public function book($email){

        }

        public function cancelBooking($email){

        }

    }



?>