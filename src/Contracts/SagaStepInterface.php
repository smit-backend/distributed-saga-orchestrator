<?php

declare(strict_types=1);

namespace SmitBackend\SagaForge\Contracts;

/**
 * Interface SagaStepInterface
 *
 * @package SmitBackend\SagaForge
 */
interface SagaStepInterface
{
    public function execute(array $payload = []): mixed;
}
