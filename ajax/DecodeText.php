<?php
if(isset($_POST["pass"]))
{
	include("functions.php");
	
	$pass = $_POST["pass"];

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
		$getdata_PRST = $CONNPDO->prepare("SELECT * FROM crypto");
		$getdata_PRST -> execute() or die($CONNPDO->errorInfo());
		$count = $getdata_PRST->rowCount();
	
		if($count == 1)
		{
			while($getdata_RSLT = $getdata_PRST->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_NEXT))
			{
				$message = $getdata_RSLT["message"];
			}
		
			$answer = XOR_decrypt($message,$pass);
			
			$response = "The stored encrypted message is <u>".$answer."</u>";
			echo $response;
			
		}
		else
		{
			echo "No message is saved!We deeply apologise!";
		}
		
		
		
	}
	else
	{
		echo "No database Connection!";
	}
}
else
{
	echo "Please insert password please!";
}
?>