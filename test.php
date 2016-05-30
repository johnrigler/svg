<?php

class SimpleClass
{
public $var = 5;


public function displayVar() {

	echo $this->var;

		}
	}

$SC = new SimpleClass();

$SC->displayVar();
?>
