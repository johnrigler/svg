<html>
<body>


<svg height="210" width="500">

<?php

class ToolPath
{
		// Declare Properties

		public $width=5;

		// Declare Methods


	public function DrawLine($x1,$y1,$x2,$y2,$r,$g,$b) {

	echo "  <line x1='$x1' y1='$y' x2='$x2' y2='$y' style='stroke:rgb($r,$g,$b);stroke-width:4' />";

	}

}


function top($x1,$x2,$y,$w,$r,$g,$b) {

//line($x1,$y,$x2,$y,$r,$g,$b);

echo "  <line x1='$x1' y1='$y' x2='$x2' y2='$y' style='stroke:rgb(255,0,0);stroke-width:2' />";
$y = $y + $w;
echo "  <line x1='$x1' y1='$y' x2='$x2' y2='$y' style='stroke:rgb(255,100,0);stroke-width:2' />";

};

function right($y1,$y2,$x,$w) {
echo "  <line x1='$x' y1='$y1' x2='$x' y2='$y2' style='stroke:rgb(255,0,0);stroke-width:2' />";
$x = $x - $w;
echo "  <line x1='$x' y1='$y1' x2='$x' y2='$y2' style='stroke:rgb(255,100,0);stroke-width:2' />";

};

$Top = new ToolPath();


top(100,200,50,15,255,0,0);
right(50,100,200,15);
top(200,250,100,15);

?>

</svg>

</body>
</html>
