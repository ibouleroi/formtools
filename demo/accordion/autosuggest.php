<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_REQUEST['act']) && $_REQUEST['act'] =='autoSuggestUser' && isset($_REQUEST['queryString'])) {
$db_host = 'localhost';
$db_user = 'root';
$db_password = '12345';
$db_name = 'jsdb';

$connect = mysql_connect($db_host, $db_user ,$db_password);
$db = mysql_select_db($db_name,$connect);
if($db){
$string = '';
$queryString = $_REQUEST['queryString'];
$query = "SELECT * FROM countries WHERE name like'" .$queryString . "%' ORDER BY name";
$resource = mysql_query($query);

if($resource && mysql_num_rows($resource) > 0) {
$string.= '<ul>';
while($result = mysql_fetch_object($resource)){
$string.= '<li onClick="fillId(\''.addslashes($result->id).'\');fill(\''.addslashes($result->name).'\');">'.$result->name.'</li>';
}
$string.= '</ul>';

} else {
$string.= '<li>No Record found</li>';
}
echo $string;
exit;

}
exit;
}