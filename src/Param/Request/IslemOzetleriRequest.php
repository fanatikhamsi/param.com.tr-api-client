<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class IslemOzetleriRequest extends Request
{
    const METHOD = 'TP_Mutabakat_Ozet';
    const RESULT = 'TP_Mutabakat_OzetResult';

    protected $baslangicTarih;
    protected $bitisTarih;

    public function getParameters($parameters)
    {
        $parameters->Tarih_Bas = $this->getBaslangicTarih();
        $parameters->Tarih_Bit = $this->getBitisTarih();
        return $parameters;
    }

    public function getBaslangicTarih()
    {
        return $this->baslangicTarih;
    }

    public function setBaslangicTarih($baslangicTarih)
    {
        return $this->baslangicTarih = $baslangicTarih;
    }

    public function getBitisTarih()
    {
        return $this->bitisTarih;
    }

    public function setBitisTarih($bitisTarih)
    {
        return $this->bitisTarih = $bitisTarih;
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
            @$sonuc->SonucObj = $xml->NewDataSet->DT_Mutabakat_Ozet;
        }

        return $sonuc;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
            ->getObject();
    }
}
