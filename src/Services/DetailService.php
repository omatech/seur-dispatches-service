<?php

namespace Omatech\SeurDispatchesService\Services;

use Omatech\SeurDispatchesService\Entities\DetailRequest;
use Omatech\SeurDispatchesService\Entities\Dispatch;
use Omatech\SeurDispatchesService\Exceptions\ResponseError;
use Omatech\SeurDispatchesService\Exceptions\ThereAreNotDispatchesWithThisReference;

class DetailService extends Service
{
    /**
     * @param DetailRequest $request
     * @return Dispatch
     * @throws ResponseError
     * @throws ThereAreNotDispatchesWithThisReference
     */
    public function make(DetailRequest $request): Dispatch
    {
        $this->xml->add('Envelope', [
            'xmlns' => 'http://schemas.xmlsoap.org/soap/envelope/',
        ], true)
            ->add('Header')
            ->add('Body', true)
            ->add('consultaDetalleExpedicionesStr', ['xmlns' => 'http://consultaDetalleExpedicionesStr.servicios.webseur'], true)
            ->add('in0', $request->in0())
            ->add('in1', $request->in1())
            ->add('in2', $request->in2())
            ->add('in3', $request->in3());

        $response = $this->call();

        $this->validate($response);

        return Dispatch::fromXML($response->EXPEDICION);
    }

    /**
     * @param string $response
     * @return mixed|\SimpleXMLElement|string
     */
    protected function clean(string $response)
    {
        $response = parent::clean($response);

        $response = str_replace('<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><soap:Body><consultaDetalleExpedicionesStrResponse xmlns="http://consultaExpediciones.servicios.webseur"><out xmlns="http://consultaExpediciones.servicios.webseur">', '', $response);
        $response = str_replace('</out></consultaDetalleExpedicionesStrResponse></soap:Body></soap:Envelope>', '', $response);
        $response = simplexml_load_string($response);

        return $response;
    }

    /**
     * @param $response
     * @throws ResponseError
     * @throws ThereAreNotDispatchesWithThisReference
     */
    private function validate($response): void
    {
        if (!is_a($response, \SimpleXMLElement::class)) {
            throw new IncorrectCallResponse();
        }

        if ($response->count() === 0) {
            throw new ThereAreNotDispatchesWithThisReference();
        }

        $errorCodes = [
            'CEXP_0001',
            'CEXP_0002',
            'CEXP_0003',
            'CEXP_0004',
            'CEXP_0005',
        ];

        if (isset($response->CODIGO) && in_array($response->CODIGO, $errorCodes)) {
            $message = $response->DESCRIPCION ?? 'Response error';
            throw new ResponseError((string) $message);
        }
    }
}