<?php

namespace Omatech\SeurDispatchesService\Tests\Api;

use Omatech\SeurDispatchesService\Api\Seur;
use Omatech\SeurDispatchesService\Entities\Dispatch;
use Omatech\SeurDispatchesService\Tests\BaseTestCase;
use Omatech\SeurDispatchesService\Values\Dispatch\Type;

class DetailTest extends BaseTestCase
{
    /** @test **/
    public function it_returns_a_dispatch()
    {
        $type = new Type('S');
        $id = getenv('SEUR_ID_S_EXAMPLE');

        $service = (new Seur())->dispatch([
            'in0' => $type,
            'in1' => $id,
            'in2' => getenv('SEUR_USER'),
            'in3' => getenv('SEUR_PASSWORD')
        ]);

        $this->assertTrue(is_a($service, Dispatch::class));
        $this->assertEquals($id, $service->expedicionId());
    }

    /** @test **/
    public function it_returns_an_S_dispatch_by_id()
    {
        $id = getenv('SEUR_ID_S_EXAMPLE');

        $service = (new Seur())->getTypeSDispatchById($id);

        $this->assertTrue(is_a($service, Dispatch::class));
        $this->assertEquals($id, $service->expedicionId());
    }

    /** @test **/
    public function it_returns_an_L_dispatch_by_id()
    {
        $id = getenv('SEUR_ID_L_EXAMPLE');

        $service = (new Seur())->getTypeLDispatchById($id);

        $this->assertTrue(is_a($service, Dispatch::class));
        $this->assertEquals($id, $service->expedicionId());
    }
}