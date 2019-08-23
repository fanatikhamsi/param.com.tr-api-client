<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class KartSaklamaListesiRequest extends Request
{
    const METHOD = 'KK_Sakli_Liste';
    const RESULT = 'KK_Sakli_ListeResult';

    protected $kartAdi;
    protected $kartIslemId;

    public function getParameters($parameters)
    {
        $parameters->KK_Kart_Adi = $this->getKartAdi();
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
        if ($request->response->{self::RESULT}->Sonuc == 1) {
            $xml = parent::getResponse($this);
        }

        $sonuc = new \stdClass();
        @$sonuc->Sonuc = $request->response->{self::RESULT}->Sonuc;
        @$sonuc->Sonuc_Str = $request->response->{self::RESULT}->Sonuc_Str;
        @$sonuc->SonucObj = [];
        
        if ($request->response->{self::RESULT}->Sonuc == 1) {
            foreach ($xml->NewDataSet->DT_Sakli_Liste as $value) {
                $sonuc->SonucObj[] = $value;
            }
        }
        
        return $sonuc;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
            ->getObject();
    }
}
