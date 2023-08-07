<?php
use App\Kernel;


$_SERVER['APP_RUNTIME_OPTIONS']['settings']['document_root'] = dirname(__FILE__);

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};