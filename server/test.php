<?php
echo "hello world";
	$dbhost = 'ip-172-31-18-79';
	$dbport = '3306';
	$dbname = 'nawars';
	$charset = 'utf8' ;

	$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
	$username = "chcmcmlyl";
	$password = "sqlwars123";
	echo $dbhost;
	echo $dbport;
	echo $dbname;
	echo $charset;
	echo $username;
	echo $password;

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
