<?php
	include_once('../connection/db.php');

	$a = 'Ivan';
	function check_email(){
		GLOBAL $db;
		if(isset($_POST['check_email'])){
			$email = $_POST['check_email'];
			$Query = $db->prepare("SELECT email FROM users WHERE email = ?");
			$Query->execute(array($email));
			if($Query->rowCount() == 0){
				echo json_encode(array('error' => 'email_success'));
			}else{
				echo json_encode(array('error' => 'email_fail', 'message' => 'Sorry this email is already exist'));
			}
		}
	}
	check_email();
?>