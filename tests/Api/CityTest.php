<?php
/**
 * Author: adriaroca
 * Date: 29/09/20 15:48
 */

namespace Omatech\SeurDispatchesService\Tests\Api;

use Omatech\SeurDispatchesService\Api\Seur;
use Omatech\SeurDispatchesService\Entities\City;
use Omatech\SeurDispatchesService\Tests\BaseTestCase;

/**
 * @group InfoPoblacionesCortoStr
 */
class CityTest extends BaseTestCase
{
    /** @test **/
    public function it_returns_a_city_by_name()
    {
        $city = (new Seur())
            ->getCityByName('Sant Joan de les Abadesses');

        $this->assertTrue(is_a($city, City::class));
        $this->assertEquals('17860', $city->codigoPostal());
        $this->assertEquals('SANT JOAN DE LES ABADESSES', $city->nomPoblacion());
        $this->assertEquals('17', $city->codProvincia());
        $this->assertEquals('GERONA', $city->nomProvincia());
    }
}