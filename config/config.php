<?php

use Zend\Expressive\ConfigManager\ConfigManager;
use Zend\Expressive\ConfigManager\PhpFileProvider;

$configManager = new ConfigManager([
    \BlazonCms\Core\Module::class,
    \BlazonCms\Installer\Module::class,
    new PhpFileProvider(__DIR__.'/autoload/{{,*.}global,{,*.}local}.php'),
], 'data/config-cache.php');

return new ArrayObject($configManager->getMergedConfig());
