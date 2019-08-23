<?php

require_once 'config.php';

saklama();
#saklamalistesi();
#silme();

function saklama()
{
    $request = new \Param\Request\KartSaklamaRequest();
    $request->setKartSahibi("Selim Çoban");
    $request->setKartNo("4444444444444444");
    $request->setKartSonKullanmaTarihAy("04");
    $request->setKartSonKullanmaTarihYil("20");
    $request->setKartAdi("Test123");
    $request->setKartIslemId(123);

    $saklama = \Param\Model\Kart::saklama($request, Config::options());
    print_r($saklama);
}

function saklamalistesi()
{
    $request = new \Param\Request\KartSaklamaListesiRequest();
    //$request->setKartAdi("Test");
    //$request->setKartIslemId(XXXXXX);

    $saklama = \Param\Model\Kart::saklamalistesi($request, Config::options());
    print_r($saklama);
}

function silme()
{
    $request = new \Param\Request\SakliKartSilmeRequest();
    $request->setKartAdi("c73937ce-95a0-4181-a57d-XXXXXX");
    //$request->setKartIslemId("");

    $silme = \Param\Model\Kart::silme($request, Config::options());
    print_r($silme);
}
