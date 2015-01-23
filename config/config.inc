<?php 
$connection = mysql_connect('127.0.0.1','root','12345');
$selectdb = mysql_select_db('jsdb',$connection);
if($selectdb){
return true;
}else{
return false;
}
?>
