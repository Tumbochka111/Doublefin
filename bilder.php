<?php
define('BASEURI', __DIR__);

$version = trim(shell_exec('git symbolic-ref --short -q HEAD'));
file_put_contents(BASEURI . '/version', $version);

if(is_dir(BASEURI. '\core')) {
	shell_exec('rmdir ' . BASEURI . '\core /q /s');
}

shell_exec('git clone https://github.com/rok9ru/trpo-core.git ' . BASEURI . '/core');
if(!is_dir(BASEURI . '/log')) {
	mkdir(BASEURI . '/log');
}

echo $version;
?>