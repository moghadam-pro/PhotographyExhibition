<?php
include_once 'enums.php';

class mysql{
	
    public static function is_sql_injection($sql_query){
		$sql_query = strtolower($sql_query);
		if (   strpos($sql_query,'-- ') 
//			|| strpos($sql_query,';')
			|| strpos($sql_query,'/*')
			|| strpos($sql_query,'*/')
			|| strpos($sql_query,'union')
			|| strpos($sql_query,'drop')
			|| strpos($sql_query,'delete')
			) {
 			   return true;
		}
		return false;
		
	}
    public static function sql_execute($sql_query){
		self::sql_execute_return_table_row($sql_query);
	}
    public static function sql_execute_return_table_row($sql_query){
		if(self::is_sql_injection($sql_query)) 
			return;
		$mysqli = new mysqli(Enums::HostName, Enums::UserName,Enums::Pass, Enums::DBName);

        if (mysqli_connect_errno()) {
            printf("Connect failed: \n");
            exit();
        }

//	    $results = $mysqli->multi_query($sql_query);
	    $results = $mysqli->multi_query("SET NAMES 'utf8';" .$sql_query);
    	$x = 0;
//	    if(!$results)
//			continue ;
	    do{ 
    	if($result = $mysqli->store_result()) { 
	    	if($x==0)
    	    {
//        		$first_res = $result;
            	$x = 1;
        		return mysqli_fetch_array($result);
//			  	print_r(mysqli_fetch_array($first_res));
		  
        	}
	        else
    	    {
        		$second_res = $result;
	        }
	    }            
    	}while( $mysqli->more_results() ? $mysqli->next_result() : false );                                               

		$mysqli->close();
		
  	}        

	public static function sql_execute_return_table($sql_query){
	$mysqli = new mysqli(Enums::HostName, Enums::UserName,Enums::Pass, Enums::DBName);
	
	$mysqli->query("SET NAMES 'utf8';");
	$ret_val = array();
	$result = $mysqli->query($sql_query);
	
	if($result){
	     // Cycle through results
	    while ($row = $result->fetch_array(MYSQL_BOTH)){
	        $ret_val[] = $row;
	    }
	    // Free result set
	    $result->close();
    	if($mysqli->more_results()) $mysqli->next_result();
	}

	return ($ret_val);
	}
	

	public static function sql_execute_return_doubletable($sql_query,$sql_query2){
	$mysqli = new mysqli(Enums::HostName, Enums::UserName,Enums::Pass, Enums::DBName);
	$ret_array = array();
	$mysqli->query("SET NAMES 'utf8';");
	$ret_val = array();
	$result = $mysqli->query($sql_query);
	
	if($result){
	     // Cycle through results
	    while ($row = $result->fetch_array(MYSQL_BOTH)){
	        $ret_val[] = $row;
	    }
	    // Free result set
	    $result->close();
    	if($mysqli->more_results()) $mysqli->next_result();
	}

	$ret_array [] = $ret_val;

	$ret_val2 = array();
	$result2 = $mysqli->query($sql_query2);
	
	if($result2){
	     // Cycle through results
	    while ($row = $result2->fetch_array(MYSQL_BOTH)){
	        $ret_val2[] = $row;
	    }
	    // Free result set
	    $result2->close();
    	if($mysqli->more_results()) $mysqli->next_result();
	}
	$ret_array [] = $ret_val2;

	return ($ret_array);
	}


	
	public static function enum_colums($tbl,$field){
		$res = self::sql_execute_return_table_row("SHOW COLUMNS FROM ".$tbl." WHERE field = '".$field."'");
		$result = str_replace(array("enum('", "')", "''"), array('', '', "'"), $res['Type']);
		$arr = explode("','", $result);
		
		return $arr;
	}	

}


?>