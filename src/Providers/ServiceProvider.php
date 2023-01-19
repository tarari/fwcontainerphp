<?php
declare(strict_types=1);
namespace App\Providers;

use App\Containers\ServiceContainer;
use App\Services\ConfigService;
use App\Services\LoggerService;
use App\Services\DatabaseService;


class ServiceProvider{
    public function register(ServiceContainer $container): void
    {
        $container->register('config', ConfigService::class);
        $container->register('logger', LoggerService::class);
        $container->register('db', DatabaseService::class,['config']);
        
    }
}
