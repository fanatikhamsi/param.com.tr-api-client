<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class SHA2B64Request extends Request
{
    const METHOD = 'SHA2B64';
    const RESULT = 'SHA2B64Result';

    protected $Data;

    public function getParameters($parameters)
    {
        $parameters->Data = $this->getData();
        return $parameters;
    }

    public function getData()
    {
        return $this->Data;
    }

    public function setData($data)
    {
        return $this->Data = $data;
    }

    public function getResponse(Request $request)
    {
        $sonuc = new \stdClass();
        @$sonuc->Sonuc = "1";
        @$sonuc->Sonuc_Str = "Başarılı";
        @$sonuc->SonucObj = $request->response->{self::RESULT};
        
        return $sonuc;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
                        ->getObject();
    }
}
