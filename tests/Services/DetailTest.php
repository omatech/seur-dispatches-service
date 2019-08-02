<?php

namespace Omatech\SeurDispatchesService\Tests\Services;

use Omatech\SeurDispatchesService\Entities\DetailRequest;
use Omatech\SeurDispatchesService\Entities\Dispatch;
use Omatech\SeurDispatchesService\Services\DetailService;
use Omatech\SeurDispatchesService\Tests\BaseTestCase;
use Omatech\SeurDispatchesService\Values\Dispatch\Type;
use Omatech\SeurDispatchesService\Values\Endpoint;

class DetailTest extends BaseTestCase
{
    /** @test **/
    public function it_returns_a_dispatch()
    {
        $type = new Type('S');
        $id = getenv('SEUR_ID_S_EXAMPLE');

        $detailRequest = new DetailRequest(
            $type,
            $id,
            getenv('SEUR_USER'),
            getenv('SEUR_PASSWORD')
        );

        $endpoint = new Endpoint('ConsultaDetalleExpedicionesStr', getenv('SEUR_MODE'));
        $service = (new DetailService($endpoint))->make($detailRequest);

        $this->assertTrue(is_a($service, Dispatch::class));
        $this->assertEquals($id, $service->expedicionId());
    }
}
