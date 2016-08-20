<?php 

	session_start();
		if ($_SESSION['login']==true){
			$_SESSION['ready']=true;

?>

<h1>Xos geldin Admin</h1>
<a href="logout.php">Exit</a>
<?php
}else{
	header('Location: index.php');
}
?>
	
