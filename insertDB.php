<?php
     
    require 'database.php';
	$date=date("Y/m/d");
	$time=date("H:i:s");
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$count=1;
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO table_nodemcu_rfidrc522_mysql (name,id,gender,email,mobile,date,time) values(?, ?, ?, ?, ?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id,$gender,$email,$mobile,$date,$time));
		Database::disconnect();


		// $pdo = Database::connect();
		// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// $sql = "INSERT INTO attendence (id) values($id,$count)";
		// $q = $pdo->prepare($sql);
		// $q->execute($sql);
		// Database::disconnect();
		header("Location: user data.php");
    }
?>