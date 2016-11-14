<?php

function strict_strip($a)
{
	$c=array("&nbsp;","&amp;","&gt;","&lt;");
	$p=array(" ","&",">","<");
	$a=strip_tags($a);	
	foreach ($c as $k=> $v)
	{
		$a=str_replace("$v",$p[$k],$a);	
	}
	return trim(preg_replace('/\s\s+/', ' ',$a));
}
	
	function get_tag($a,$tag)
	{
		$a=str_replace("`","#%*)",$a);
		$a=str_replace("~","(*%#",$a);
		$a= preg_replace("/<{$tag}[^>]*>/", 
				 "`", 
				 $a);
				 
		$a= preg_replace("/<\/{$tag}>/", 
				 "~", 
				 $a);
		preg_match_all("/`([^~]*)~/",$a,$out, PREG_PATTERN_ORDER);
		foreach ( $out[1] as $key => $value)
		{
			$out[1][$key]=str_replace("`","#%*)",$value);
			$out[1][$key]=str_replace("~","(*%#",$value);
		}
		return $out[1];
	}
	
	
	function get_all_tags ($a)
	{
		$a=str_replace("\n","",$a);
		preg_match_all("|(<([\w]+)[^>]*>)(.*)(<\/\\2>)+|U", $a, $out, PREG_SET_ORDER);
		return $out;
	}
	
	
	function remove_tag($a,$tag)
	{
		$a=str_replace("`","#%*)",$a);
		$a=str_replace("~","(*%#",$a);
		$a= preg_replace("/<{$tag}[^>]*>/", 
				 "`", 
				 $a);
				 
		$a= preg_replace("/<\/{$tag}>/", 
				 "~", 
				 $a);
		$a= preg_replace("/`[^~]*~/", 
				 "", 
				 $a);
		$a=str_replace("#%*)","`",$a);
		$a=str_replace("(*%#","~",$a);
	
		return $a;
	}
	
	

?>