<?php
include('../class.Images.php');

//There’s so much to know about an image. Go get some information!

$image = new Image('../test/image3.jpg');

print 'Width: '.$image->getWidth().'<br />';
print 'Height: '.$image->getHeight().'<br />';
print 'Extension: '.$image->getExtension().'<br />';
print 'Mime: '.$image->getMimeType().'<br />';
print 'Type: '.$image->getType().'<br />';
print 'Filesize in Bytes: '.$image->getFileSizeInBytes().'<br />';
print 'Filesize in kBytes: '.$image->getFileSizeInKiloBytes().'<br />';
print 'Filesize readable: '.$image->getFileSize().'<br />';
print 'Ratio Width:Height: '.$image->getRatioWidthToHeight().'<br />';
print 'Ratio Height:Width: '.$image->getRatioHeightToWidth().'<br />';
print 'Is it RGB?: '.$image->isRGB();
