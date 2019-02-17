<?php

session_start();

$_SESSION['pages'][1] = "page2";

echo $_SESSION['pages'][1];

?>