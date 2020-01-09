<?php

$res = filter_var('adminexample.com', FILTER_VALIDATE_EMAIL);
echo (int)$res;
?>
