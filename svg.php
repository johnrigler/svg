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
}

class PolyLine {

public $Array = array();
public $Angles = array();
public $Offset = 0;
public $PointCount = 0;
public $XSum = 0;
public $YSum = 0;
public $MidX = 0;
public $MidY = 0;

function __construct($a) {

$array = Yaml::parse(file_get_contents("points2.yml"));

foreach($array as $section)     // Double loop is just an easy way to unpack the YAML 
	foreach($section as $element)
		{
  	$this->Array []= new Point($element[0],$element[1],$element[2],$a); // Load into array
		$this->PointCount++;
		$this->XSum += $element[0];    // Add up X to find average (middle)
		$this->YSum += $element[1];    // Add up Y to find average (middle)
		}

  $this->MidX = $this->XSum / $this->PointCount;
	$this->MidY = $this->YSum / $this->PointCount;	

  $Middle = new Point($this->MidX,$this->MidY,0,0);
	$Middle->ShowPoint();

	}

function ShowOffset() {

  foreach( $this->Array as $index => $Point)
      {
         $Point->ShowPoint();
      }
	}

}

?>
