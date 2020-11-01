<?php


namespace App\Services;


use App\Traits\Singleton;
use DI\Container;

class DiServices
{
    use Singleton;

    private Container $container;

    public function setContainer(Container $container): void {
        $this->container = $container;
    }

    public function getContainer(): ?Container {
        return  $this->container;
    }
}