<?php
session_start();
session_destroy();
header("location:/sportunleashphp/neuropanel_admin/Login.php");
?>