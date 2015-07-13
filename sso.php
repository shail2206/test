<?php
error_reporting(0);
include("conn.php");
		$clientID	= $_REQUEST['masterkey'];
		$select = "select * from $db_name_s.sso";
		$seldata = mysql_query($select,$new1) or die(mysql_error()."select query fail") ;
	   	$cnt =  mysql_num_rows($seldata);
		$row = mysql_fetch_assoc($seldata);
		$clientID = $row['id'];
		$tokenkey = $row['token'];
 		$link1 = $row['link'];

if(isset($_REQUEST['submit']))
{
	$tokenkey = $_REQUEST['tokenkey'];
	$logoutlink = $_REQUEST['logout'];
	$link1 = $_REQUEST['link1'];
	$createdate = time();
		if($cnt==0)
		{
				$insert = "insert into $db_name_s.sso (id,link,token) values(NULL,\"$link1\",\"$tokenkey\")";
				mysql_query($insert,$new1) or die (mysql_error()."insert query fail");
		}
		else
		{
			$modifydate = time();
			$update = "UPDATE  $db_name_s.sso SET  `token` =  \"$tokenkey\",
			 link= \"$link1\"";
			$updata= mysql_query($update,$new1);

		}

}
//include('sso.html');
?>
 <form>
  <table>
				  <tr>
					<td>Token Key </td>
					<td><input type='text' name= 'tokenkey' value="<?php echo $tokenkey ;?>"></td>
				  </tr>	 
				  <tr>
					<td>Client Application Link</td>
					<td><input type='text' name= 'link1' value="<?php echo $link1 ;?>"></td>
				  </tr>

				  <tr>
					<td><input type='submit' value="Submit" name='submit'></td>
					<td></td>
				  </tr>
  </table>
 