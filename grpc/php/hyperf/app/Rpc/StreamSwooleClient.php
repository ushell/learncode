<?php
declare(strict_types=1);

namespace App\Rpc;

use Grpc\BaseStub;
use Routeguide\RouteNote;

class StreamSwooleClient extends BaseStub
{
    public function stream()
    {
        return $this->_bidiRequest('/routeguide.RouteGuide/RouteChat', [RouteNote::class, 'decode']);
    }
}
