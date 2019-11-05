<?php
//require_once 'database.php';
$return_arr = array();


//if($result = mysql_query("SELECT * FROM personal_info
//where cdc LIKE '%" . mysql_real_escape_string($_GET['term']) . "%' group by cdc"))
{
	//while ($row = mysql_fetch_assoc($result))
	for($i=0;$i<12;$i++)
	 {
        //$row_array['value'] = $row['cdc'];
        $row="student ".$i;
        $row_array['value'] = $row;

         
        array_push($return_arr,$row_array);
    }
	//mysql_close($sql_connection); 
	echo json_encode($return_arr);
}

?>