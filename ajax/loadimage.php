<?php
//path to directory to scan
$directory = "../img/gallery/"; 
//get all image files with a .jpg extension.
$images = glob($directory . "*.jpg");
//print each file name
foreach($images as $image){
$realimage = str_replace("../", "", $image);
echo "<li>
      <a href=\"$realimage\" title=\"Helony Concept\">
      <img src=\"$realimage\"  alt=\"Image\" /></a>
	  </li>" ;
}
?>