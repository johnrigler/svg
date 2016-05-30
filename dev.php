<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" 
  "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<head>
	<meta http-equiv='refresh' content='5'>
</head>
<svg width="13cm" height="13cm" viewBox="80 80 202 202"
     xmlns="http://www.w3.org/2000/svg" version="1.1">
  <desc>Example polyline01 - increasingly larger bars</desc>

  <!-- Show outline of canvas using 'rect' element -->
  <rect x="82" y="82"
 width="180" height="180"
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
$this->Array []= new Point(130,100);
$this->Array []= new Point(130,110);
$this->Array []= new Point(160,110);
$this->Array []= new Point(160,100);
$this->Array []= new Point(190,100);
$this->Array []= new Point(190,130);
$this->Array []= new Point(180,130);
$this->Array []= new Point(180,160);
$this->Array []= new Point(190,160);
$this->Array []= new Point(190,190);
$this->Array []= new Point(160,190);
$this->Array []= new Point(160,200);
$this->Array []= new Point(130,200);  
$this->Array []= new Point(130,190);
$this->Array []= new Point(100,190);
$this->Array []= new Point(100,160);
$this->Array []= new Point(90,160);
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
<hr>
<?php $date=`date`;
echo $date; ?>
<h3>
<?php include 'desc.php'; ?>

</h3>
</html>