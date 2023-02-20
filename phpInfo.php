<?php

$ecoleDirecte = json_decode(file_get_contents("https://api.ecoledirecte.com/v3/eleves/2021/notes.awp?verbe=get&v=4.4.0"));
ob_start();
?>
