<?php
echo "hello world";
	$dbhost = $_SERVER['RDS_HOSTNAME'];
	$dbport = $_SERVER['RDS_PORT'];
	$dbname = $_SERVER['RDS_DB_NAME'];
	$charset = 'utf8' ;

	$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
	$username = $_SERVER['RDS_USERNAME'];
	$password = $_SERVER['RDS_PASSWORD'];

		try{
			$pdo = new PDO($dsn, $username, $password);
			die(json_encode(array('outcome' => true)));
        }catch(PDOException $ex){
            die(json_encode(array(
                'outcome' => false,
                'message' => 'Unable to connect'
            )));
        }
//$logginginfo = $statement-> fetchAll(PDO::FETCH_ASSOC);    
//	$logname=$logginginfo[0]["Fname"]." ".$logginginfo[0]["Lname"];
//				$rows = $statement -> rowCount();
//				if($rows > 0)
//				{
//					$_SESSION["uname"]=$userlogin;
//				}
//				else
//				{
//					unset($_POST['userlogin']);
//					header("Location: Chieh-Huang Chen WIP Login.php");
//					$_SESSION["loginfailed"] = "wrong";
//					die();
//				}
//			}
//			if(isset($_POST["loggingout"]))
//			{
//				unset($_SESSION["uname"]);
//				unset($_POST['logout']);
//			}
?>
