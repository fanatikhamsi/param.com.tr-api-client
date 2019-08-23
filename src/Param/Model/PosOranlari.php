<?php

namespace Param\Model;

use Param\BaseModel;
use Param\Options;
use Param\Request\FirmaPosOranlariRequest;
use Param\Request\KullaniciPosOranlariRequest;
use Param\Request\OzellestirilmisPosOranlariRequest;

class PosOranlari extends BaseModel
{
    public static function firma(FirmaPosOranlariRequest $request, Options $options)
    {
        $client = parent::client($options);
        $response = $client->{$request::METHOD}($options->get());
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function kullanici(KullaniciPosOranlariRequest $request, Options $options)
    {
        $client = parent::client($options);
        $response = $client->{$request::METHOD}($options->get());
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function ozellestirilmis(OzellestirilmisPosOranlariRequest $request, Options $options)
    {
        $client = parent::client($options);
        $response = $client->{$request::METHOD}($request->setGetParameters($options->get()));
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->getObject();
    }
}
