<?php
unset($_SESSION["role"]);
unset($_SESSION["roleName"]);
session_destroy();
header("Location:login.php");
