<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {

box-sizing: border-box;

}

.center {

margin: auto;

width: 60%;

padding: 10px;

}

body {

margin: 0;

}

.column {

float: left;

width: 33.33%;

padding: 10px;

text-align:center;

}

</style>
</head>

<?php
$fnumber = $_POST["side1"];

$snumber = $_POST["side2"];

$tnumber = $_POST["side3"];


$tritype="";

$my_file = 'mytri.log';

if ($fnumber < 0) {

$fnumber = abs($fnumber);

}if ($snumber < 0) {

$snumber = abs($snumber);

}if ($tnumber < 0) {

$tnumber = abs($tnumber);

}

?>
<body>

<div class="center"><h2>The three numbers are....</h2>

<div class="row">

<div class="column" style="background-color:#aaa;">

<p><div class=center><h1><?php echo $fnumber;?></h1></div></p>

</div>
</div>

<div class="column" style="background-color:#bbb;">

<p><div class="center"><h1><?php echo $snumber;?></h1></div></p>

</div>

<div class="column" style="background-color:#ccc;">

<p><div class="center"><h1 style="text-align:center"><?php echo $tnumber;?></h1></div></p>

</div>

</div>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>
<?php

if (($fnumber==0) and ($snumber==0) and ($tnumber==0)){

echo '<div class="center"><h1>Error! Three zeros dont make a triangle!</h1><br><img src = http://nb4692.neu.edu/itc3150/kiely.m/triangle/tri-not.jpg></div>';

//log file write

$my_file = 'mytri.log';
$tritype = 'Error';

$handle = fopen($my_file, 'a') or die('Cannot open file: '.$my_file);

$data = $fnumber.';' .$snumber.';'.$tnumber.';'.$tritype.PHP_EOL;

fwrite($handle, $data);

fclose($handle);
}

else if(($fnumber + $snumber < $tnumber) || ($snumber+$tnumber < $fnumber) || ($snumber + $tnumber<$fnumber)){

$tritype= "notATriangle";

echo '<div class="center"><h1>Not valid! Please enter numbers that can actually make a triangle (the length of any side must be less than the sum of the other two sides)<br><img src = http://nb4692.neu.edu/itc3150/kiely.m/triangle/tri-not.jpg></div>';

//log file write

$my_file = 'mytri.log';

$handle = fopen($my_file, 'a') or die('Cannot open file: '.$my_file);

$data = $fnumber.';' .$snumber.';'.$tnumber.';'.$tritype.PHP_EOL;

fwrite($handle, $data);

fclose($handle);

}

else if (($fnumber == $snumber) and ($snumber == $tnumber) and ($fnumber== $tnumber)) {

$tritype="Equilateral";

echo '<div class="center"><h1>This triangle is an Equilateral Triangle!<br><img src = http://nb4692.neu.edu/itc3150/kiely.m/triangle/tri-equ.jpg> </div>';

//log file write

$my_file = 'mytri.log';

$handle = fopen($my_file, 'a') or die('Cannot open file: '.$my_file);

$data = $fnumber.';' .$snumber.';'.$tnumber.';'.$tritype.PHP_EOL;

fwrite($handle, $data);

fclose($handle);
}


else if (($fnumber!=$snumber and $snumber!=$tnumber ) or ($fnumber!=$tnumber and $tnumber!=$snumber) or ($snumber!=$tnumber and $tnumber!=$fnumber)) {

$tritype="Scalene";

echo '<div class="center"><h1>This triangle is a Scalene Triangle!<br><img src = http://nb4692.neu.edu/itc3150/kiely.m/triangle/tri-scal.jpg> </div>';

//log file write

$my_file = 'mytri.log';

$handle = fopen($my_file, 'a') or die('Cannot open file: '.$my_file);

$data = $fnumber.';' .$snumber.';'.$tnumber.';'.$tritype.PHP_EOL;

fwrite($handle, $data);

fclose($handle);


}


else if (($fnumber==$snumber and $fnumber != $tnumber) or ($fnumber==$tnumber and $fnumber != $snumber) or ($snumber==$tnumber and $snumber != $fnumber)) {

$tritype="Isosceles";

echo '<div class="center"><h1>This triangle is an Isosceles Triangle!<br><img src= http://nb4692.neu.edu/itc3150/kiely.m/triangle/tri-isos.jpg></div>';

//log file write

$my_file = 'mytri.log';

$handle = fopen($my_file, 'a') or die('Cannot open file: '.$my_file);

$data = $fnumber.';' .$snumber.';'.$tnumber.';'.$tritype.PHP_EOL;

fwrite($handle, $data);

fclose($handle);

}

echo '</div></div><hr><br></body></html>';

?>