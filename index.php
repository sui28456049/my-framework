<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Filesystem\Filesystem;

$filesystem = new Filesystem();
var_dump($filesystem);
try {
    $filesystem->mkdir(sys_get_temp_dir().'/'.random_int(0, 1000));
} catch (IOExceptionInterface $exception) {
    echo "An error occurred while creating your directory at ".$exception->getPath();
}