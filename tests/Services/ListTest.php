<?php

namespace Omatech\SeurDispatchesService\Tests\Services;

use Omatech\SeurDispatchesService\Entities\Dispatch;
use Omatech\SeurDispatchesService\Entities\ListRequest;
use Omatech\SeurDispatchesService\Services\ListService;
use Omatech\SeurDispatchesService\Tests\BaseTestCase;
use Omatech\SeurDispatchesService\Values\Endpoint;

class ListTest extends BaseTestCase
{
    /** @test * */
    public function it_returns_a_dispatches_array()
    {
        $listRequest = new ListRequest(
            'S',
            '',
            null,
            '',
            getenv('SEUR_CCC'),
            '01-05-2019',
            '08-05-2019',
            '',
            '',
            '',
            '',
            null,
            getenv('SEUR_USER'),
            getenv('SEUR_PASSWORD'),
            'N'
        );

        $endpoint = new Endpoint('ConsultaListadoExpedicionesStr', getenv('SEUR_MODE'));
        $service = (new ListService($endpoint))->make($listRequest);

        $this->assertTrue(is_array($service));
        $this->assertFalse(empty($service));
        $this->assertTrue(is_a($service[0], Dispatch::class));
    }
}