<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" 
  "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<head>
	<meta http-equiv='refresh' content='5'>
</head>
<svg width="14cm" height="14cm" viewBox="0 0 302 302"
     xmlns="http://www.w3.org/2000/svg" version="1.1">
  <desc>Example polyline01 - increasingly larger bars</desc>

  <!-- Show outline of canvas using 'rect' element -->
  <rect x="1" y="1" width="300" height="300"
        fill="none" stroke="blue" stroke-width="2" />


<?php 

class Point {

public $Coordinates = array();

function __construct($x,$y) {

		$this->Coordinates['x'] = $x;
		$this->Coordinates['y'] = $y;

	}


function __toString() {
		return $this->Coordinates['x'] . "," . $this->Coordinates['y'];
	}
}

class PolyLine {

public $Array = array();

function __construct() {

$this->Array []= new Point(100,100);
$this->Array []= new Point(100,105);
$this->Array []= new Point(105,105);
$this->Array []= new Point(130,100);
$this->Array []= new Point(160,100);
$this->Array []= new Point(200,100);
$this->Array []= new Point(210,210);
$this->Array []= new Point(200,210);
$this->Array []= new Point(210,200);
$this->Array []= new Point(190,200);
$this->Array []= new Point(200,200);
$this->Array []= new Point(250,175);
$this->Array []= new Point(250,200);
$this->Array []= new Point(100,200);  
$this->Array []= new Point(150,200);
$this->Array []= new Point(150,110);
$this->Array []= new Point(150,105);
$this->Array []= new Point(100,100);

	}

}

$PL = new PolyLine();

print_r($PL->Array);


?>

  <polyline fill="none" stroke="blue" stroke-width="2" 
		
<?php	
	echo '	points="';
	foreach( $PL->Array as $Coord) { echo " $Coord "; }
	echo ' " >';

?>


 />
</svg>
