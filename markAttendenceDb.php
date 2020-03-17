<?php
    
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['getUID'];
		
		// $gender = $_POST['gender'];
        // $email = $_POST['email'];
        // $mobile = $_POST['mobile'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // $sql="UPDATE table_nodemcu_rfidrc522_mysql SET count=count+1 WHERE id=iD";
        $sql=" UPDATE `table_nodemcu_rfidrc522_mysql` SET `count`= `count` + 1 WHERE `id`=id";

       
		$q = $pdo->prepare($sql);
		$q->execute();
		Database::disconnect();
		header("Location: attendenceMark.php");
    }
?>