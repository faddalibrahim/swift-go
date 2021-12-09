<?php 

	require __DIR__.'/credentials.config.php';

	class Database{
		private $host = HOST;
		private $user = USERNAME;
		private $password = PASSWORD;
		private $name = DB_NAME;
		private $conn = null;
		
		public function connect(){

			try{
				$this->conn = new PDO("mysql:host=$this->host;dbname=$this->name;charset=utf8",$this->user,$this->password);

				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

                $output = 'Database connection established.';             
                
				
			}catch (PDOException $e){
                $output = 'Connection Error: ' . $e->getMessage(). ' in ' . $e->getFile() . ' : '. $e->getLine();
			}

            echo $output;
            
			return $this->conn;
		}
	}

 ?>