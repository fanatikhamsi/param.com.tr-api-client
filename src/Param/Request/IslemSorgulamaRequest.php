<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class IslemSorgulamaRequest extends Request
{
    const METHOD = 'TP_Islem_Sorgulama';
    const RESULT = 'TP_Islem_SorgulamaResult';

    protected $dekontId;
    protected $siparisId;
    protected $islemId;

    public function getParameters($parameters)
    {
        $parameters->Dekont_ID = $this->getDekont();
        $parameters->Siparis_ID = $this->getSiparis();
        $parameters->Islem_ID = $this->getIslem();
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

    public function getSiparis()
    {
        return $this->siparisId;
    }

    public function setSiparis($siparisId)
    {
        return $this->siparisId = $siparisId;
    }

    public function getIslem()
    {
        return $this->siparisId;
    }

    public function setIslem($islemId)
    {
        return $this->islemId = $islemId;
    }

    public function getResponse(Request $request)
    {
        if ($request->response->{self::RESULT}->Sonuc == 1) {
            $xml = parent::getResponse($this);
        }

        $sonuc = new \stdClass();
        @$sonuc->Sonuc = $request->response->{self::RESULT}->Sonuc;
        @$sonuc->Sonuc_Str = $request->response->{self::RESULT}->Sonuc_Str;

        if ($request->response->{self::RESULT}->Sonuc == 1) {
            @$sonuc->SonucObj = $xml->NewDataSet->DT_Islem_Sorgulama;
        }
        
        return $sonuc;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
                        ->getObject();
    }
}
