<?php
declare(strict_types=1);

namespace VueStorefront\CartSync\Service;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/**
 * Class SyncLoggerFactory
 */
class SyncLoggerFactory
{

    /**
     * @var string
     */
    private static $path = BP . '/var/log/cart-sync.log';

    /**
     * @param string $channelName
     * @return Logger
     * @throws \Exception
     */
    public function create(string $channelName = 'cart-sync'): Logger
    {
        $logger = new Logger($channelName);
        $logger->pushHandler(new StreamHandler(static::$path));

        return $logger;
    }
}
