<?php

class bericht {
	private $nickname;
	private $boodschap;

	public function __construct($nickname,$boodschap) {
		$this->nickname=$nickname;
		$this->boodschap=$boodschap;
	}

	public function getNickname() {
		return $this->nickname;
	}
	public function getBoodschap() {
		return $this->boodschap;
	}
}

class chatbox {
	public function getMessages() {
		$lijst = array();
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "select nickname, boodschap from chatbox";
		$resultSet = $dbh->query($sql);
		if ($resultSet) {
			foreach ($resultSet as $rij) {
				$entry = new bericht($rij["nickname"],$rij["boodschap"]);
				array_push($lijst,$entry);
			}
		return $lijst;
	} else return false;
	}
	public function addMessage($bericht) {
		
	} 
}







session_start();
if (!isset($_SESSION["nickname"])) {
$_SESSION["nickname"] = "p" . rand(1,1000);
}
print("hallo ".$_SESSION["nickname"]);

$chatbox = new chatbox();
$lijst=$chatbox->getMessages();






?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Chatbox</title>
</head>
<body>
	<h1>Chatbox</h1>



	<?php 

	if ($lijst) {
foreach($lijst as $entry) {
	print("<br>" . $entry->getNickname() . ":" .  $entry->getBoodschap());
}
}

?>

<form action="oefening9.6.php?action=chat" method="post">
<input type="text"><input type="button" value="Verstuur chatbericht">
</form>
</body>
</html>




