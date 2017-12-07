<?php

//session to save the state
session_start();
session_destroy();

//message
//header ("location: index.php");
echo "<script>
		alert('You are successfully Logout');
		window.location.href = 'index.php';
	</script>";
?>