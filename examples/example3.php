<?php
include('../class.Images.php');

$mainImage = '../test/image2.jpg';
$pathToSaveFiles = '../test'; //must be writable

/*
  If you resize an image, the standard value is 'fit'. This means, your image
  will be resized so it fits within the provided width and height without
  losing its aspect ratio. So what you deliver is basically the maximum
  width and height of the new image, but very likely one side of the
  image will turn out smaller. */
  
$image = new Image($mainImage);
$image->resize(300,100);
$image->save('fit', $pathToSaveFiles);
$image->displayHTML();


/*
  If you set the option 'fill' the image will fill the whole width and
  height you provided. But it will loose it aspect ratio. So be ready
  to see your image deformed.*/
  
$image = new Image($mainImage);
$image->resize(300,100, 'fill');
$image->save('fill', $pathToSaveFiles);
$image->displayHTML();


/* 
  If you choose to 'crop' the image, it won't lose its aspect ratio but
  parts of the image will be cut off. */
  
$image = new Image($mainImage);
$image->resize(300, 100, 'crop');
$image->save('crop', $pathToSaveFiles);
$image->displayHTML();