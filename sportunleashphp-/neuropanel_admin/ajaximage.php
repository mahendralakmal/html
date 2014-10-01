<?php

$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))

&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("../upload/" . $_FILES["file"]["name"]))
      {
     $dum =rand(5,15);
    $_FILES["file"]["name"]= $dum.$_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "../upload/" . $_FILES["file"]["name"];
      }
    else
      {
     
$_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "../upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }

?> 
<?php 
include("db.class.php");
echo "<br>";
$Image = '/upload/'. $_FILES["file"]["name"];
$Heading = $_POST['feature'];
$id = $_POST['id'];


$insert = new DB;

$insert->connect();

$where = "id='".$id."'";
$Des = $_POST['Des'];


if($_FILES['file']['error'] == 0) {
$dpack = array(
"Image" => "'$Image'",
"Heading" =>"'$Heading'",
"Des" => "'$Des'"
);
} else {
$dpack = array(
"Heading" =>"'$Heading'",
"Des" => "'$Des'"
);

}

$true = $insert->update($dpack,"feature",$where);
echo $Heading;

header("location:/sportunleashphp/neuropanel_admin/");

?>
