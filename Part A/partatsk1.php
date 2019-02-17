<?php

session_start();

$SESSION['pages'] = array();

$_SESSION['pages'][0] = "partatsk1";

echo $_SESSION['pages'][0];

?>