<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config.php';

#saklamaliodeme();
#kullanici_pos_oranlari();
#saklama();
silme();

function saklama()
{
    $request = new \Param\Request\KartSaklamaRequest();
    $request->setKartSahibi("Selim Çoban");
    $request->setKartNo("XXXXXXXXXXXXXXXXXXXXXX");
    $request->setKartSonKullanmaTarihAy("10");
    $request->setKartSonKullanmaTarihYil("20");
    $request->setKartAdi("SelimKart");
    $request->setKartIslemId(1030515186);

    $saklama = \Param\Model\Kart::saklama($request, Config::options());
    print_r($saklama);
}

function kullanici_pos_oranlari()
{
    $request = new \Param\Request\KullaniciPosOranlariRequest();
    $posOranlari = \Param\Model\PosOranlari::kullanici($request, Config::options());
    print_r($posOranlari);
}

function saklamaliodeme()
{
    $request = new \Param\Request\KartSaklamaliOdemeRequest();
    $request->setSanalPOSId(1008);
    $request->setKartGuid("ea6901a3-398a-47ea-b1a8-XXXXXXXXXXXXXXX");
    $request->setKartCVV("588");
    $request->setKartSahibiTelNo("53222095XX");
    $request->setSiparisId("10305151XX");
    $request->setSiparisAciklama("103051XX");
    $request->setTaksit(1);
    $request->setIslemTutar("1,00");
    $request->setToplamTutar("1,00");
    $request->setIslemGuvenlikTip("3D");
    $request->setIslemId("103051XX");
    $request->setKartIslemId("103051XX");
    $request->setHataUrl("http://digiteam.com.tr?q=hata");
    $request->setBasariliUrl("http://digiteam.com.tr?q=basarili");
    $request->setRefUrl("http://digiteam.com.tr?q=odeme");
    $request->setIpAdres("4.4.4.4");

    $odeme = \Param\Model\Odeme::saklamaliodeme($request, Config::options());
    print_r($odeme);
}

function silme()
{
    $request = new \Param\Request\SakliKartSilmeRequest();
    $request->setKartAdi("ee6901a3-398a-47ea-b1a8-XXXXXX");
    //$request->setKartIslemId("");

    $silme = \Param\Model\Kart::silme($request, Config::options());
    print_r($silme);
}