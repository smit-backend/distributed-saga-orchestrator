<?php

declare(strict_types=1);

namespace SmitBackend\SagaForge;

use SmitBackend\SagaForge\Contracts\SagaStepInterface;

/**
 * Class SagaCoordinator
 *
 * @package SmitBackend\SagaForge
 */
class SagaCoordinator implements SagaStepInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
