<?php
//Detail of Oliver moodle site

$db_host1	= "173.203.109.41";//Server ip of oliver moodle site
$db_name1	= "oliverClient";	  //Database name - modify this	
$db_user1	= "oliverClient";		  //Database user name
$db_password1 = "@@##!!12OL";		  //Database password
//Detail of Oliver moodle site


//Details of client application

$db_host_s	= "localhost";			//Client Server ip
$db_name_s	= "oliversl_exam";		//Database name - modify this	
$db_user1_s	= "oliversl_exam1";			//Database user name
$db_password1_s = "n34E677tj";		//Database password
//Details of client application


$new=@mysql_connect($db_host1,$db_user1,$db_password1);
@mysql_select_db($db_name1,$new) or die ("data base");

$new1=mysql_connect($db_host_s,$db_user1_s,$db_password1_s);
mysql_select_db($db_name_s,$new1) or die ("data base1");
?>