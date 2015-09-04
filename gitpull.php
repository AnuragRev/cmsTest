<?php 

echo "Git Pull Page";
$output = `sudo git pull https://github.com/AnuragRev/cmsTest.git`;

print_r($output);

?>
