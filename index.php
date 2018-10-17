<?php
//Header('Content-type: image/jpeg');

echo "<h1><u>The UK & NL Monster Support On-Call Rota</u></h1><h3>" . date("d/m/Y") . "</h3><br/>";
//echo "The time is " . date("d/m/Y") . "<br>";

$faces = array("1) Kevin", "2) Gary", "3) Eaps", "4) Vic", "5) Peter", "6) Alix", "7) Amit", "8) Zed");
//$faces = array("Kevin", "Gary", "Eaps", "Vic", "Peter", "Alix", "Amit", "Zed", "Sridhar");

echo "<h2>Select support resource from list</h2><br/>";

foreach ($faces as $face) {
	echo "    <a href='./images/$face.png'>$face</a><br/>";
}

//echo "    <a href='./memory.php'>Memory</a><br/>";
?>
