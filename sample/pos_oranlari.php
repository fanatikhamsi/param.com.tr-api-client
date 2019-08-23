<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config.php';

firma_pos_oranlari();
#kullanici_pos_oranlari();
#ozellestirilmis_pos_oranlari();

function firma_pos_oranlari()
{
    $request = new \Param\Request\FirmaPosOranlariRequest();
    $posOranlari = \Param\Model\PosOranlari::firma($request, Config::options());
    print_r($posOranlari);
}

function kullanici_pos_oranlari()
{
    $request = new \Param\Request\KullaniciPosOranlariRequest();
    $posOranlari = \Param\Model\PosOranlari::kullanici($request, Config::options());
    print_r($posOranlari);
}

function ozellestirilmis_pos_oranlari()
{
    $request = new \Param\Request\OzellestirilmisPosOranlariRequest();
    $request->setOzelOranSkId(1314);
    $request->setMO_01("2");
    $request->setMO_02("2");
    $request->setMO_03("2");
    $request->setMO_04("2");
    $request->setMO_05("2");
    $request->setMO_06("2");
    $request->setMO_07("2");
    $request->setMO_08("2");
    $request->setMO_09("2");
    $request->setMO_10("2");
    $request->setMO_11("2");
    $request->setMO_12("2");

    $posOranlari = \Param\Model\PosOranlari::ozellestirilmis($request, Config::options());
    print_r($posOranlari);
}
