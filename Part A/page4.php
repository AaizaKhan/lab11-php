<?php

session_start();

$_SESSION['pages'][3] = "page4";

echo $_SESSION['pages'][3];



?>