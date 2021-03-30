<?php
declare(strict_types=1);

namespace App\Rpc;

use Hiworld\HiReply;
use Hiworld\HiRequest;

class GreeterRpcServer
{
    public function sayHello(HiRequest $request): HiReply
    {
        $reply = new HiReply();
        $reply->setMessage('[server] hello client: ' . $request->getName());
        return $reply;
    }
}
