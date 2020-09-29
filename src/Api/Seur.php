<?php

namespace Omatech\SeurDispatchesService\Api;

use Omatech\SeurDispatchesService\Entities\City;
use Omatech\SeurDispatchesService\Entities\CityRequest;
use Omatech\SeurDispatchesService\Entities\DetailRequest;
use Omatech\SeurDispatchesService\Entities\Dispatch;
use Omatech\SeurDispatchesService\Entities\ListRequest;
use Omatech\SeurDispatchesService\Services\CityService;
use Omatech\SeurDispatchesService\Services\DetailService;
use Omatech\SeurDispatchesService\Services\ListService;
use Omatech\SeurDispatchesService\Values\Dispatch\Type;
use Omatech\SeurDispatchesService\Values\Endpoint;

class Seur
{
    /**
     * @param array $data
     * @return array
     * @throws \Omatech\SeurDispatchesService\Exceptions\IncorrectCallResponse
     */
    public function dispatches(array $data)
    {
        $endpoint = new Endpoint('ConsultaListadoExpedicionesStr', getenv('SEUR_MODE'));

        $listRequest = new ListRequest(
            $data['in0'],
            $data['in1'],
            $data['in2'],
            $data['in3'],
            $data['in4'],
            $data['in5'],
            $data['in6'],
            $data['in7'],
            $data['in8'],
            $data['in9'],
            $data['in10'],
            $data['in11'],
            $data['in12'] ?? getenv('SEUR_USER'),
            $data['in13'] ?? getenv('SEUR_PASSWORD'),
            $data['in14']
        );

        $service = (new ListService($endpoint))->make($listRequest);

        return $service;
    }

    /**
     * @param array $data
     * @return Dispatch
     * @throws \Omatech\SeurDispatchesService\Exceptions\ThereAreNotDispatchesWithThisReference
     */
    public function dispatch(array $data): Dispatch
    {
        $endpoint = new Endpoint('ConsultaDetalleExpedicionesStr', getenv('SEUR_MODE'));

        $detailRequest = new DetailRequest(
            $data['in0'],
            $data['in1'],
            $data['in2'] ?? getenv('SEUR_USER'),
            $data['in3'] ?? getenv('SEUR_PASSWORD')
        );

        $service = (new DetailService($endpoint))->make($detailRequest);

        return $service;
    }

    /**
     * @param string $id
     * @return Dispatch
     * @throws \Omatech\SeurDispatchesService\Exceptions\ThereAreNotDispatchesWithThisReference
     */
    public function getTypeLDispatchById(string $id)
    {
        $type = new Type('L');

        return $this->dispatch([
            'in0' => $type,
            'in1' => $id,
            'in2' => getenv('SEUR_USER'),
            'in3' => getenv('SEUR_PASSWORD')
        ]);
    }

    /**
     * @param string $id
     * @return Dispatch
     * @throws \Omatech\SeurDispatchesService\Exceptions\ThereAreNotDispatchesWithThisReference
     */
    public function getTypeSDispatchById(string $id)
    {
        $type = new Type('S');

        return $this->dispatch([
            'in0' => $type,
            'in1' => $id,
            'in2' => getenv('SEUR_USER'),
            'in3' => getenv('SEUR_PASSWORD')
        ]);
    }

    public function getCityByName(string $name): City
    {
        $endpoint = new Endpoint('InfoPoblacionesCortoStr', getenv('SEUR_MODE'));
        $cityRequest = new CityRequest(
            null,
            $name,
            null,
            null,
            null,
            getenv('SEUR_USER'),
            getenv('SEUR_PASSWORD')
        );

        $service = (new CityService($endpoint))->make($cityRequest);

        return $service;
    }
}