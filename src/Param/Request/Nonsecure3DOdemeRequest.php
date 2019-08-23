<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class Nonsecure3DOdemeRequest extends Request
{
    const METHOD = 'TP_Islem_Odeme_WNS';
    const RESULT = 'TP_Islem_Odeme_WNSResult';

    protected $sanalPOSId;
    protected $kartSahibi;
    protected $kartNo;
    protected $kartSonKullanmaTarihAy;
    protected $kartSonKullanmaTarihYil;
    protected $kartCVV;
    protected $kartSahibiTelNo;
    protected $hataUrl;
    protected $basariliUrl;
    protected $siparisId;
    protected $siparisAciklama;
    protected $taksit;
    protected $islemTutar;
    protected $toplamTutar;
    protected $islemHash;
    protected $islemGuvenlikTip;
    protected $islemId;
    protected $ipAdres;
    protected $refUrl;
    protected $data1;
    protected $data2;
    protected $data3;
    protected $data4;
    protected $data5;

    public function getParameters($parameters)
    {
        $parameters->SanalPOS_ID = $this->getSanalPOSId();
        $parameters->KK_Sahibi = $this->getKartSahibi();
        $parameters->KK_No = $this->getKartNo();
        $parameters->KK_SK_Ay = $this->getKartSonKullanmaTarihAy();
        $parameters->KK_SK_Yil = $this->getKartSonKullanmaTarihYil();
        $parameters->KK_CVC = $this->getKartCVV();
        $parameters->KK_Sahibi_GSM = $this->getKartSahibiTelNo();
        $parameters->Hata_URL = $this->getHataUrl();
        $parameters->Basarili_URL = $this->getBasariliUrl();
        $parameters->Siparis_ID = $this->getSiparisId();
        $parameters->Siparis_Aciklama = $this->getSiparisAciklama();
        $parameters->Taksit = $this->getTaksit();
        $parameters->Islem_Tutar = $this->getIslemTutar();
        $parameters->Toplam_Tutar = $this->getToplamTutar();
        $parameters->Islem_Hash = $this->getIslemHash();
        $parameters->Islem_Guvenlik_Tip = $this->getIslemGuvenlikTip();
        $parameters->Islem_ID = $this->getIslemId();
        $parameters->IPAdr = $this->getIpAdres();
        $parameters->Ref_URL = $this->getRefUrl();
        $parameters->Data1 = $this->getData1();
        $parameters->Data2 = $this->getData2();
        $parameters->Data3 = $this->getData3();
        $parameters->Data4 = $this->getData4();
        $parameters->Data5 = $this->getData5();
        return $parameters;
    }

    public function getData5()
    {
        return $this->data5;
    }

    public function setData5($data5)
    {
        return $this->data5 = $data5;
    }

    public function getData4()
    {
        return $this->data4;
    }

    public function setData4($data4)
    {
        return $this->data4 = $data4;
    }

    public function getData3()
    {
        return $this->data3;
    }

    public function setData3($data3)
    {
        return $this->data3 = $data3;
    }

    public function getData2()
    {
        return $this->data2;
    }

    public function setData2($data2)
    {
        return $this->data2 = $data2;
    }

    public function getData1()
    {
        return $this->data1;
    }

    public function setData1($data1)
    {
        return $this->data1 = $data1;
    }

    public function getRefUrl()
    {
        return $this->refUrl;
    }

    public function setRefUrl($refUrl)
    {
        return $this->refUrl = $refUrl;
    }

    public function getIpAdres()
    {
        return $this->ipAdres;
    }

    public function setIpAdres($ipAdres)
    {
        return $this->ipAdres = $ipAdres;
    }

    public function getIslemId()
    {
        return $this->islemId;
    }

    public function setIslemId($islemId)
    {
        return $this->islemId = $islemId;
    }

    public function getIslemHash()
    {
        return $this->islemHash;
    }

    public function setIslemHash($islemHash)
    {
        return $this->islemHash = $islemHash;
    }

    public function getIslemGuvenlikTip()
    {
        return $this->islemGuvenlikTip;
    }

    public function setIslemGuvenlikTip($islemGuvenlikTip)
    {
        return $this->islemGuvenlikTip = $islemGuvenlikTip;
    }

    public function getToplamTutar()
    {
        return $this->toplamTutar;
    }

    public function setToplamTutar($toplamTutar)
    {
        return $this->toplamTutar = $toplamTutar;
    }

    public function getIslemTutar()
    {
        return $this->islemTutar;
    }

    public function setIslemTutar($islemTutar)
    {
        return $this->islemTutar = $islemTutar;
    }

    public function getTaksit()
    {
        return $this->taksit;
    }

    public function setTaksit($taksit)
    {
        return $this->taksit = $taksit;
    }

    public function getSiparisAciklama()
    {
        return $this->siparisAciklama;
    }

    public function setSiparisAciklama($siparisAciklama)
    {
        return $this->siparisAciklama = $siparisAciklama;
    }

    public function getSiparisId()
    {
        return $this->siparisId;
    }

    public function setSiparisId($siparisId)
    {
        return $this->siparisId = $siparisId;
    }

    public function getBasariliUrl()
    {
        return $this->basariliUrl;
    }

    public function setBasariliUrl($basariliUrl)
    {
        return $this->basariliUrl = $basariliUrl;
    }

    public function getHataUrl()
    {
        return $this->hataUrl;
    }

    public function setHataUrl($hataUrl)
    {
        return $this->hataUrl = $hataUrl;
    }

    public function getSanalPOSId()
    {
        return $this->sanalPOSId;
    }

    public function setSanalPOSId($sanalPOSId)
    {
        return $this->sanalPOSId = $sanalPOSId;
    }

    public function getKartCVV()
    {
        return $this->kartCVV;
    }

    public function setKartCVV($kartCVV)
    {
        return $this->kartCVV = $kartCVV;
    }

    public function getKartSahibiTelNo()
    {
        return $this->kartSahibiTelNo;
    }

    public function setKartSahibiTelNo($kartSahibiTelNo)
    {
        return $this->kartSahibiTelNo = $kartSahibiTelNo;
    }

    public function getKartSahibi()
    {
        return $this->kartSahibi;
    }

    public function setKartSahibi($kartSahibi)
    {
        return $this->kartSahibi = $kartSahibi;
    }

    public function getKartNo()
    {
        return $this->kartNo;
    }

    public function setKartNo($kartNo)
    {
        return $this->kartNo = $kartNo;
    }

    public function getKartSonKullanmaTarihAy()
    {
        return $this->kartSonKullanmaTarihAy;
    }

    public function setKartSonKullanmaTarihAy($kartSonKullanmaTarihAy)
    {
        return $this->kartSonKullanmaTarihAy = $kartSonKullanmaTarihAy;
    }

    public function getKartSonKullanmaTarihYil()
    {
        return $this->kartSonKullanmaTarihYil;
    }

    public function setKartSonKullanmaTarihYil($kartSonKullanmaTarihYil)
    {
        return $this->kartSonKullanmaTarihYil = $kartSonKullanmaTarihYil;
    }

    public function getResponse(Request $request)
    {
        $sonuc = new \stdClass();

        if ($this->getIslemGuvenlikTip() == "NS" &&
        $request->response->{self::RESULT}->Sonuc > 0 &&
        $request->response->{self::RESULT}->UCD_URL == "Nonsecure" &&
        $request->response->{self::RESULT}->Islem_ID > 0) {
            @$sonuc->Sonuc = $request->response->{self::RESULT}->Sonuc;
            @$sonuc->Sonuc_Str = $request->response->{self::RESULT}->Sonuc_Str;
            @$sonuc->SonucObj = $request->response->{self::RESULT}->Islem_ID;
        } elseif ($this->getIslemGuvenlikTip() == "3D") {
            @$sonuc->Sonuc = $request->response->{self::RESULT}->Sonuc;
            @$sonuc->Sonuc_Str = $request->response->{self::RESULT}->Sonuc_Str;
            @$sonuc->SonucObj = $request->response->{self::RESULT}->UCD_URL;
        } else {
            @$sonuc->Sonuc = $request->response->{self::RESULT}->Sonuc;
            @$sonuc->Sonuc_Str = $request->response->{self::RESULT}->Sonuc_Str;
            @$sonuc->SonucObj = $request->response->{self::RESULT}->Islem_ID;
        }

        return $sonuc;
    }
    
    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
            ->getObject();
    }
}
