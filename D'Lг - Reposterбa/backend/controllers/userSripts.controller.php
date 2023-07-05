<?php
$clave = "1234";
$prefijo = md5("prf_");
$clave = sha1($prefijo.$clave);
echo $clave;