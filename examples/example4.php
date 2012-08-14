<?php
include('../class.Images.php');

$mainImage = '../test/image3.jpg';
$pathToSaveFiles = '../test'; //must be writable

/*
  Now, there’s more to cropping! You can choose
  which part of the original image you want to see on
  the cropped image.
  Simply set l, r, or c for left, right or center
  and b, t or c for bottom, top or center.
  Go play around, not all combinations make sense
  for every image. It depends whether the
  image’s format is landscape or portrait. */
  
$image = new Image($mainImage);
$image->resize(400, 400, 'crop', 'l', 'b');
$image->save('left-bottom', $pathToSaveFiles);
$image->displayHTML();

$image = new Image($mainImage);
$image->resize(400, 400, 'crop', 'r', 't');
$image->save('right-top', $pathToSaveFiles);
$image->displayHTML();

$image = new Image($mainImage);
$image->resize(400, 400, 'crop', 'c', 'c');
$image->save('center-center', $pathToSaveFiles);
$image->displayHTML();