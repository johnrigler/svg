<?php

function angles($deg) {

$radians = deg2rad($deg) *2;

echo "$deg $radians     "; 
echo cos($radians);
echo "    ";
echo sin($radians);
echo "\n";

}

angles(0);
angles(90);

?>
