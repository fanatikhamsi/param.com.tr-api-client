<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class SakliKartSilmeRequest extends Request
{
    const METHOD = 'KS_Kart_Sil';
    const RESULT = 'KS_Kart_SilResult';

    protected $kartAdi;
    protected $kartIslemId;

    public function getParameters($parameters)
    {
        $parameters->KS_GUID = $this->getKartAdi();
        $parameters->KK_Islem_ID = $this->getKartIslemId();
        return $parameters;
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
        
        return $sonuc;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
            ->getObject();
    }
}
