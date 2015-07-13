<?php
//Oliver user fetch function
global $db, $user;
include_once('include/h.inc.php');

// $user =& JFactory::getUser();

//Oliver user fetch function



    if ($user->email!='') {
				$sso = new test();
			
//Variable
            $sso->update($user->email,$user->real_name,$user->date_joined,$user->username,$user->city, $user->country);
//Variable    
	} 
	else {
      
    }
?>