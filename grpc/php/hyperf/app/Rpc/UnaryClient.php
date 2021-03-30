<?php
declare(strict_types=1);

namespace App\Rpc;

use Hyperf\GrpcClient\BaseClient;
use Hiworld\HiRequest;
use Hiworld\HiReply;

class UnaryClient extends BaseClient
{
    public function sayHello(HiRequest $request)
    {
        return $this->_simpleRequest('/hiworld.Greeter/SayHello', $request, [HiReply::class, 'decode']);
    }
}
