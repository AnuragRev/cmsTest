<?php 

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

$output = shell_exec("sudo git pull https://github.com/AnuragRev/cmsTest.git");

echo "<pre>";
print_r($output);
echo "</pre>";

?>
