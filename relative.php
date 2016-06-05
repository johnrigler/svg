<?php
/*********************************************************************
    index.php

    Refreshing YAML workspace. Please customize it to fit your needs.

    John Rigler <john@rigler.org>
    Copyright (c)  2016 Secret Beach Solutions 
    http://secretbeachsolutions.com

    Released under the Apache 2  General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

*******************************************/

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

require_once "svg.php";

$array = Yaml::parse(file_get_contents("test.yml"));

/*******************
The current YAML Format is 1.0:

----------------------------------
- { version: "1.0", startx: 120, starty: 100, side: top }
- [ 100, -5, 45 ]
- [ 50, 50, 135 ]
- [ 120, 100, 45 ]

- { side: left }
- [ 100, -5, 45 ]
- [ 50, 50, 135 ]
-----------------------------------
Sequences are assumed to be x line, y line, and angle.  The angle is 
placed at the end of the line and is used to create an offset.  Essentially, it allows a second path to be drawn slightly outside the first, which is what actually will be cut.  


Mapping come before sequences and can contain notes like "side" or "version".

******************/

?>

<head>
	<meta http-equiv='refresh' content='5'>
</head>

<body>
<table border=1>
<tr><td valign="top" width=30%>

<img src='showsvg.php?name=sample' >

<td valign="top">
<?php $date=`date`;
echo $date; ?>
<h3>
<a href=/> Go back home</a> 
<hr>
<?php include 'reldesc.php'; ?>
<hr>
<pre>
<?php print_r($array); ?>
</pre>
</h3>
</tr>
</table>
</body>
</html>
