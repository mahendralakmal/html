<div id="left">
<form id="contact_form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div id="contact">Contact Me</div>
<div id="Cfield">

<p id="label"> Name</p><div id="field"><input type="text" name="Name" ></div>
<p id="label"> Email</p><div id="field"><input type="text" name="Email" ></div>
<p id="label"> Your message</p><div id="field"><textarea name="Message" rows="10">
</textarea></div>
</br>
<input type="submit" value="Send Message">
</div>
</form>

<?php
if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Message']) ) {
$to = "nishantha@neurosurgerysl.com";
$subject = $_POST['Name'];
$message = $_POST['Message'];
$from = $_POST['Email'];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
}
?> 
</div>