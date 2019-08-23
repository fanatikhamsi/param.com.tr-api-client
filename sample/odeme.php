<?php

require_once 'config.php';

#saklamaliodeme();
nonsecure3dodeme();
odeme();
#bkmodeme();

function saklamaliodeme()
{
    $request = new \Param\Request\KartSaklamaliOdemeRequest();
    $request->setSanalPOSId(1008);
    $request->setKartGuid("ea6901a3-398a-47ea-b1a8-XXXXXX");
    $request->setKartCVV("588");
    $request->setKartSahibiTelNo("53222095XX");
    $request->setSiparisId("103051XX");
    $request->setSiparisAciklama("103051XX");
    $request->setTaksit(1);
    $request->setIslemTutar("1,00");
    $request->setToplamTutar("1,00");
    $request->setIslemGuvenlikTip("3D");
    $request->setIslemId("103051XX");
    $request->setKartIslemId("103051XX");
    $request->setHataUrl("https://digiteam.com.tr?q=hata");
    $request->setBasariliUrl("https://digiteam.com.tr?q=basarili");
    $request->setRefUrl("https://digiteam.com.tr?q=odeme");
    $request->setIpAdres("4.4.4.4");

    $odeme = \Param\Model\Odeme::saklamaliodeme($request, Config::options());
    print_r($odeme);
}

function nonsecure3dodeme()
{
    $request = new \Param\Request\Nonsecure3DOdemeRequest();
    $request->setSanalPOSId(1014);
    $request->setKartSahibi("Test Test");
    $request->setKartNo("4444444444444444");
    $request->setKartCVV("444");
    $request->setKartSonKullanmaTarihAy("04");
    $request->setKartSonKullanmaTarihYil("2020");
    $request->setKartSahibiTelNo("53262095XX");
    $request->setSiparisId(123123123);
    $request->setTaksit(1);
    $request->setIslemTutar("100,00");
    $request->setToplamTutar("100,00");
    $request->setIslemGuvenlikTip("3D");
    $request->setIslemId("1234567");
    $request->setHataUrl("http://digiteam.com.tr?q=hata");
    $request->setBasariliUrl("http://digiteam.com.tr?q=basarili");
    $request->setRefUrl("http://digiteam.com.tr?q=odeme");
    $request->setIpAdres("192.168.1.1");

    $odeme = \Param\Model\Odeme::nonsecure3dodeme($request, Config::options());
    print_r($odeme);
}

function odeme()
{
    $request = new \Param\Request\OdemeRequest();
    $request->setSanalPOSId(1014);
    $request->setKartSahibi("Test Test");
    $request->setKartNo("4444444444444444");
    $request->setKartSonKullanmaTarihAy("04");
    $request->setKartSonKullanmaTarihYil("2020");
    $request->setKartCVV("444");
    $request->setKartSahibiTelNo("53262095XX");
    $request->setSiparisId(123123123);
    $request->setTaksit(1);
    $request->setIslemTutar("100,00");
    $request->setToplamTutar("100,00");
    $request->setIslemId("1234567");
    $request->setHataUrl("http://digiteam.com.tr?q=hata");
    $request->setBasariliUrl("http://digiteam.com.tr?q=basarili");
    $request->setRefUrl("http://digiteam.com.tr?q=odeme");
    $request->setIpAdres("192.168.1.1");

    $odeme = \Param\Model\Odeme::odeme($request, Config::options());
    print_r($odeme);
}

function bkmodeme()
{
    $request = new \Param\Request\BKMExpressileOdemeRequest();
    $request->setMusteriAd("Test Test");
    $request->setMusteriTelNo("53262095XX");
    $request->setHataUrl("https://digiteam.com.tr");
    $request->setBasariliUrl("https://digiteam.com.tr");
    $request->setSiparisId("1234567");
    $request->setSiparisAciklama("Açıklama");
    $request->setTutar(100);
    $request->setIslemId(123123123);
    $request->setIpAdres("192.168.1.1");
    $request->setRefUrl("https://digiteam.com.tr");

    $odeme = \Param\Model\Odeme::bkmodeme($request, Config::options());
    print_r($odeme);
}
