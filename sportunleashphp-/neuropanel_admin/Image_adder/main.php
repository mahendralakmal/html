<link rel="stylesheet" type="text/css" href="Image_adder/css/style.css" >
<script src="Image_adder/js/jquery.min.js" ></script>

<!--<script type="text/javascript" >
$(document).ready(function() {
$(".tab").click(function() {
     
	 var attr = $(this).attr('href');
     $.ajax({ 
     type:'POST',
     url:'Image_adder/run.php',
     data:'attr=' + attr,
	 beforesend:function() {
	 $("#load").show();
	 
	 },
     success:function(msg) {
	 $("#display").hide();
     
     $("#preview").html(msg);
	 $("#preview").slideDown("slow");
	 
     }




     });
  });
});
</script>
-->
<div id="wrapperimg">


<?php $dirname="Image_adder/uploads/";
include("Image_adder/uploadform.php");?>
<div id="display">
   <?php include("run.php");?>
</div>
</div>


