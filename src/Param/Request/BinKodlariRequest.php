<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class BinKodlariRequest extends Request
{
    const METHOD = 'BIN_SanalPos';
    const RESULT = 'BIN_SanalPosResult';

    protected $bin;

    public function getParameters($parameters)
    {
        $parameters->BIN = $this->getBin();
        return $parameters;
    }

    public function getBin()
    {
        return $this->bin;
    }

    public function setBin($bin)
    {
        return $this->bin = $bin;
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
            foreach ($xml->NewDataSet->Temp as $value) {
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
