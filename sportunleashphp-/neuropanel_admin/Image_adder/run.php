
<form>
<input type="text" name="url" id="url" style="width:300px;">
<input type="submit" value="add">
</form>
<?php
if(isset($_POST['attr'])) {
		if($_POST['attr'] == "#folder") {
		include("folder.php");
		}elseif($_POST['attr'] == "#up") {

		include("imageajax.php");
		} 
		else {

        include("imageonlyajax.php");
        }
} 
else {
include("image.php");
}

?>
