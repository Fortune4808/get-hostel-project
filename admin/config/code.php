<?php include '../../config/config.php';?>

<?php 
	$action=$_POST['action'];
	  switch ($action){

		case 'get_form':
			$page=$_POST['page'];
			require_once ('form.php');
		break;

		case 'login':
			// $_SESSION['staff_id']=trim($_POST['staff_id']);
			// $_SESSION['access_key']=trim($_POST['access_key']);
		break;

		case 'reset_password':
			$page=$action;
			require_once ('form.php');
		break;
	  
	  case 'logout':
		session_destroy();
		?>
		<script>
		window.parent(location="account");
		</script>
		<?php
	break;





	
}
?>
	