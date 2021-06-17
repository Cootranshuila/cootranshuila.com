<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoapController extends Controller
{
    public function getToken() {
        $client = $this->config('Token.asmx');

        if (isset($client->error))
            return $client->mensaje;

        $parameters = array(
            'Key' => env('KEYWS'),
            'ConsumerID' => env('CONSUMERIDWS')
        );

        try {
            $response = $client->GetToken($parameters);

            $token = (new \SimpleXMLElement($response->GetTokenResult))['Token'];

            return $token;
        } catch (\Exception $e) {
            return [
                'error' => 1,
                'mensaje' => $e->getMessage()
            ];
        }

    }

    public function config($clase) {
        $headers = [
            'Host: huil.fics.sisorgcloud.com',
            'Content-Type: text/xml; charset=utf-8',
            'SOAPAction: "http://agilis.fics.fsl.sisorg.com.ar/GetToken"',
            'Content-Length: length'
        ];

        $wsdlUrl = env('URLWS').$clase.'?WSDL';

        $soapClientOptions = array(
            'cache_wsdl'     => WSDL_CACHE_NONE,
            'trace'          => 1,
            'stream_context' => stream_context_create(
                [
                    'ssl' => [
                        'verify_peer'       => false,
                        'verify_peer_name'  => false,
                        'allow_self_signed' => true
                    ],
                    'http' => [
                        'header' => $headers
                    ]
                ]
            )
        );

        try {
            $client = new \SoapClient($wsdlUrl, $soapClientOptions);

            return $client;
        } catch (\Exception $e) {
            return [
                'error' => 1,
                'mensaje' => $e->getMessage()
            ];
        }
    }
}
