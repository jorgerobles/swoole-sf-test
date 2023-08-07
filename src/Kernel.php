<?php

namespace App;

use Runtime\Swoole\ServerAwareInterface;
use Swoole\Http\Server;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel implements ServerAwareInterface
{
    use MicroKernelTrait;

    private Server $server;

    public function setServer(Server $server): void
    {
        $this->server = $server;
    }

    public function getServer(): Server
    {
        return $this->server;
    }

    public function process(ContainerBuilder $container): void
    {

    }
}
