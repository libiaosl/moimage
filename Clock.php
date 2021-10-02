<?php
declare(strict_types=1);

namespace Moimage\Clock;

use DateTimeImmutable;

interface Clock
{
    public function now(): DateTimeImmutable;
}
