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

?>

<head>
	<meta http-equiv='refresh' content='5'>
</head>

<svg width="26cm" height="13cm" viewBox="40 60 302 202"
     xmlns="http://www.w3.org/2000/svg" version="1.1">
  <desc>SVG Creator</desc>

  <!-- Show outline of canvas using 'rect' element -->
  <rect x="62" y="62"       
 width="330" height="180"    
        fill="none" stroke="blue" stroke-width="2" />   

<?php 

include "svg.php";

### Begin Here

$PL = new PolyLine(5);

$Grid = new PolyLine(5);

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
