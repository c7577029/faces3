<?php
//Header('Content-type: image/jpeg');

echo "<h1>The Support Monster On-Call Rota</h1><h3>" . date("d/m/Y") . "</h3><br/>";
//echo "The time is " . date("d/m/Y") . "<br>";

$faces = array("Kevin", "Gary", "Eaps", "Vic", "Peter", "Alix", "Amit", "Zed");
//$faces = array("Kevin", "Gary", "Eaps", "Vic", "Peter", "Alix", "Amit", "Zed", "Sridhar");
foreach ($faces as $face) {
	echo "    <a href='./images/$face.png'>$face</a><br/>";
}

//echo "    <a href='./memory.php'>Memory</a><br/>";
?>
