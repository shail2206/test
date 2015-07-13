<?php
// required variable email, first name,  last name , city , country , 
class test
{
function update($useremail,$firstname,$lastname,$city,$country,$temppass,$registrationdate){
	
	global $db_name1,$db_name_s,$new,$new1;
	include("conn.php");
	$rand  =  rand(0, 15);
	
	 $time = time();
	
	$temppass = $rand.$time;

	$temppass = md5($temppass);
	$registrationdate1  = strtotime($registrationdate);
	$sel = "select * from $db_name_s.external_user where email = \"$useremail\"";

	$fire= mysql_query($sel,$new1);
 	$cnt = mysql_num_rows($fire);
	if($cnt==0)
	{
			$now = time();
			$insert="insert into $db_name_s.external_user (id,email,firstname, lastname, city,country, temp_pass,date,flag,registration_date) values(NULL,   
			"."'$useremail'".",\"$firstname\",\"$lastname\",\"$city\",\"$country\",\"$temppass\",$now,\"Y\",\"$registrationdate1\")";
			///mysql_query($insert,$new1) or die (mysql_error()."insert fail 1 ");
			mysql_query($insert,$new1);
			$insert="insert into $db_name1.external_user (id,email,firstname, lastname, city,country, temp_pass,date,flag,registration_date) values(NULL,   
			"."'$useremail'".",\"$firstname\",\"$lastname\",\"$city\",\"$country\",\"$temppass\",$now,\"Y\",\"$registrationdate1\")";
			mysql_query($insert,$new) or die (mysql_error()."insert fail ");
	}
	/*else
	{
			we can use this secstion for future update action if required right now there is no such need
	}*/
}
}
?>