<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class DekontRequest extends Request {
    const METHOD = 'TP_Islem_Dekont_Gonder';
    const RESULT = 'TP_Islem_Dekont_GonderResult';

    protected $dekontId;
    protected $ePosta;

    public function getParameters($parameters)
    {
        $parameters->Dekont_ID = $this->getDekont();
        $parameters->E_Posta = $this->getEPosta();
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

    public function getEPosta()
    {
        return $this->ePosta;
    }

    public function setEPosta($eposta)
    {
        return $this->ePosta = $eposta;
    }

    public function getResponse(Request $request)
    {
        $sonuc = new \stdClass();
        @$sonuc->Sonuc = $request->response->{self::RESULT}->Sonuc;
        @$sonuc->Sonuc_Str = $request->response->{self::RESULT}->Sonuc_Str;
        
        return $sonuc;
    }

    public function getJsonObject() {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
                        ->getObject();
    }
}
