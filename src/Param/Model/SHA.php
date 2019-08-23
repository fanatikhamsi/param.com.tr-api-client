<?php

namespace Param\Model;

use Param\BaseModel;
use Param\Options;
use Param\Request\SHA2B64Request;
use Param\Request\BinKodlariRequest;

class SHA extends BaseModel
{
    public static function sha(SHA2B64Request $request, Options $options)
    {
        $client = parent::client($options);
        $response = $client->{$request::METHOD}($request->getParameters($options->get()));
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function bin(BinKodlariRequest $request, Options $options)
    {
        $client = parent::client($options);
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
