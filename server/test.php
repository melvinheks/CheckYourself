<?php
echo "hello world";
    $hostname = "ip-172-31-18-79";
    $dbname = "nawars";
    $uname = "chcmcmlyl";
    $pword = "sqlwars123";
		try{
			$conn = new PDO("mysql:host=".$hostname.";dbname=".$dbname,$uname,$pword);
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
