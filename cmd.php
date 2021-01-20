<?php
    header("Content-type: text/html; charset=utf-8");
    date_default_timezone_set('prc');
    set_time_limit(0); 
    
    function include_back_slash($str)
    {
        $last_char = substr($str, -1);
        if($last_char != "/"){
            $str = $str . "/";
        }
        return $str;
    }
	$action = @$_GET['action'];
	//echo $action . "----------";
	if('del' == strtolower($action)){
		unlink('./cmd.tmp');
		echo "done";
	}else{
		$rst = '';
		if(file_exists('./cmd.tmp')){
			$rst = file_get_contents('./cmd.tmp');	
		}
		echo $rst;
	}
?>
