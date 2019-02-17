<?php

session_start();

$_SESSION['pages'][2] = "page3";

echo $_SESSION['pages'][2];

?>