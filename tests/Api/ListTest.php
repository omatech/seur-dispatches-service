<?php
namespace Omatech\SeurDispatchesService\Tests\Api;

use Omatech\SeurDispatchesService\Api\Seur;
use Omatech\SeurDispatchesService\Entities\Dispatch;
use Omatech\SeurDispatchesService\Tests\BaseTestCase;

class ListTest extends BaseTestCase
{
    /** @test **/
    public function it_returns_a_dispatches_array()
    {
        $service = (new Seur())->dispatches([
            'in0' => 'S',
            'in1' => '',
            'in2' => null,
            'in3' => '',
            'in4' => getenv('SEUR_CCC'),
            'in5' => '01-05-2019',
            'in6' => '08-05-2019',
            'in7' => '',
            'in8' => '',
            'in9' => '',
            'in10' => '',
            'in11' => null,
            'in12' => getenv('SEUR_USER'),
            'in13' => getenv('SEUR_PASSWORD'),
            'in14' => 'N'
        ]);

        $this->assertTrue(is_array($service));
        $this->assertFalse(empty($service));
        $this->assertTrue(is_a($service[0], Dispatch::class));
    }

}