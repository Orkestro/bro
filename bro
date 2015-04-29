#!/usr/bin/env php
<?php

if (PHP_VERSION_ID < 50400) {
    file_put_contents('php://stderr', sprintf(
        "Symfony Bro Installer requires PHP 5.4 version or higher and your system has\n".
        "PHP %s version installed.\n\n".
        "To solve this issue, upgrade your PHP installation\n\n",
        PHP_VERSION
    ));

    exit(1);
}

require file_exists(__DIR__.'/vendor/autoload.php')
    ? __DIR__.'/vendor/autoload.php'
    : __DIR__.'/../../autoload.php';

$appVersion = '0.1.0-DEV';

if (!array_key_exists('PATH', $_SERVER) && array_key_exists('Path', $_SERVER)) {
    $_SERVER['PATH'] = $_SERVER['Path'];
}

$app = new Symfony\Component\Console\Application('Symfony Bro Installer', $appVersion);
$app->add(new Bro\Installer\AboutCommand($appVersion));
$app->add(new Bro\Installer\SelfUpdateCommand());
$app->add(new Bro\Installer\IfyCommand());
$app->add(new Bro\Installer\UpCommand());

$app->setDefaultCommand('about');

$app->run();
