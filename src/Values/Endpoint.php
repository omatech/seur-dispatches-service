<?php

namespace Omatech\SeurDispatchesService\Values;

use Omatech\SeurDispatchesService\Exceptions\ModeNotAvailable;
use Omatech\SeurDispatchesService\Exceptions\ServiceNotAvailable;

class Endpoint extends BaseValue
{
    /**
     * Endpoint constructor.
     * @param string $service
     * @param string $mode
     * @throws ModeNotAvailable
     * @throws ServiceNotAvailable
     */
    public function __construct(string $service, string $mode)
    {
        $endpoints = [
            'ConsultaListadoExpedicionesStr' => [
                'development' => 'http://seurdes.seur.com/webseur/services/WSConsultaExpediciones',
                'pre-production' => 'https://wspre.seur.com/webseur/services/WSConsultaExpediciones',
                'production' => 'https://ws.seur.com/webseur/services/WSConsultaExpediciones',
            ]
        ];

        if (!isset($endpoints[$service])) {
            throw new ServiceNotAvailable();
        }

        if (!isset($endpoints[$service][$mode])) {
            throw new ModeNotAvailable();
        }

        parent::__construct($endpoints[$service][$mode]);
    }

}