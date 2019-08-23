<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class IslemIadeRequest extends Request
{
    const METHOD = 'TP_Islem_Iptal_Iade_Kismi';
    const RESULT = 'TP_Islem_Iptal_Iade_KismiResult';

    protected $dekontId;
    protected $durum = 'IADE';
    protected $tutar;

    public function getParameters($parameters)
    {
        $parameters->Dekont_ID = $this->getDekont();
        $parameters->Durum = $this->getDurum();
        $parameters->Tutar = $this->getTutar();
        return $parameters;
    }

    public function getDekont()
    {
        return $this->dekontId;
    }

    public function setDekont($dekontId)
    {
        return $this->dekontId = $dekontId;
    }

    public function getDurum()
    {
        return $this->durum;
    }

    public function getTutar()
    {
        return $this->tutar;
    }

    public function setTutar($tutar)
    {
        return $this->tutar = $tutar;
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
