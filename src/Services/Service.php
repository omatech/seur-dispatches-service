<?php

namespace Omatech\SeurDispatchesService\Services;

use Omatech\SeurDispatchesService\Values\Endpoint;
use function FluidXml\fluidxml;

class Service
{
    protected $endpoint;
    protected $xml;

    /**
     * Service constructor.
     * @param Endpoint $endpoint
     */
    public function __construct(Endpoint $endpoint)
    {
        $this->endpoint = $endpoint->value();

        $this->xml = fluidxml(null, ['version' => '1.0', 'encoding' => 'ISO-8859-1']);
    }

    /**
     * @return mixed
     */
    protected function call()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->endpoint);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->xml->xml(true));

        $response = curl_exec($ch);

        curl_close($ch);

        return $this->clean($response);
    }

    /**
     * @param string $response
     * @return mixed|string
     */
    protected function clean(string $response)
    {
        $response = str_replace('&lt;', '<', $response);
        $response = str_replace('&gt;', '>', $response);
        $response = str_replace('\n', '', $response);
        $response = str_replace('\t', '', $response);

        return $response;
    }
}