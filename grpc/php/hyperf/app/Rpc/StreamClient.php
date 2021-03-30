<?php
declare(strict_types=1);

namespace App\Rpc;

use Hyperf\GrpcClient\BaseClient;
use Routeguide\RouteNote;

class StreamClient extends BaseClient
{
    public function stream()
    {
        return $this->_bidiRequest('/routeguide.RouteGuide/RouteChat', [RouteNote::class, 'decode']);
    }
}
