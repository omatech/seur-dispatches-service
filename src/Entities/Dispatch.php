<?php

namespace Omatech\SeurDispatchesService\Entities;

class Dispatch
{
    private $descripcionClienteIngles;
    private $caracterTel;
    private $destinaViaTipo;
    private $fechaCaptura;
    private $descripcionClientePortugues;
    private $descripcionParaCliente;
    private $telefonoSms;
    private $valorTel;
    private $destinaViaNombre;
    private $remitePais;
    private $destinaPoblacion;
    private $destinaCccCod;
    private $destinaTipoNum;
    private $destinaNum;
    private $destinaNombre;
    private $fechaSituacion;
    private $destinaPais;
    private $emailB2c;
    private $b2cTipoComunicacion;
    private $expedicionId;
    private $remiteRef;
    private $fechaVigencia;
    private $remiteCccCod;
    private $estado;
    private $previoNum;
    private $expedicionNum;
    private $codSituacion;

    /**
     * Dispatch constructor.
     * @param $descripcionClienteIngles
     * @param $caracterTel
     * @param $destinaViaTipo
     * @param $fechaCaptura
     * @param $descripcionClientePortugues
     * @param $descripcionParaCliente
     * @param $telefonoSms
     * @param $valorTel
     * @param $destinaViaNombre
     * @param $remitePais
     * @param $destinaPoblacion
     * @param $destinaCccCod
     * @param $destinaTipoNum
     * @param $destinaNum
     * @param $destinaNombre
     * @param $fechaSituacion
     * @param $destinaPais
     * @param $emailB2c
     * @param $b2cTipoComunicacion
     * @param $expedicionId
     * @param $remiteRef
     * @param $fechaVigencia
     * @param $remiteCccCod
     * @param $estado
     * @param $previoNum
     * @param $expedicionNum
     * @param $codSituacion
     */
    public function __construct(
        $descripcionClienteIngles,
        $caracterTel,
        $destinaViaTipo,
        $fechaCaptura,
        $descripcionClientePortugues,
        $descripcionParaCliente,
        $telefonoSms,
        $valorTel,
        $destinaViaNombre,
        $remitePais,
        $destinaPoblacion,
        $destinaCccCod,
        $destinaTipoNum,
        $destinaNum,
        $destinaNombre,
        $fechaSituacion,
        $destinaPais,
        $emailB2c,
        $b2cTipoComunicacion,
        $expedicionId,
        $remiteRef,
        $fechaVigencia,
        $remiteCccCod,
        $estado,
        $previoNum,
        $expedicionNum,
        $codSituacion
    )
    {

        $this->descripcionClienteIngles = $descripcionClienteIngles;
        $this->caracterTel = $caracterTel;
        $this->destinaViaTipo = $destinaViaTipo;
        $this->fechaCaptura = $fechaCaptura;
        $this->descripcionClientePortugues = $descripcionClientePortugues;
        $this->descripcionParaCliente = $descripcionParaCliente;
        $this->telefonoSms = $telefonoSms;
        $this->valorTel = $valorTel;
        $this->destinaViaNombre = $destinaViaNombre;
        $this->remitePais = $remitePais;
        $this->destinaPoblacion = $destinaPoblacion;
        $this->destinaCccCod = $destinaCccCod;
        $this->destinaTipoNum = $destinaTipoNum;
        $this->destinaNum = $destinaNum;
        $this->destinaNombre = $destinaNombre;
        $this->fechaSituacion = $fechaSituacion;
        $this->destinaPais = $destinaPais;
        $this->emailB2c = $emailB2c;
        $this->b2cTipoComunicacion = $b2cTipoComunicacion;
        $this->expedicionId = $expedicionId;
        $this->remiteRef = $remiteRef;
        $this->fechaVigencia = $fechaVigencia;
        $this->remiteCccCod = $remiteCccCod;
        $this->estado = $estado;
        $this->previoNum = $previoNum;
        $this->expedicionNum = $expedicionNum;
        $this->codSituacion = $codSituacion;
    }

    /**
     * @param \SimpleXMLElement $xml
     * @return Dispatch
     */
    public static function fromXML(\SimpleXMLElement $xml): self
    {
        return new self(
            $xml->DESCRIPCION_CLIENTE_INGLES->__toString(),
            $xml->CARACTER_TEL->__toString(),
            $xml->DESTINA_VIA_TIPO->__toString(),
            $xml->FECHA_CAPTURA->__toString(),
            $xml->DESCRIPCION_CLIENTE_PORTUGUES->__toString(),
            $xml->DESCRIPCION_PARA_CLIENTE->__toString(),
            $xml->TELEFONO_SMS->__toString(),
            $xml->VALOR_TEL->__toString(),
            $xml->DESTINA_VIA_NOMBRE->__toString(),
            $xml->REMITE_PAIS->__toString(),
            $xml->DESTINA_POBLACION->__toString(),
            $xml->DESTINA_CCC_COD->__toString(),
            $xml->DESTINA_TIPO_NUM->__toString(),
            $xml->DESTINA_NUM->__toString(),
            $xml->DESTINA_NOMBRE->__toString(),
            $xml->FECHA_SITUACION->__toString(),
            $xml->DESTINA_PAIS->__toString(),
            $xml->EMAIL_B2C->__toString(),
            $xml->B2C_TIPO_COMUNICACION->__toString(),
            $xml->EXPEDICION_ID->__toString(),
            $xml->REMITE_REF->__toString(),
            $xml->FECHA_VIGENCIA->__toString(),
            $xml->REMITE_CCC_COD->__toString(),
            $xml->ESTADO->__toString(),
            $xml->PREVIO_NUM->__toString(),
            $xml->EXPEDICION_NUM->__toString(),
            $xml->COD_SITUACION->__toString()
        );
    }

    /**
     * @return mixed
     */
    public function descripcionClienteIngles()
    {
        return $this->descripcionClienteIngles;
    }

    /**
     * @return mixed
     */
    public function caracterTel()
    {
        return $this->caracterTel;
    }

    /**
     * @return mixed
     */
    public function destinaViaTipo()
    {
        return $this->destinaViaTipo;
    }

    /**
     * @return mixed
     */
    public function fechaCaptura()
    {
        return $this->fechaCaptura;
    }

    /**
     * @return mixed
     */
    public function descripcionClientePortugues()
    {
        return $this->descripcionClientePortugues;
    }

    /**
     * @return mixed
     */
    public function descripcionParaCliente()
    {
        return $this->descripcionParaCliente;
    }

    /**
     * @return mixed
     */
    public function telefonoSms()
    {
        return $this->telefonoSms;
    }

    /**
     * @return mixed
     */
    public function valorTel()
    {
        return $this->valorTel;
    }

    /**
     * @return mixed
     */
    public function destinaViaNombre()
    {
        return $this->destinaViaNombre;
    }

    /**
     * @return mixed
     */
    public function remitePais()
    {
        return $this->remitePais;
    }

    /**
     * @return mixed
     */
    public function destinaPoblacion()
    {
        return $this->destinaPoblacion;
    }

    /**
     * @return mixed
     */
    public function destinaCccCod()
    {
        return $this->destinaCccCod;
    }

    /**
     * @return mixed
     */
    public function destinaTipoNum()
    {
        return $this->destinaTipoNum;
    }

    /**
     * @return mixed
     */
    public function destinaNum()
    {
        return $this->destinaNum;
    }

    /**
     * @return mixed
     */
    public function destinaNombre()
    {
        return $this->destinaNombre;
    }

    /**
     * @return mixed
     */
    public function fechaSituacion()
    {
        return $this->fechaSituacion;
    }

    /**
     * @return mixed
     */
    public function destinaPais()
    {
        return $this->destinaPais;
    }

    /**
     * @return mixed
     */
    public function emailB2c()
    {
        return $this->emailB2c;
    }

    /**
     * @return mixed
     */
    public function b2cTipoComunicacion()
    {
        return $this->b2cTipoComunicacion;
    }

    /**
     * @return mixed
     */
    public function expedicionId()
    {
        return $this->expedicionId;
    }

    /**
     * @return mixed
     */
    public function remiteRef()
    {
        return $this->remiteRef;
    }

    /**
     * @return mixed
     */
    public function fechaVigencia()
    {
        return $this->fechaVigencia;
    }

    /**
     * @return mixed
     */
    public function remiteCccCod()
    {
        return $this->remiteCccCod;
    }

    /**
     * @return mixed
     */
    public function estado()
    {
        return $this->estado;
    }

    /**
     * @return mixed
     */
    public function previoNum()
    {
        return $this->previoNum;
    }

    /**
     * @return mixed
     */
    public function expedicionNum()
    {
        return $this->expedicionNum;
    }

    /**
     * @return mixed
     */
    public function codSituacion()
    {
        return $this->codSituacion;
    }
}