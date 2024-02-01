<?php 
include("./DataBaza/ConfigSession.php");
session_destroy();
session_unset();

header("Location: ./Login/login.php?logout=true ")
?>