<?php 

require __DIR__ . '/config/database.config.php';

$db = new Database();
print_r($db->connect());
print_r($db->conn);

?>