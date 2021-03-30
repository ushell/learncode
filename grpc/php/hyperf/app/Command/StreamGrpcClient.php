<?php

declare(strict_types=1);

namespace App\Command;

use App\Rpc\StreamClient;
use App\Rpc\StreamSwooleClient;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;
use Routeguide\Point;
use Routeguide\RouteNote;

/**
 * @Command
 */
class StreamGrpcClient extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('grpc:stream');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('grpc stream test');
    }

    public function handle()
    {
        $serverRpcAddress = '127.0.0.1:10000';

        $this->test1($serverRpcAddress);
        $this->test2($serverRpcAddress);
    }

    public function test1($address)
    {
        $client = new StreamClient($address);

        $body = new RouteNote();

        $point = new Point();
        $point->setLongitude(1);
        $point->setLatitude(2);

        $body->setLocation($point);

        try {
            $stream = $client->stream();

            $stream->push($body);

            [$routePoint, ] = $stream->recv();

            echo sprintf('Location: %s, %s',
                $routePoint->getLocation()->getLongitude(),
                $routePoint->getLocation()->getLatitude()
            ).PHP_EOL;
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

    public function test2($address)
    {
        $client = new StreamSwooleClient($address);

        $body = new RouteNote();

        $point = new Point();
        $point->setLongitude(1);
        $point->setLatitude(2);

        $body->setLocation($point);

        try {
            $stream = $client->stream();

            $stream->push($body);

            [$routePoint, ] = $stream->recv();

            echo sprintf('Location: %s, %s',
                $routePoint->getLocation()->getLongitude(),
                $routePoint->getLocation()->getLatitude()
            );

            // close stream
            $client->close();
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
