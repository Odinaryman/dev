<?php 
require_once('connect.php');
$query = "create table if not exists  datatables(
          id int auto_increment not null, primary key(id),
		  title text not null,
		  course varchar(255) not null,
		  year int not null,
		  part varchar(255) not null,
		  description text not null,
		  content text not null,
		  type varchar(255) not null,
		  tags int not null)
		  ";
		  
mysql_query($query,$connect) or die ('could not create datatable table'.mysql_error());
if(isset($query)){echo "datatable creation successful.<br />";
}else
{echo "datatable was not created .<br />";};
?>