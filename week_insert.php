<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$week=$_POST['week'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO week(week_id,week) 
VALUE(NULL,'".$week."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$week.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>