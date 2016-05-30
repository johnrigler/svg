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
public $Offset = array();
public $IsCorner = 0;
public $OffsetAngle = 0;

function __construct($x,$y,$a,$w) {

		$this->Coordinates['x'] = $x;
		$this->Coordinates['y'] = $y;

		$this->Offset['x'] = $w;
		$this->Offset['y'] = $w;

   switch ($a) {
    case 45:
        $this->Offset['y'] = $w * -1;
        break;

		case 135:
				$this->Offset['x'] = $w * -1;
				$this->Offset['y'] = $w * -1;

		case 225:
				$this->Offset['x'] = $w * -1;
				break;
    default:
        break;
      }


	}

function __toString() {
		return $this->Coordinates['x'] . "," . $this->Coordinates['y'];
	}

function ShowPoint($xa,$ya) {

    $x = $this->Coordinates['x'];
    $y = $this->Coordinates['y'];
		$xo = $x + $this->Offset['x'];
		$yo = $y + $this->Offset['y'];

	  echo "<circle cx='$x' cy='$y' r='3' stroke='black' stroke-width='1' fill='red' />\n";
		echo "<line x1='$x' y1='$y' x2='$xo' y2='$yo' stroke=black stroke-width=2' />\n";


	}

function xxxSetOffset($degree,$width) {

		$this->Offset['x'] = $width;
		$this->Offset['y'] = $width;

	switch($degree) {
		case 45:
			$this->Offset['y'] = $width * -1;
			break;

		case 135:
			$this->Offset['x'] = $width * -1;
			$this->Offset['y'] = $width * -1;
			break;

		case 225:
			$this->Offset['x'] = $width * -1;
			break;

		case 315:
			break;

		default:
		 	break;
		}
	}


function SetCorner($val) {
	$this->IsCorner = $val;
	}
}

class PolyLine {

public $Array = array();
public $Angles = array();
public $Offset = 0;

function __construct($a) {

$this->Offset = $a;

$b = $a * -1;

$this->Array []= new Point(100,100,135,$a);
$this->Array []= new Point(130,100,45,$a);
$this->Array []= new Point(130,110,45,$a);
$this->Array []= new Point(160,110,135,$a);
$this->Array []= new Point(160,100,135,$a);
$this->Array []= new Point(190,100,45,$a);
$this->Array []= new Point(190,130,315,$a);
$this->Array []= new Point(180,130,315,$a);
$this->Array []= new Point(180,160,45,$a);
$this->Array []= new Point(190,160,45,$a);
$this->Array []= new Point(190,190,315,$a);
$this->Array []= new Point(160,190,315,$a);
$this->Array []= new Point(160,200,315,$a);
$this->Array []= new Point(130,200,225,$a);  
$this->Array []= new Point(130,190,225,$a);
$this->Array []= new Point(100,190,225,$a);
$this->Array []= new Point(100,160,225,$a);
$this->Array []= new Point(90,160,225,$a);
$this->Array []= new Point(90,130,135,$a);
$this->Array []= new Point(100,130,135,$a);
$this->Array []= new Point(100,100,135,$a);

	}

function ShowOffset() {

  foreach( $this->Array as $index => $Point)
      {
         $Point->ShowPoint(15,-15);
        
      }
	}

}

$PL = new PolyLine(5);

$TestPoint = $PL->Array[5];


//print_r($PL->Array);


?>

  <polyline fill="none" stroke="blue" stroke-width="2" 
		
<?php	
	echo '	points="';
	foreach( $PL->Array as $Coord) { echo " $Coord "; }
	echo ' " />'; ?>



<?php $PL->ShowOffset(); ?>

</svg>
<hr>


<?php $date=`date`;
echo $date; ?>
<h3>
<?php include 'desc.php'; ?>

</h3>
</html>
