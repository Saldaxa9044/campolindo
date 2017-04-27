<?php
sleep(1);
include('dbcon.php');
if($_REQUEST)
{
	$username 	= $_REQUEST['rut'];
	$query = "select * from terneros where arete = '".strtolower($username)."'and estado='vendido'";
	$results = mysql_query( $query) or die('ok');
	
	if(mysql_num_rows(@$results) > 0) // not available
	{
		echo '<div   id="Error"><b>Ternero ya existente</b></div>';
	}
	else
	{
		echo '<div  id="Success"><b>Disponible</b</div>';
	}
	
}?>