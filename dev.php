<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" 
  "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

<?php
/*********************************************************************
    index.php

    SVG Generator. Please customize it to fit your needs.

    John Rigler <john@rigler.org>
    Copyright (c)  2016 Secret Beach Solutions 
    http://secretbeachsolutions.com

    Released under the Apache 2  General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

*******************************************/

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

#$array = Yaml::parse(file_get_contents("points.yml"));

#print Yaml::dump($array);


?>


<head>
	<meta http-equiv='refresh' content='5'>
</head>


<svg width="13cm" height="13cm" viewBox="80 80 202 202"
     xmlns="http://www.w3.org/2000/svg" version="1.1">
  <desc>SVG Creator</desc>

  <!-- Show outline of canvas using 'rect' element -->
  <rect x="82" y="82"
 width="180" height="180"
        fill="none" stroke="blue" stroke-width="2" />
<?php 

class SVG {

function __construct($width,$height,$viewBox) {

echo '"<svg width="' . $width . '" height="' . $height . '" viewBox="' . $viewBox . '"';
echo ' xmlns="http://www.w3.org/2000/svg" version = "1.1">';
	}
}

function __destruct() {

echo "</svg>";

}

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

function ReturnX() { return $this->Coordinates['x']; }
function ReturnY() { return $this->Coordinates['y']; }
function ReturnXi() { return $this->Coordinates['x'] + $this->Offset['x']; }
function ReturnYi() { return $this->Coordinates['y'] + $this->Offset['y']; }

function ShowPoint() {

    $x = $this->Coordinates['x'];
    $y = $this->Coordinates['y'];
		$xo = $x + $this->Offset['x'];
		$yo = $y + $this->Offset['y'];

	  echo "<circle cx='$x' cy='$y' r='3' stroke='black' stroke-width='1' fill='red' />\n";
		echo "<line x1='$x' y1='$y' x2='$xo' y2='$yo' stroke=black stroke-width=2' />\n";


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

$array = Yaml::parse(file_get_contents("points.yml"));

foreach($array as $section)     // Double loop is just an easy way to unpack the YAML 
	foreach($section as $element)
		{
  	$this->Array []= new Point($element[0],$element[1],$element[2],$a);
		}
	}

function ShowOffset() {

  foreach( $this->Array as $index => $Point)
      {
         $Point->ShowPoint();
      }
	}
}

$PL = new PolyLine(3);

?>

  <polyline fill="none" stroke="blue" stroke-width="1" 
		
<?php	
	echo '	points="';
	foreach( $PL->Array as $Coord) { 
		$x = $Coord->ReturnX();
		$y = $Coord->ReturnY();
		echo " $x,$y ";
  }
	echo ' " />'; ?>

  <polyline fill="none" stroke="green" stroke-width="1" 
    
<?php
  echo '  points="';
  foreach( $PL->Array as $Coord) { 
    $x = $Coord->ReturnXi();
    $y = $Coord->ReturnYi();
    echo " $x,$y ";
  }
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
