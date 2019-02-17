<?php

session_start();


//echo $_SESSION['pages'][0] . $_SESSION['pages'][1] . $_SESSION['pages'][2] . $_SESSION['pages'][3];

unset($_SESSION['pages'][2]);
unset($_SESSION['pages'][1]);

print_r($_SESSION['pages']);


 /*foreach($_SESSION['pages'] as $key => $value){
          echo "Key:".$key."=>:".$value;
      }

*/
?>