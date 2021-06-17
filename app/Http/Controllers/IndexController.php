<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SoapController;

class IndexController extends Controller
{
    private $soap;

    public function __construct(SoapController $soap) {
        $this->soap = $soap;
    }

    public function GetHabilitadasOrigen() {
        $token = $this->soap->getToken();

        if (isset($token->error))
            return $token->mensaje;

        $client = $this->soap->config('Terminal.asmx');

        $parameters = array(
            'Token' => $token,
        );

        try {
            $response = $client->GetHabilitadasOrigen($parameters);

            $terminales = new \SimpleXMLElement($response->GetHabilitadasOrigenResult);

            return json_encode($terminales);
        } catch (\Exception $e) {
            return [
                'error' => 1,
                'mensaje' => $e->getMessage()
            ];
        }
    }
}
