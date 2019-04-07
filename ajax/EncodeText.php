<?php
if(isset($_POST["tex"]) && isset($_POST["pass"]))
{
	include("functions.php");
	
	$pass = $_POST["pass"];
	$text = $_POST["tex"];
	$message = XOR_encrypt($text,$pass);

	$hostname_DB = "127.0.0.1";
	$database_DB = "crypto";
	$username_DB = "root";
	$password_DB = "";
	
	try
	{
		$CONNPDO = new PDO("mysql:host=".$hostname_DB.";dbname=".$database_DB.";charset=UTF8;",$username_DB,$password_DB,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_TIMEOUT=>3));
	}
	catch(PDOException $e)
	{
		$CONNPDO = null;
	}
	
	if($CONNPDO != null)
	{
		$getdata_PRST = $CONNPDO -> prepare("SELECT * FROM crypto");
		$getdata_PRST -> execute() or die($CONNPDO->errorInfo());
		$count = $getdata_PRST -> rowCount();
	
		if($count == 0)
		{
			$adddata_PRST = $CONNPDO->prepare("INSERT INTO crypto(message) VALUES (:message)");
			$adddata_PRST -> bindValue(":message",$message);
			$adddata_PRST -> execute() or die($CONNPDO->errorInfo());
			
			echo "Encrypted message has been successfully stored!";
			
			
		}
		else
		{
			
			$adddata_PRST = $CONNPDO->prepare("UPDATE crypto SET message = :message WHERE id=1");
			$adddata_PRST -> bindValue(":message",$message);
			$adddata_PRST -> execute() or die($CONNPDO->errorInfo());
			
			echo "Previous entry has beed overwritten!Encrypted message has been successfully stored!";
		}
		
		
		
	}
	else
	{
		echo "No database Connection!";
	}
}
else
{
	echo "Please insert valid credentials!";
}
?>