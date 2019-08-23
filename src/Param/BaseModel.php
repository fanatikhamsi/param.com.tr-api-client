<?php

namespace Param;

abstract class BaseModel implements JsonConvertible
{
    public static function client($options)
    {
        return new \SoapClient(
            $options->getApiUrl(),
            [
                'stream_context' => stream_context_create([
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    ],
                ])
                ,'trace'=>true, 'exceptions'=>true
            ]
            );
    }

    public static function cardClient($options)
    {
        return new \SoapClient(
            $options->getApiCardUrl(),
            [
                'stream_context' => stream_context_create([
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    ],
                ])
                ,'trace'=>true, 'exceptions'=>true
            ]
            );
    }

    public function toJsonString()
    {
        return JsonBuilder::jsonEncode($this->getJsonObject());
    }
}
