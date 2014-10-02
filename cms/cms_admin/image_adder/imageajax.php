<script type="text/javascript" >
$(document).ready(function() {
  $(".ipic").click(function() {
    var url = $(this).attr('src');
    var TheTextBox = document.getElementById("url");
	var base ="/cms_admin/Image_adder/";
    TheTextBox.value =base + url;
    

  });
 });
</script>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(isset($_GET['dir'])){
$dirname = "uploads/".$_GET['dir']."/" ;
} else {
$dirname = "uploads/";}
$images = scandir($dirname);

//$images = array_slice($images, 2,10);
$ignore = Array(".", "..", "otherfiletoignore");
foreach($images as $curimg){
if(!in_array($curimg, $ignore)) {
$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $curimg));
if(in_array($extension, $allowedExts)) {
echo '<div id="imagex1"><img class="ipic" style="width:120px;height:100px;border:solid 2px #efe4e4;" src="Image_adder/'.$dirname.$curimg.'" /></div>';
}else { echo '<div id="imagex1"><a href="?dir='.$curimg.'"><img src="Image_adder/images/folder.jpg" style="width:120px;height:100px;border:solid 2px #efe4e4;"></a><br><p id="imagex1name">'.$curimg.'</p></div>';}


}; 
}  
  ?> 