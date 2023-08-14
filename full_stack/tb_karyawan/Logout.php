<?php 
 
session_start();
session_destroy();
 
header("Location:  ../DASHBOARD/dashboard_siswa.php");
 
?>