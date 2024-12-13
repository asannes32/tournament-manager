<?php
declare(strict_types=1);

namespace DGDB\ServiceProvider;

use Aws\DynamoDb\DynamoDbClient;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use DGDB\Action\TestTournament;

/**
 * A ServiceProvider for registering services in a DI container.
 */
class DependencyProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Container $container)
    {
        $container[TestTournament::class] = function (Container $container): TestTournament {
            return new TestTournament($container);
        };
    }
}