<?php
// 测试 composer require symfony/filesystem
require_once  __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Filesystem\Filesystem;

$filesystem = new Filesystem();

try {
    $filesystem->mkdir("sui");
} catch (IOExceptionInterface $exception) {
    echo "An error occurred while creating your directory at ".$exception->getPath();
}
