<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        // $name = $_POST['name'];
		$id = $_POST['id'];
		// $gender = $_POST['gender'];
        // $email = $_POST['email'];
        // $mobile = $_POST['mobile'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql="UPDATE table_nodemcu_rfidrc522_mysql SET count=count+1 WHERE id=id";
		$q = $pdo->prepare($sql);
		$q->execute();
		Database::disconnect();
		header("Location: attendenceMark.php");
    }
?>