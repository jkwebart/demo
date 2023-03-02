<?php
$abc=fopen("crousel\crousel1.html","r") or die("unable to open file");
echo fread($abc,filesize("crousel\crousel1.html"));
fclose($abc);


?>