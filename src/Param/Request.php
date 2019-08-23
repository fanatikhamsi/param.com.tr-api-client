<?php

namespace Param;

class Request extends BaseModel
{
    protected $guid;
    protected $response;

    public function getGuid()
    {
        return $this->guid;
    }

    public function setGuid($guid)
    {
        return $this->guid = $guid;
    }

    public function getResponse(Request $request)
    {
        $endSchemaMarker = "</xs:schema>";
        $endSchema = strpos($request->response->{$request::RESULT}->DT_Bilgi->any, $endSchemaMarker);
        $postXML = substr($request->response->{$request::RESULT}->DT_Bilgi->any, $endSchema + strlen($endSchemaMarker));
        $xml = simplexml_load_string(trim($postXML));
        $xml->registerXPathNamespace('d', 'urn:schemas-microsoft-com:xml-diffgram-v1');
        return $xml;
    }

    public function setResponse($response)
    {
        return $this->response = $response;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->getObject();
    }
}
