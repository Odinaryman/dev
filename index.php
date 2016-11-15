<?php 
include('file_library.php');
include('connect.php');
$folder="data/";
$filename=$folder.'eng.htm';
$a=file_get_contents($filename);
$val=array();

$a1=get_tag($a,'table');

foreach($a1 as $key=>$value)
{
	//print_r($value);
	$b=get_tag($value,'tr');
	
	foreach($b as $k => $v)
	{
		//print_r($v);
		$c=get_tag($v,'td');
		//echo ($c[0]);
		//echo ($val1);
		/*foreach($val as $k1=>$v1)
		{
			//print_r($v1);
			$val1=(strip_tags($v1));
			echo $val1;
		}*/
	}
}

$filename1=$folder.'Course.htm';
$p=file_get_contents($filename1);
$p1=get_tag($p,'table');

	foreach($p1 as $key=>$value){
		$pi=get_tag($value,'tr');
		foreach($pi as $k=>$v){
			$pi1=get_tag($v,'td');
			//echo ($pi1);
			//lok
			for($i=0;$i<){
				
			}
		}
	}
?>
