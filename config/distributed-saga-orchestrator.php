<?php

return [
    'enabled' => env('DISTRIBUTED_SAGA_ORCHESTRATOR_ENABLED', true),
    'timeout' => env('DISTRIBUTED_SAGA_ORCHESTRATOR_TIMEOUT', 30),
    'log_channel' => env('DISTRIBUTED_SAGA_ORCHESTRATOR_LOG', 'stack'),
];
