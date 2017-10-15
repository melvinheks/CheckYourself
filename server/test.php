<?php
echo "hello world";
    $hostname = "ip-172-31-18-79";
    $dbname = "nawars";
    $uname = "chcmcmlyl";
    $pword = "sqlwars123";

    $conn = new PDO("mysql:host=".$hostname.";dbname=".$dbname,$uname,$pword);
    $cmd ="CREATE TABLE MyGuests (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(30) NOT NULL,
                text VARCHAR(50) NOT NULL,
                reg_date TIMESTAMP
                )";

    $statement =$conn -> prepare($cmd);
    if($statement->execute()){
        echo "it hella work";
    }
    else{
        echo "did not work";
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
