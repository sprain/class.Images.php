<?php
include('../class.Images.php');

/*
  Let’s say you want your user to upload an image which has an exact aspect ratio of 1:2.
  How do you check that? Nothing easier than that! */

$image = new Image('../test/image3.jpg');
if($image->checkRatio(1,2)){
	print 'Yes, you made it!';
}else{
	print 'Sorry dude, the actual ratio is 1:' . round($image->getRatioWidthToHeight(), 2);
}