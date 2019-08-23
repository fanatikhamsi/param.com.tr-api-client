<?php

require_once 'config.php';

dekont();
#sorgu();
#iade();
#iptal();
#ozetler();

function dekont()
{
    $request = new \Param\Request\DekontRequest();
    $request->setDekont(1009834621);
    $request->setEPosta("selim61@php.net");

    $dekont = \Param\Model\Islem::dekont($request, Config::options());
    print_r($dekont);
}

function sorgu()
{
    $request = new \Param\Request\IslemSorgulamaRequest();
    $request->setDekont(1009834621);
    //$request->setSiparis();
    //$request->setIslem();

    $islemsorgu = \Param\Model\Islem::sorgu($request, Config::options());
    print_r($islemsorgu);
}

function iade()
{
    $request = new \Param\Request\IslemIadeRequest();
    $request->setDekont(1009834621);
    $request->setTutar(100);

    $iade = \Param\Model\Islem::iade($request, Config::options());
    print_r($iade);
}

function iptal()
{
    $request = new \Param\Request\IslemIptalRequest();
    $request->setDekont(1009834621);
    $request->setTutar(100);

    $iptal = \Param\Model\Islem::iptal($request, Config::options());
    print_r($iptal);
}

function ozetler()
{
    $request = new \Param\Request\IslemOzetleriRequest();
    $request->setBaslangicTarih("20.11.2014 00:00:00");
    $request->setBitisTarih("20.11.2015 15:15:00");

    $ozetler = \Param\Model\Islem::ozetler($request, Config::options());
    print_r($ozetler);
}
