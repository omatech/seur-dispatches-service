<?php

namespace Omatech\SeurDispatchesService\Services;

use Omatech\SeurDispatchesService\Entities\ListRequest;
use Omatech\SeurDispatchesService\Entities\Dispatch;
use Omatech\SeurDispatchesService\Exceptions\IncorrectCallResponse;

class ListService extends Service
{
    /**
     * @param ListRequest $request
     * @return array
     * @throws IncorrectCallResponse
     */
    public function make(ListRequest $request): array
    {
        $this->xml->add('Envelope', [
            'xmlns' => 'http://schemas.xmlsoap.org/soap/envelope/',
        ], true)
            ->add('Header')
            ->add('Body', true)
            ->add('consultaListadoExpedicionesStr', ['xmlns' => 'http://consultaListadoExpedicionesStr.servicios.webseur'], true)
            ->add('in0', $request->in0())
            ->add('in1', $request->in1())
            ->add('in2', $request->in2())
            ->add('in3', $request->in3())
            ->add('in4', $request->in4())
            ->add('in5', $request->in5())
            ->add('in6', $request->in6())
            ->add('in7', $request->in7())
            ->add('in8', $request->in8())
            ->add('in9', $request->in9())
            ->add('in10', $request->in10())
            ->add('in11', $request->in11())
            ->add('in12', $request->in12())
            ->add('in13', $request->in13())
            ->add('in14', $request->in14());

        $response = $this->call();

        if (!is_a($response, \SimpleXMLElement::class)) {
            throw new IncorrectCallResponse();
        }

        if ($response->count() === 0) {
            return [];
        }

        $dispatches = [];

        foreach ($response as $xmlElement) {
            $dispatch = Dispatch::fromXML($xmlElement);

            array_push($dispatches, $dispatch);
        }

        return $dispatches;
    }

    /**
     * @param string $response
     * @return mixed|\SimpleXMLElement|string
     */
    protected function clean(string $response)
    {
        $response = parent::clean($response);

        $response = str_replace('<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><soap:Body><consultaListadoExpedicionesStrResponse xmlns="http://consultaExpediciones.servicios.webseur"><out xmlns="http://consultaExpediciones.servicios.webseur">', '', $response);
        $response = str_replace('</out></consultaListadoExpedicionesStrResponse></soap:Body></soap:Envelope>', '', $response);
        $response = str_replace('<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><soap:Body><ns1:consultaListadoExpedicionesStrResponse xmlns:ns1="http://consultaExpediciones.servicios.webseur"><ns1:out>', '', $response);
        $response = str_replace('</ns1:out></ns1:consultaListadoExpedicionesStrResponse></soap:Body></soap:Envelope>', '', $response);
        $response = simplexml_load_string($response);

        return $response;
    }
}
