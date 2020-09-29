<?php
/**
 * Author: adriaroca
 * Date: 29/09/20 18:20
 */

namespace Omatech\SeurDispatchesService\Services;

use Omatech\SeurDispatchesService\Entities\City;
use Omatech\SeurDispatchesService\Entities\CityRequest;
use Omatech\SeurDispatchesService\Exceptions\IncorrectCallResponse;
use Omatech\SeurDispatchesService\Exceptions\ThereAreNotCitiesWithThisName;

class CityListService extends Service
{
    public function make(CityRequest $request): array
    {
        $this->xml->add('Envelope', [
            'xmlns' => 'http://schemas.xmlsoap.org/soap/envelope/',
        ], true)
            ->add('Header')
            ->add('Body', true)
            ->add('infoPoblacionesCorto', ['xmlns' => 'http://infoPoblacionesCorto.servicios.webseur'], true)
            ->add('in0', $request->in0())
            ->add('in1', $request->in1())
            ->add('in2', $request->in2())
            ->add('in3', $request->in3())
            ->add('in4', $request->in4())
            ->add('in5', $request->in5())
            ->add('in6', $request->in6());

        $response = $this->call();

        $this->validate($response);

        $cities = [];

        foreach ($response as $xmlElement) {
            $city = City::fromXML($xmlElement);

            array_push($cities, $city);
        }

        return $cities;
    }

    private function validate($response): void
    {
        if (!is_a($response, \SimpleXMLElement::class)) {
            throw new IncorrectCallResponse();
        }

        if ($response->count() === 0) {
            throw new ThereAreNotCitiesWithThisName();
        }
    }

    protected function clean(string $response)
    {
        $response = parent::clean($response);

        $response = str_replace('<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><soap:Body><ns1:infoPoblacionesCortoResponse xmlns:ns1="http://eCatalogoWS">', '', $response);
        $response = str_replace('</ns1:infoPoblacionesCortoResponse></soap:Body></soap:Envelope>', '', $response);
        $response = simplexml_load_string($response);

        return $response;
    }
}