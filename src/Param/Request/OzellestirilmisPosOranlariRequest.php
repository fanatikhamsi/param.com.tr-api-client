<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class OzellestirilmisPosOranlariRequest extends Request
{
    const METHOD = 'TP_Ozel_Oran_SK_Guncelle';
    const RESULT = 'TP_Ozel_Oran_SK_GuncelleResult';

    protected $OzelOranSkId;
    protected $MO_01;
    protected $MO_02;
    protected $MO_03;
    protected $MO_04;
    protected $MO_05;
    protected $MO_06;
    protected $MO_07;
    protected $MO_08;
    protected $MO_09;
    protected $MO_10;
    protected $MO_11;
    protected $MO_12;

    public function setGetParameters($parameters)
    {
        $parameters->OzelOranSkId = $this->getOzelOranSkId();
        $parameters->MO_01 = $this->getMO_01();
        $parameters->MO_02 = $this->getMO_02();
        $parameters->MO_03 = $this->getMO_03();
        $parameters->MO_04 = $this->getMO_04();
        $parameters->MO_05 = $this->getMO_05();
        $parameters->MO_06 = $this->getMO_06();
        $parameters->MO_07 = $this->getMO_07();
        $parameters->MO_08 = $this->getMO_08();
        $parameters->MO_09 = $this->getMO_09();
        $parameters->MO_10 = $this->getMO_10();
        $parameters->MO_11 = $this->getMO_11();
        $parameters->MO_12 = $this->getMO_12();
        return $parameters;
    }

    public function getOzelOranSkId()
    {
        return $this->OzelOranSkId;
    }

    public function setOzelOranSkId($ozelOranSkId)
    {
        return $this->OzelOranSkId = $ozelOranSkId;
    }

    public function getMO_01()
    {
        return $this->MO_01;
    }

    public function setMO_01($mO_01)
    {
        return $this->MO_01 = $mO_01;
    }

    public function getMO_02()
    {
        return $this->MO_02;
    }

    public function setMO_02($mO_02)
    {
        return $this->MO_02 = $mO_02;
    }

    public function getMO_03()
    {
        return $this->MO_03;
    }

    public function setMO_03($mO_03)
    {
        return $this->MO_03 = $mO_03;
    }

    public function getMO_04()
    {
        return $this->MO_04;
    }

    public function setMO_04($mO_04)
    {
        return $this->MO_04 = $mO_04;
    }

    public function getMO_05()
    {
        return $this->MO_05;
    }

    public function setMO_05($mO_05)
    {
        return $this->MO_05 = $mO_05;
    }

    public function getMO_06()
    {
        return $this->MO_06;
    }

    public function setMO_06($mO_06)
    {
        return $this->MO_06 = $mO_06;
    }

    public function getMO_07()
    {
        return $this->MO_07;
    }

    public function setMO_07($mO_07)
    {
        return $this->MO_07 = $mO_07;
    }

    public function getMO_08()
    {
        return $this->MO_08;
    }

    public function setMO_08($mO_08)
    {
        return $this->MO_08 = $mO_08;
    }

    public function getMO_09()
    {
        return $this->MO_09;
    }

    public function setMO_09($mO_09)
    {
        return $this->MO_09 = $mO_09;
    }

    public function getMO_10()
    {
        return $this->MO_10;
    }

    public function setMO_10($mO_10)
    {
        return $this->MO_10 = $mO_10;
    }

    public function getMO_11()
    {
        return $this->MO_11;
    }

    public function setMO_11($mO_11)
    {
        return $this->MO_11 = $mO_11;
    }

    public function getMO_12()
    {
        return $this->MO_12;
    }

    public function setMO_12($mO_12)
    {
        return $this->MO_12 = $mO_12;
    }

    public function getResponse(Request $request)
    {
        $sonuc = new \stdClass();
        @$sonuc->Sonuc = $request->response->{self::RESULT}->Sonuc;
        @$sonuc->Sonuc_Str = $request->response->{self::RESULT}->Sonuc_Str;
        @$sonuc->SonucObj = [];
        
        return $sonuc;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
            ->getObject();
    }
}
