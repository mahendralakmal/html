<?php
session_start();
session_destroy();
header("location:/cms/cms_admin/Login.php");
?>