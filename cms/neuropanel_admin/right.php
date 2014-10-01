<div id="right">
<?php 
$dpack=new DB();
$dpack->connect();
$sql="SELECT * from menu";
$data=$dpack->query($sql);

?>

	
   <ul id="menu">
   <li><a href="logout.php"> Log Out </a></li>
   <li><a href="imageup.php" target="blank"> image </a></li>

   <?php $i=0; while($i<count($data)) {?>
   <li>
<a href="<?php if($data[$i]['id'] == 2 ) {echo "index.php";} 
elseif($data[$i]['id'] == 17 )  {echo "subpage.php?id=68&ec=";}
else {echo "page.php?id=".$data[$i]['id']."&ec=";}?>">



<?php echo $data[$i]['title'];?></a></li>
   <?php $i++; }?>
   </ul>


</div>
