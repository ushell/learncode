<?php

declare(strict_types=1);

namespace App\Command;

use App\Rpc\UnaryClient;
use Hiworld\HiRequest;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;

/**
 * @Command
 */
class UnaryGrpcClient extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('grpc:unary');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('grpc unary test');
    }

    public function handle()
    {
        $client = new UnaryClient('127.0.0.1:9500');

        $request = new HiRequest();
        $request->setName('foo');

        [$result, ] = $client->sayHello($request);

        echo $result->getMessage();
    }
}
