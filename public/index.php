<?php
use App\Kernel;

$_SERVER['APP_RUNTIME'] = 'Runtime\\Swoole\\Runtime';

$_SERVER['APP_RUNTIME_OPTIONS'] = [
    'host' => 'localhost',
    'port' => 9501,
    'mode' => SWOOLE_PROCESS,
    'settings' => [
        'worker_num' => 4,      // The number of worker processes to start
        'task_worker_num' => 4,  // The amount of task workers to start
        'backlog' => 128,       // TCP backlog connection number
        'document_root'=> dirname(__FILE__)
    ],
];

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};