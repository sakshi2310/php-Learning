<?php 
	header("content-type:image/jpg");
	$image=imagecreate(200,200);
	imagecolorallocate($image,90,202,87);
	imagepng($image);
	imagedestroy($image);
 ?>