#class.Images.php

Yes, I know. It is yet another image manipulation class for PHP. But so far I haven’t found the one that really matches my needs. Either they are too complicated or bound to another system. So I simply created my own class with just the functions I need. So it’s the perfect class for me. If you like it, too – even better! Feel free to contribute and make it better.

## Examples

Check out the examples folder for more examples.

### Basic example
Here’s a basic example of what you can do and this is what you’ll get with it.

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




## Contact

Manuel Reinhard, <manu@sprain.ch> ·
<http://twitter.com/sprain> ·
<http://www.sprain.ch>


## License

Copyright (c) 2010-2012 Manuel Reinhard

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
