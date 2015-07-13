<?php

require 'myFile.php';
/**************************************************/
// Your code starts here...
/**************************************************/

$email = $user->email;
 include('conn.php');
 $sel = "select email , temp_pass from $db_name_s.external_user where $db_name_s.external_user.email = \"$email\"";
 $fire=mysql_query($sel,$new1) or die (mysql_error().'error here');
 $row= mysql_fetch_assoc($fire);
 $token = $row['temp_pass'];
 $getParantdata =   "select token, link from $db_name_s.sso ";
 $fire1=mysql_query($getParantdata,$new1) or die (mysql_error().'error here');
 $ro1= mysql_fetch_assoc($fire1);
		$ptk = $ro1['token'];
		$link=$ro1['link'];

		

echo "<form name='login' method='POST' id='login'  action='http://oliverslearning.qlogy.com/login/index.php'>";
 echo "<input type='hidden' name='username' value='$email'>";
 echo "<input type='hidden' name='password'  value='$token'>";
 echo "<input type='hidden' name='ssso'  value='1'>";
 echo "<input type='hidden' name='ptk'  value=\"$ptk\">";
 echo "<input type='hidden' name='link'  value=\"$link\">";
 echo "<input type='hidden' name='url'  value=\"$url\">";

echo "<a href=\"javascript: submitform()\">login on moodle</a>";
 echo "</form>";
?>
<script type="text/javascript">
function submitform()
{
    if(document.login.onsubmit &&  !document.login.onsubmit())
    {
        return;
    }
 document.login.submit();
}
</script>
