<?php



    header('Content-type: image/jpeg');
	
	$name = $_GET['fname'];
	
	$string1 = "Brended did you see $name kill her?";
	
	
    $source = "images/image.jpg";
	
	$image = imagecreatefromjpeg($source);

	
	$font = "arial.ttf";
	
	$color = imagecolorallocate($image, 255,255,255);
	
	$x=25;
	$y=50;	
	
	imagettftext($image,30,0,$x,$y,$color,$font,$string1);
	
	imagejpeg($image);
?>