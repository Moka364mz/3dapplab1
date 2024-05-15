<!-- This PHP script is used to organize image files for websites. 
It scans a designated directory and collects URLs for image files. 
It only includes files with extensions like jpg, jpeg, gif, or png. 
After gathering the URLs, it presents them as a response string. 
This enables easy integration of images into web pages or galleries. -->
<?php
$directory = '../assets/images/gallery_images';
$imagePath = '../submission/mvc/assets/images/gallery_images';
$allowed_extensions = array('jpg','jpeg','gif','png');
$file_parts = array();
$response = "";
$dir_handle = opendir($directory);

while ($file = readdir($dir_handle)) {
	if (substr($file, 0, 1) != '.') {
		$file_components = explode('.', $file);
		$extension = strtolower(array_pop($file_components));
		if (in_array($extension, $allowed_extensions))
		{
			$response .= $imagePath .'/'.$file.'~';
		}
	}
}
closedir($dir_handle);
echo substr_replace($response,"",-1);
?>