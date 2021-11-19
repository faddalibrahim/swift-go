<?php

    require __DIR__."/person.model.php";

    class Admin extends Person{
        private $table =  "admin";
    
        public function book($email){

        }

        public function cancelBooking($email){

        }

    }



?>