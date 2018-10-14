<?php
//Header('Content-type: image/jpeg');

$im = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);
$blue = imagecolorallocate($im, 0, 0, 255);
$green = imagecolorallocate($im, 0, 255, 0);

//Draw a white rectangle
//imagefilledrectangle($im, 0, 0, 249, 249, $white);
//imagefilledrectangle($im, 0, 0, 249, 249, $blue);
//imagefilledrectangle($im, 0, 0, 199, 199, $green);

//Save the image
//header('Content-Type: image/png');
//imagePNG($im, './imagefilledrectangle.png');
//imagedestroy($im);

//$im2 = imagecreatefromjpeg('two.jpg');
//imagePNG($im2, './hello.png');
//imagedestroy($im2);
$img = imagecreatetruecolor(200, 200);

//imagefill($img, 50, 50, imagecolorallocate($img, 220, 220, 220));
//imagejpeg($img);

echo "<h1>The Support Monster On-Call Rota</h1><h3>" . date("d/m/Y") . "</h3><br/>";
//echo "The time is " . date("d/m/Y") . "<br>";

//$faces = array("Kevin", "Gary", "Eaps", "Vic", "Peter", "Alix", "Amit", "Zed");
$faces = array("Kevin", "Gary", "Eaps", "Vic", "Peter", "Alix", "Amit", "Zed", "Sridhar");
foreach ($faces as $face) {
	echo "    <a href='./images/$face.png'>$face</a><br/>";
}

echo "    <a href='./memory.php'>Memory Game</a><br/>";

//imagejpeg('./images/Gary.png');

?>
