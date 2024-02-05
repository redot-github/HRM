<?php

// Include the database configuration file
require_once('inc/config.php');

// Get images from the database
$id= $_SESSION['username'];
$query = $db->query("SELECT user_role FROM user_login WHERE username = '$id'");
?>
<?php
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
		$role_id = $row["user_role"];
		 return $role_id;
         }
                
}

?>   
