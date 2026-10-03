<?php

declare(strict_types=1);

namespace SmitBackend\SagaForge;

/**
 * Add transactional outbox pattern event relay driver
 */
class OutboxRelay
{
    public function run(): bool
    {
        return true;
    }
}
