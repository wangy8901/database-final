<?php

//session to save the state
session_start();
session_destroy();

//message
header ("location:index.php?logout = You are successfully Logout");

?>