[![Build Status](https://travis-ci.org/fanatikhamsi/param.com.tr-api-client.svg?branch=master)](https://travis-ci.org/fanatikhamsi/param.com.tr-api-client)

# PARAM API Client Library PHP #

param.com.tr üzerinden PARAM API ile Kredi kartı ile taksitli veya tek çekim tahsilat sağlamak amacıyla hazırlanmış ücretsiz  api client kütüphanesidir.

Bu kütüphane official değildir. Ama param.com.tr PARAM API nin kendi kütüphanelerinden daha günceldir. PARAM API nin geliştirilmesine bağlı olarak zaman içinde güncelliğini yitirebilir. [Issues](https://github.com/fanatikhamsi/param.com.tr-api-client/issues) bölümünden iletebilirsiniz.

**NOT** : Client kütüphanesi geliştirmesi PHP 5.4 ortamında gerçekleştirilmiştir. Daha fazla versiyon desteği için yukarıdan travis build detaylarına bakabilirsiniz.

## Minimum gereksinimler ##
* [PHP 5.4.0 ve üzeri](https://www.php.net/)

## Başlangıç ##

**Clone or Download** ile kodları kendi lokalinize indiriniz.

### ParamBootstrap

SplClassLoader ile ilgili api client kütüphanelerini mevcut projenize eklemenizi sağlayacaktır

```php
require_once('../ParamBootstrap.php');
```

sonrada ParamBootstrap ı çalıştırmalısınız:

```php
ParamBootstrap::init();
```

## Ayarlar
```php
//config.php
require_once('../ParamBootstrap.php');
ParamBootstrap::init();

class Config {
    public static function options() {
        $options = new \Param\Options();
        $options->setTerminalId("XXXXXXXXXXXXXX"); //işyeri id
        $options->setUsername("XXXXXXXXXXXXXXXX"); //kullanıcı
        $options->setPassword("XXXXXXXXXXXXXXXX"); //şifre
        $options->setGuid("774EB363-3BCD-XXXXXX"); //guid
        $options->setApiUrl("https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl");
        $options->setApiCardUrl("https://dmzws.ew.com.tr/out.ws/service_ks.asmx?wsdl");
        return $options;
    }
}
```

## Örnekler ##
saklamaliodeme, nonsecure3dodeme, odeme, bkmodeme, dekont, sorgu, iade, iptal, ozetler, firma_pos_oranlari, kullanici_pos_oranlari, ozellestirilmis_pos_oranlari, saklama, saklamalistesi, silme
Tüm örnek kullanımlar için [`samples`](https://github.com/fanatikhamsi/param.com.tr-api-client/tree/master/sample) klasörünü inceleyebilirsiniz.

**Kart saklama**
```php
require_once 'config.php';

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
```

**Kart silme**
```php
require_once 'config.php';

function silme()
{
    $request = new \Param\Request\SakliKartSilmeRequest();
    $request->setKartAdi("c73937ce-95a0-4181-a57d-XXXXXX");
    //$request->setKartIslemId("");
    $silme = \Param\Model\Kart::silme($request, Config::options());
    print_r($silme);
}
```

**Non Secure 3D Ödeme**
```php
require_once 'config.php';

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
```

**Ödeme**
```php
require_once 'config.php';

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

```
saklamaliodeme, nonsecure3dodeme, odeme, bkmodeme, dekont, sorgu, iade, iptal, ozetler, firma_pos_oranlari, kullanici_pos_oranlari, ozellestirilmis_pos_oranlari, saklama, saklamalistesi, silme
Diğer tüm örnek kullanımlar için [`samples`](https://github.com/fanatikhamsi/param.com.tr-api-client/tree/master/sample) klasörünü inceleyebilirsiniz.


[Issues](https://github.com/fanatikhamsi/param.com.tr-api-client/issues) bölümünden görüş, öneri ve isteklerinizi iletebilirsiniz.
