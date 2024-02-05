<?php 
	define("HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
	define("DB_NAME","hrm");
	
	
	$db = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	
	if(!$db)
	{
		die(mysqli_error());
	}
	
	/*$sql = 'INSERT INTO login_attendance 
VALUES (?,?)';

$stmt = $db->prepare($sql);
$stmt->bind_param('s', $_SESSION['role'],$_SESSION['user_name'],$_SESSION['user_name']);
	$stmt->execute();*/
	
	function getUserAccessRoleByID($id)
	{
		global $db;
		
		$query = "select name from manage_emp where emp_code = ".$id;
	
		$rs = mysqli_query($db,$query);
		$row = mysqli_fetch_assoc($rs);
		
		return $row['name'];
	}
	

       
?>
