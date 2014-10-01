<?php
$dir = $_POST['dir'];
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
    /*echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";*/

    if (file_exists("uploads/". $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
$dum = rand(2,300);
$_FILES["file"]["name"] = $dum . $_FILES["file"]["name"];
	  $fpath = "uploads/".$_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],$fpath);
      }
    else
      {
	  $fpath = "uploads/".$_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],$fpath);
     /* echo "Stored in: " . $dir ."/". $_FILES["file"]["name"];
echo "<br>".$fpath;*/
  header('Location:http://www.neurosurgerysl.com/neuropanel_admin/imageup.php');

      }
    }
  }
else
  {
  echo "Invalid file";
  }

?> 
