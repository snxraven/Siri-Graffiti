<?php
/* @author     SNXRaven (Jonathon Nickols) <snxraven@gmail.com>
 * @version    1.0
 * @Website    http://siri.grwh.net
 */

$newCommand = $_POST["newCommand"];
if ($newCommand == "")
$newCommand = "To Change this message visit the Graffiti Page";
$myFile = "command.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "{ \"type\": \"success\", \"value\": {\"id\": 1, \"inputCommand\": \"Graffiti\", \"response\": \"$newCommand\" } }";
fwrite($fh, $stringData);
fclose($fh);

$myFile2 = "last.txt";
$fh2 = fopen($myFile2, 'w') or die("can't open file");
$stringData2 = $newCommand;
fwrite($fh2, $stringData2);
fclose($fh2);

echo "The Comand has been edited and is now live on the server.<BR><BR>";
echo "Graffiti now responds: " . $newCommand;
?>
<BR><BR> <form name="input" action="edit.php" method="post">
<input type="submit" value="Back" />
</form>