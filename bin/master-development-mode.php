<?php

/**
 * @see       https://github.com/mezzio/mezzio-skeleton for the canonical source repository
 * @copyright https://github.com/mezzio/mezzio-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/mezzio/mezzio-skeleton/blob/master/LICENSE.md New BSD License
 */


declare(strict_types=1);


require 'vendor/autoload.php';

if (file_exists(__DIR__ . '/../src/Admin/data/cache/config/config.php')) {
    unlink(__DIR__ . '/../src/Admin/data/cache/config/config.php');
}

if (file_exists(__DIR__ . '/../src/Frontend/data/cache/config/config.php')) {
    unlink(__DIR__ . '/../src/Frontend/data/cache/config/config.php');
}

if (file_exists(__DIR__ . '/../src/Api/data/cache/config/config.php')) {
    unlink(__DIR__ . '/../src/Api/data/cache/config/config.php');
}


$command = new \Pars\Cli\DevCommand();
echo($command(array_slice($argv, 1), __DIR__ . '/../src/Admin'));
echo($command(array_slice($argv, 1), __DIR__ . '/../src/Frontend'));
echo($command(array_slice($argv, 1), __DIR__ . '/../src/Api'));
$command = new \Laminas\DevelopmentMode\Command();
echo($command(array_slice($argv, 1)));
exit;
