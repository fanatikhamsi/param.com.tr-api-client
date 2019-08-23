<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';

 #sha();
bin();
 
function sha()
{
    $request = new \Param\Request\SHA2B64Request();
    $request->setData("fanatikhamsi");
    
    $sha = \Param\Model\SHA::sha($request, Config::options());
    print_r($sha);
}

function bin()
{
    $request = new \Param\Request\BinKodlariRequest();
    $request->setBin("");
    
    $sha = \Param\Model\SHA::bin($request, Config::options());
    print_r($sha);
}
