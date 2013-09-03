<?php
include('../class.Images.php');

for ($i = 1; $i <= 8; $i++) {
    $Image = new Image('image'.$i.'.jpg');
    $newWidth = 200;
    $newHeight = 200;
    $Image->resize($newWidth, $newHeight, 'crop', 'l', 't');
    $Image->save('testimage_square_'.$i);
    $Image->displayHTML();
}//for

for ($i = 1; $i <= 8; $i++) {
    $Image = new Image('image'.$i.'.jpg');
    $newWidth = 600;
    $newHeight = 200;
    $Image->resize($newWidth, $newHeight, 'crop', 'l', 't');
    $Image->save('testimage_landscape_'.$i);
    $Image->displayHTML();
}//for

for ($i = 1; $i <= 8; $i++) {
    $Image = new Image('image'.$i.'.jpg');
    $newWidth = 200;
    $newHeight = 600;
    $Image->resize($newWidth, $newHeight, 'crop', 'l', 't');
    $Image->save('testimage_portrait_'.$i);
    $Image->displayHTML();
}//for