<?php
include('../class.Images.php');

//Create a new object, send relative or absolut path to your image
$image = new Image('../test/image1.png');

//We can rotate the image
$image->rotate(90);

//and we can resize and crop it to have a nice thumbnail
$image->resize(150,150,'crop');
	
//lets see what we have!
$image->display();