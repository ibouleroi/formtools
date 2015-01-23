<?php
include("./config/config.inc");
public class appUser(){

public function index(){
$query = mysql_query("select * from potluck");

	while($row = mysql_fetch_array($query)){
		$data[] = $row;
	}
return $data;
}
 
}
?>
