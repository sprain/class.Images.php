<?php

//first same stuff as in example1.php
include('../class.Images.php');
$image = new Image('../test/image1.png');
$image->rotate(90);
$image->resize(150,150,'crop');

/*
  Now save the file. First give a filename (without file extension, the class will figure it out!)
  Then, optionally, give path to the folder where you want the image to be saved.
  Of course, this directory will have to be writable! */
$image->save("newFilename", "../test");

/*
  and... oh pretty wow! If the path of the image is accessible to the browser
  you can now even display the whole HTML code of the <img>-Tag */
$image->displayHTML();