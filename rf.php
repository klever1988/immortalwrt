<?php
$nb=(chr(0));
var_dump($nb);
var_dump(chr(0));
$fs=filesize('nfimg'); echo $fs."\n";

$fp = fopen('nfimg', 'r');

// read some data

// move back to the beginning of the file
// same as rewind($fp);
$step=1024;
for($i=-134223865;$i>=-$fs;$i=$i-$step) {
fseek($fp, $i, SEEK_END);
$b=fread($fp,$step);
echo (dechex($fs+$i)."\t".$i."\r");
if ($b!=0) {
	var_dump ($b);
	echo dechex($fs+$i)."\t".$i;
	break;
}
}


function replaceOut($str)
{
    $numNewLines = substr_count($str, "\n");
    echo chr(27) . "[0G"; // Set cursor to first column
    echo $str;
    echo chr(27) . "[" . $numNewLines ."A"; // Set cursor up x lines
}

