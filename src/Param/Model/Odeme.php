<?php

namespace Param\Model;

use Param\BaseModel;
use Param\Model\Sha;
use Param\Options;
use Param\Request\BKMExpressileOdemeRequest;
use Param\Request\KartSaklamaliOdemeRequest;
use Param\Request\Nonsecure3DOdemeRequest;
use Param\Request\OdemeRequest;
use Param\Request\SHA2B64Request;

class Odeme extends BaseModel
{
    public static function saklamaliodeme(KartSaklamaliOdemeRequest $request, Options $options)
    {
        $client = parent::cardClient($options);
        $response = $client->{$request::METHOD}($request->getParameters($options->get()));
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function nonsecure3dodeme(Nonsecure3DOdemeRequest $request, Options $options)
    {
        $client = parent::client($options);
        $parameters = $request->getParameters($options->get());

        $hashRequest = new SHA2B64Request();
        $hashRequest->setData($parameters->G->CLIENT_CODE . $parameters->GUID . $request->getSanalPOSId() . $request->getTaksit() . $request->getIslemTutar() . $request->getToplamTutar() . $request->getSiparisId() . $request->getHataUrl() . $request->getBasariliUrl());
        $islemHashResponse = Sha::sha($hashRequest, $options);

        $request->setIslemHash($islemHashResponse->SonucObj);
        $parameters = $request->getParameters($options->get());

        $response = $client->{$request::METHOD}($parameters);
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function odeme(OdemeRequest $request, Options $options)
    {
        $client = parent::client($options);
        $parameters = $request->getParameters($options->get());

        $hashRequest = new SHA2B64Request();
        $hashRequest->setData($parameters->G->CLIENT_CODE . $parameters->GUID . $request->getSanalPOSId() . $request->getTaksit() . $request->getIslemTutar() . $request->getToplamTutar() . $request->getSiparisId() . $request->getHataUrl() . $request->getBasariliUrl());
        $islemHashResponse = Sha::sha($hashRequest, $options);

        $request->setIslemHash($islemHashResponse->SonucObj);
        $parameters = $request->getParameters($options->get());

        $response = $client->{$request::METHOD}($parameters);
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function bkmodeme(BKMExpressileOdemeRequest $request, Options $options)
    {
        $client = parent::client($options);
        $parameters = $request->getParameters($options->get());

        $hashRequest = new SHA2B64Request();
        $hashRequest->setData($parameters->G->CLIENT_CODE . $parameters->GUID . $request->getSiparisId() . $request->getToplamTutar() . $request->getHataUrl() . $request->getBasariliUrl());
        $islemHashResponse = Sha::sha($hashRequest, $options);

        $request->setIslemHash($islemHashResponse->SonucObj);
        $parameters = $request->getParameters($options->get());

        $response = $client->{$request::METHOD}($parameters);
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->getObject();
    }
}
