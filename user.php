<html>
	<head>
		<meta http-equiv='refresh' content='5' >
	</head>


<?php

$date = `date`;
echo $date . "<br>";

class User {


	public $age = 0;
	private $password;

	public function __construct($age) {
	$this->age = $age;
	$this->password = "adfasdadf";
	}

	public function getPasswd($hint) {

	if ($hint == 'getit') {
		return $this->password;
		}
		else return "nope";

	}

}

$brad = new User(31);

echo $brad->getPasswd('getit');

echo $brad->age;
