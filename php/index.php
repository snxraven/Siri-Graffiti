<?php

/* @author     SNXRaven (Jonathon Nickols) <snxraven@gmail.com>
 * @version    1.0
 * @Website    http://siri.grwh.net
 */

$myFile = "command.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;


?>