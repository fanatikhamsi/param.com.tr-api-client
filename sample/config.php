<?php
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
