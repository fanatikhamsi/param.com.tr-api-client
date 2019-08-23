<?php

namespace Param\Model;

use Param\BaseModel;
use Param\Options;
use Param\Request\DekontRequest;
use Param\Request\IslemSorgulamaRequest;
use Param\Request\IslemIadeRequest;
use Param\Request\IslemIptalRequest;
use Param\Request\IslemOzetleriRequest;

class Islem extends BaseModel
{
    public static function dekont(DekontRequest $request, Options $options)
    {
        $client = parent::client($options);
        $response = $client->{$request::METHOD}($request->getParameters($options->get()));
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function sorgu(IslemSorgulamaRequest $request, Options $options)
    {
        $client = parent::client($options);
        $response = $client->{$request::METHOD}($request->getParameters($options->get()));
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function iade(IslemIadeRequest $request, Options $options)
    {
        $client = parent::client($options);
        $response = $client->{$request::METHOD}($request->getParameters($options->get()));
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function iptal(IslemIptalRequest $request, Options $options)
    {
        $client = parent::client($options);
        $response = $client->{$request::METHOD}($request->getParameters($options->get()));
        $request->setResponse($response);
        return $request->getResponse($request);
    }

    public static function ozetler(IslemOzetleriRequest $request, Options $options)
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
