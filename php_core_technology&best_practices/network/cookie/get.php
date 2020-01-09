<?php

header('P3P: CP="CAO PSA OUR"');
setcookie('p3p', $_GET['id'], time() + 3600, "/", ".demo.com");
