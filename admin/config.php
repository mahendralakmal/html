<!--<?php
$Title="sportunleash";
$base="http://www.sportunleash.com/";
$basemain="http://www.sportunleash.com/sus_admin";
$dbname="sportunleash"; 
$dbuser="root"; 
$dbpass="p3roo7";
$dbhost="localhost";  
?>-->

<?php
    //Enter your database connection details here.
    $host = 'localhost'; //HOST NAME.
    $db_name = 'sportunleash'; //Database Name
    $db_username = 'root'; //Database Username
    $db_password = 'p3roo7'; //Database Password

    try
    {
        $pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }
?>