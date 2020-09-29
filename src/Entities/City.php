<?php
/**
 * Author: adriaroca
 * Date: 29/09/20 16:12
 */

namespace Omatech\SeurDispatchesService\Entities;


class City
{
    private $codigoPostal;
    private $codPoblacion;
    private $codUnidadAdmin;
    private $nomPoblacion;
    private $codProvincia;
    private $nomProvincia;
    private $codClaseRecog;
    private $codPaisIso;
    private $finDesRArrasUa;
    private $finDesRArrasCt;

    public function __construct(
        $codigoPostal,
        $codPoblacion,
        $codUnidadAdmin,
        $nomPoblacion,
        $codProvincia,
        $nomProvincia,
        $codClaseRecog,
        $codPaisIso,
        $finDesRArrasUa,
        $finDesRArrasCt
    )
    {
        $this->codigoPostal = $codigoPostal;
        $this->codPoblacion = $codPoblacion;
        $this->codUnidadAdmin = $codUnidadAdmin;
        $this->nomPoblacion = $nomPoblacion;
        $this->codProvincia = $codProvincia;
        $this->nomProvincia = $nomProvincia;
        $this->codClaseRecog = $codClaseRecog;
        $this->codPaisIso = $codPaisIso;
        $this->finDesRArrasUa = $finDesRArrasUa;
        $this->finDesRArrasCt = $finDesRArrasCt;
    }

    public static function fromXML(\SimpleXMLElement $xml): self
    {
        return new self(
            $xml->CODIGO_POSTAL->__toString(),
            $xml->COD_POBLACION->__toString(),
            $xml->COD_UNIDAD_ADMIN->__toString(),
            $xml->NOM_POBLACION->__toString(),
            $xml->COD_PROVINCIA->__toString(),
            $xml->NOM_PROVINCIA->__toString(),
            $xml->COD_CLASE_RECOG->__toString(),
            $xml->COD_PAIS_ISO->__toString(),
            $xml->FIN_DES_R_ARRAS_UA->__toString(),
            $xml->FIN_DES_R_ARRAS_CT->__toString()
        );
    }

    /**
     * @return mixed
     */
    public function codigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * @return mixed
     */
    public function codPoblacion()
    {
        return $this->codPoblacion;
    }

    /**
     * @return mixed
     */
    public function codUnidadAdmin()
    {
        return $this->codUnidadAdmin;
    }

    /**
     * @return mixed
     */
    public function nomPoblacion()
    {
        return $this->nomPoblacion;
    }

    /**
     * @return mixed
     */
    public function codProvincia()
    {
        return $this->codProvincia;
    }

    /**
     * @return mixed
     */
    public function nomProvincia()
    {
        return $this->nomProvincia;
    }

    /**
     * @return mixed
     */
    public function codClaseRecog()
    {
        return $this->codClaseRecog;
    }

    /**
     * @return mixed
     */
    public function codPaisIso()
    {
        return $this->codPaisIso;
    }

    /**
     * @return mixed
     */
    public function finDesRArrasUa()
    {
        return $this->finDesRArrasUa;
    }

    /**
     * @return mixed
     */
    public function finDesRArrasCt()
    {
        return $this->findDesRArrasCt;
    }

}