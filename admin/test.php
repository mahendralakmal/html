<?php
$connection = mysql_connect("localhost", "root", "p3roo7");
$database = mysql_select_db("sportunleash");
$query = mysql_query("select * from country", $connection);
$rows = mysql_num_rows($query);
if ($rows > 0) {
	while($row = mysql_fetch_array($rows, MYSQL_ASSOC)){
		echo "id{$row['countryid']} name{$row['Country']}";
	}
}

?>
