<?php
//Header('Content-type: image/jpeg');

echo "<h1><u>UK & NL Support Team</u></h1><h3>" . date("d/m/Y") . "</h3><br/>";
//echo "The time is " . date("d/m/Y") . "<br>";

//$faces = array("Kevin", "Gary", "Eaps", "Vic", "Peter", "Alix", "Amit", "Zed");
$faces = array("Kevin", "Gary", "Eaps", "Vic", "Peter", "Alix", "Amit", "Zed", "Sridhar");

echo "<h2>Select WITH CAUTION!!</h2><br/>";

foreach ($faces as $face) {
	echo "    <a href='./images/$face.png'>$face</a><br/>";
}

//echo "    <a href='./memory.php'>Memory</a><br/>";
?>
