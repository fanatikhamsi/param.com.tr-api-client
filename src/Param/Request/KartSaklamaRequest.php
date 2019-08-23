<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class KartSaklamaRequest extends Request
{
    const METHOD = 'KS_Kart_Ekle';
    const RESULT = 'KS_Kart_EkleResult';
    const RESULT_FLAG = 'KS_GUID';

    protected $kartSahibi;
    protected $kartNo;
    protected $kartSonKullanmaTarihAy;
    protected $kartSonKullanmaTarihYil;
    protected $kartAdi;
    protected $kartIslemId;

    public function getParameters($parameters)
    {
        $parameters->KK_Sahibi = $this->getKartSahibi();
        $parameters->KK_No = $this->getKartNo();
        $parameters->KK_SK_Ay = $this->getKartSonKullanmaTarihAy();
        $parameters->KK_SK_Yil = $this->getKartSonKullanmaTarihYil();
        $parameters->KK_Kart_Adi = $this->getKartAdi();
        $parameters->KK_Islem_ID = $this->getKartIslemId();
        return $parameters;
    }

    public function getKartSahibi()
    {
        return $this->kartSahibi;
    }

    public function setKartSahibi($kartSahibi)
    {
        return $this->kartSahibi = $kartSahibi;
    }

    public function getKartNo()
    {
        return $this->kartNo;
    }

    public function setKartNo($kartNo)
    {
        return $this->kartNo = $kartNo;
    }

    public function getKartSonKullanmaTarihAy()
    {
        return $this->kartSonKullanmaTarihAy;
    }

    public function setKartSonKullanmaTarihAy($kartSonKullanmaTarihAy)
    {
        return $this->kartSonKullanmaTarihAy = $kartSonKullanmaTarihAy;
    }

    public function getKartSonKullanmaTarihYil()
    {
        return $this->kartSonKullanmaTarihYil;
    }

    public function setKartSonKullanmaTarihYil($kartSonKullanmaTarihYil)
    {
        return $this->kartSonKullanmaTarihYil = $kartSonKullanmaTarihYil;
    }

    public function getKartAdi()
    {
        return $this->kartAdi;
    }

    public function setKartAdi($kartAdi)
    {
        return $this->kartAdi = $kartAdi;
    }

    public function getKartIslemId()
    {
        return $this->kartIslemId;
    }

    public function setKartIslemId($kartIslemId)
    {
        return $this->kartIslemId = $kartIslemId;
    }

    public function getResponse(Request $request)
    {
        $sonuc = new \stdClass();
        @$sonuc->Sonuc = $request->response->{self::RESULT}->Sonuc;
        @$sonuc->Sonuc_Str = $request->response->{self::RESULT}->Sonuc_Str;
        @$sonuc->SonucObj = $request->response->{self::RESULT}->KS_GUID;
        
        return $sonuc;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
            ->getObject();
    }
}
