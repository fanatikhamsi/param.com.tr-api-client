<?php

namespace Param\Model;

use Param\BaseModel;
use Param\Options;
use Param\Request\KartSaklamaRequest;
use Param\Request\KartSaklamaListesiRequest;
use Param\Request\SakliKartSilmeRequest;

class Kart extends BaseModel
{
    public static function saklama(KartSaklamaRequest $request, Options $options)
    {
        $client = parent::cardClient($options);
        $response = $client->{$request::METHOD}($request->getParameters($options->get()));
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function saklamalistesi(KartSaklamaListesiRequest $request, Options $options)
    {
        $client = parent::client($options);
        $response = $client->{$request::METHOD}($request->getParameters($options->get()));
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function silme(SakliKartSilmeRequest $request, Options $options)
    {
        $client = parent::cardClient($options);
        $response = $client->{$request::METHOD}($request->getParameters($options->get()));
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->getObject();
    }
}
