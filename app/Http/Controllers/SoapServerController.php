<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use SoapServer;
use App\WebServices\WSDLDocument;
use App\WebServices\ZoologicoWebService;

class SoapServerController extends Controller
{
    //
    private $clase=ZoologicoWebService::class;
    private $uri="http://zoologico.laravel/api";
    private  $urlWSDL = "http://zoologico.laravel/api/wsdl";

    public function getServer()
    {
        $server=new SoapServer($this->urlWSDL);
        $server->setClass($this->clase);
        $server->handle();
        exit;

    }

    public function getWSDL()
    {
        $wsld=new WSDLDocument($this->clase, $this->uri, $this->uri);
        $wsld->formatOutput=true;
        header('Content-Type: text/xml');
        echo $wsld->saveXML();
        exit;



    }
}
