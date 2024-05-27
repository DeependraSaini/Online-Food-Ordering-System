<?php

session_start();
session_destroy();

echo "<script>alert('you have successfully logout');window.location.href='dashboard.php';</script>";

?>