<?php
ob_start();
echo 'Hello';
$var1 = ob_get_contents();
ob_end_clearn();
ob_start();
echo 'World';
$var2 = ob_get_contents();
ob_end_clear();
var_dump( $var1, $var2 );
