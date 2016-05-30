<html>
	<head>
		<meta http-equiv='refresh' content='5'>
	</head>

<?php echo `date` . "\n" ?>

<?php

class User {

	private $age = 0;

	public function __construct($age){

	$this->age = $age;
	}

	public function GetAge(){

	return $this->age;
	}

}

$Brad = new User(31);

echo "<br>" . $Brad->GetAge() . "\n"; 

?>

</html>
