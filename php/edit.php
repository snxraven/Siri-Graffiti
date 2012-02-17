<?php
/* @author     SNXRaven (Jonathon Nickols) <snxraven@gmail.com>
 * @version    1.0
 * @Website    http://siri.grwh.net
 */
?>
Command | "Graffiti":
<BR>

<form name="input" action="edit-done.php" method="post">
Response: <input type="text" name="newCommand" />
<input type="submit" value="Save to Server" />
</form>

<?php
$myFile = "last.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo "The last response sent is: " . $theData;
?>