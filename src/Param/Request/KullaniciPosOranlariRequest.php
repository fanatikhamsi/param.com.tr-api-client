<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class KullaniciPosOranlariRequest extends Request
{
    const METHOD = 'TP_Ozel_Oran_SK_Liste';
    const RESULT = 'TP_Ozel_Oran_SK_ListeResult';

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
            foreach ($xml->NewDataSet->DT_Ozel_Oranlar_SK as $value) {
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
