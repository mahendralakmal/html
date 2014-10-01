<div id="left">
<script type="text/javascript" src="js/javascript.js">
</script>
<script type="text/javascript" src="js/jquery.form.js">
</script>

<?php
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname,$conn);
$sql = "SELECT * from feature";
$result= mysql_query($sql);


while($row=mysql_fetch_array($result)) {

echo '<div id="Fdedit"><img src="'.$basemain.$row['Image'].'" style="float:left;width:120px;height:120px;">
<form id="imageform" method="post" enctype="multipart/form-data" action="ajaximage.php">
<h1>'.$row['Heading'].'</h1>
<select name="feature">';?>



<?php
$sql2 = "SELECT * from contents";
$result2= mysql_query($sql2);
while($row2=mysql_fetch_array($result2)) {
?>
<option <?php if($row2['id'] == $row['Heading'] ) {echo "selected"; } ?> value="<?=$row2['id'];?>"><?=$row2['title'];?></option>
<?php
}?>


<?php
echo '
</select>';?>
</br>
<font color="#13309c" >Give your Intro description here...</font></br>
<textarea Style="width:100%;height:200px;" name="Des" ><?=$row['Des'];?></textarea></br>
Upload your image <input type="file" name="file" id="photoimg" />
<br>
<input type="hidden" value="<?=$row['id'];?>" name="id">
<input type="submit" value="Change">
</form>
<div id='preview'>
</div>
</div>
<?php 
}
?>

</div>