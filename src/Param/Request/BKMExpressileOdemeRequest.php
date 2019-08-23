<?php

namespace Param\Request;

use Param\JsonBuilder;
use Param\Request;

class BKMExpressileOdemeRequest extends Request
{
    const METHOD = 'TP_Islem_Odeme_BKM';
    const RESULT = 'TP_Islem_Odeme_BKMResult';

    protected $musteriAd;
    protected $musteriTelNo;
    protected $hataUrl;
    protected $basariliUrl;
    protected $siparisId;
    protected $siparisAciklama;
    protected $tutar;
    protected $islemHash;
    protected $islemId;
    protected $ipAdres;
    protected $refUrl;

    public function getParameters($parameters)
    {
        $parameters->Customer_Info = $this->getMusteriAd();
        $parameters->Customer_GSM = $this->getMusteriTelNo();
        $parameters->Error_URL = $this->getHataUrl();
        $parameters->Success_URL = $this->getBasariliUrl();
        $parameters->Order_ID = $this->getSiparisId();
        $parameters->Order_Description = $this->getSiparisAciklama();
        $parameters->Amount = $this->getTutar();
        $parameters->Payment_Hash = $this->getIslemHash();
        $parameters->Transaction_ID = $this->getIslemId();
        $parameters->IPAddress = $this->getIpAdres();
        $parameters->Referrer_URL = $this->getRefUrl();
        return $parameters;
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

    public function getTutar()
    {
        return $this->tutar;
    }

    public function setTutar($tutar)
    {
        return $this->tutar = $tutar;
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

    public function getMusteriTelNo()
    {
        return $this->musteriTelNo;
    }

    public function setMusteriTelNo($musteriTelNo)
    {
        return $this->musteriTelNo = $musteriTelNo;
    }

    public function getMusteriAd()
    {
        return $this->musteriAd;
    }

    public function setMusteriAd($musteriAd)
    {
        return $this->musteriAd = $musteriAd;
    }

    public function getResponse(Request $request)
    {
        $sonuc = new \stdClass();

        if ($request->response->{self::RESULT}->Sonuc > 0) {
            @$sonuc->Sonuc = $request->response->{self::RESULT}->Response_Code;
            @$sonuc->Sonuc_Str = $request->response->{self::RESULT}->Response_Message;
            @$sonuc->SonucObj = $request->response->{self::RESULT}->Redirect_URL;
        } else {
            @$sonuc->Sonuc = $request->response->{self::RESULT}->Response_Code;
            @$sonuc->Sonuc_Str = $request->response->{self::RESULT}->Response_Message;
            @$sonuc->SonucObj = $request->response->{self::RESULT}->Redirect_URL;
        }

        return $sonuc;
    }
    
    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
            ->getObject();
    }
}
