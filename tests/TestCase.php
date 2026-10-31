<?php

declare(strict_types=1);

namespace CodebarAg\JsonBodyGuard\Tests;

use CodebarAg\JsonBodyGuard\Laravel\JsonBodyGuardServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @return list<class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [JsonBodyGuardServiceProvider::class];
    }
}
