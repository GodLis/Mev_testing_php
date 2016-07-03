<?php

$handle = fopen("1.txt", "r");
$handle2 = fopen("2.txt", "w+");

while (!feof($handle))
{
$ar = array();
$line = fgets($handle);
if ($line == '')
{
break;
}

$ar = explode('.', $line);
$c = count($ar);
array_push($ar, $c + 1);
$c+= 1;
$ar = array_map('trim', $ar);
echo '<br />';
$s = implode('.', $ar);
echo $s;
fwrite($handle2, "$s\r\n");
while ($c != 1)
{
$c--;
list($ar[$c-1], $ar[$c]) = array(
$ar[$c],
$ar[$c-1]
);
echo '<br />';
$s = implode('.', $ar);
echo $s;
fwrite($handle2, "$s\r\n");
}
}

fclose($handle);
fclose($handle2);
unlink("1.txt");
rename("2.txt", "1.txt");