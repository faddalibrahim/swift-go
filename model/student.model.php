<?php

    require __DIR__."/../config/database.config.php";

    class Student extends Database{
        private $table =  "student";
        public $errors = array("firstname"=>"", "lastname"=>"", "email"=>"", "password" => "", "repeat_password"=>"", "");

        public function book($fullname, $email, $pickup, $payment, $moving){
            if(!$this->connect()){
                return;
            }

            $sql = "INSERT INTO book (fullname, email, pickup, payment,moving) VALUES (:fullname,:email,:pickup,:payment,:moving)";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':fullname',$fullname);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':pickup',$pickup);
            $stmt->bindParam(':payment',$payment);
            $stmt->bindParam(':moving',$moving);

            $stmt->execute();
        }

        public function updateBooking($fullname, $email, $pickup, $payment, $moving){
            if(!$this->connect()){
                return;
            }

            $sql = "UPDATE book SET fullname='$fullname', email='$email', pickup='$pickup', payment='$payment', moving='$moving' WHERE email='$email'";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt;


        }

        function cancelBooking($email){
             if(!$this->connect()){
                return;
            }
            $sql = "DELETE FROM book WHERE email = :email";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':email',$email);

            $stmt->execute();
        }

        public function checkUserBooking($email){
            $stmt = $this->getBookingData($email);

            if(!$stmt->rowCount()){
               return false;
           }

           return $stmt->fetch();
        }

        public function login($email,$password){
          

           $stmt = $this->getDataFromDB($email);


           if(!$stmt->rowCount()){
               return "invalid email or passsword";
           }

           $student_data = $stmt->fetch();

           if(password_verify($password,$student_data['password'])){
               session_start();
               $_SESSION['user'] = $student_data['firstname']." ".$student_data['lastname'];
               $_SESSION['admin_email'] = $student_data['email'];
               header("location: booking.php");
           }

           return "invalid email or passsword";
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

        private function getBookingData($email){
            if(!$this->connect()){
                return;
            }

			$sql = "SELECT * from book WHERE email = :email";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':email',$email);
			$stmt->execute();

			return $stmt;
		}

        public function register($firstname,$lastname,$email,$password){
            if(!$this->connect()){
                return;
            }

            // check if user exists in database
			$stmt = $this->getDataFromDB($email);
			if($stmt->rowCount()){
                // echo "<script>alert('email is already taken')</script>";
                return "email is already taken";
			}

            $hashed_password = password_hash($password,PASSWORD_DEFAULT);

            $sql = "INSERT INTO $this->table (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':firstname',$firstname);
            $stmt->bindParam(':lastname',$lastname);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$hashed_password);

            $stmt->execute();
        }


    }



?>