<?php
use Drupal\Console\Core\Utils\DrupalFinder;
use Drupal\Console\Bootstrap\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;
$autoload = require_once __DIR__ . '/web/autoload.php';
$root = getcwd();
$drupalFinder = new DrupalFinder();
if (!$drupalFinder->locateRoot($root)) {
    die('DrupalConsole must be executed within a Drupal Site.');
}
chdir($drupalFinder->getDrupalRoot());
$drupalKernel = DrupalKernel::createFromRequest(
    Request::createFromGlobals(),
    $autoload,
    'prod',
    true,
    $drupalFinder->getDrupalRoot()
);
$drupalKernel->boot();
return $autoload;