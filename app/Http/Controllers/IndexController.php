<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SoapController;
use DateTime;

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

    public function GetHabilitadasDestino(Request $request){
        // se obtine el token
        $token = $this->soap->getToken();

        // comprobar si el token da error
        if (isset($token->error))
            return $token->mensaje;

        //obtener configuracion y cabeceras de solicitud
        // pasamos la clase a utilizar
        $client = $this->soap->config('Terminal.asmx');

        // pasar parametros a ser enviados o requeridos
        $parameters = array(
            'Token' => $token,
            'TerminalOrigenID' =>  $request['id']
        );

        // se realiza la solicitud
        try {
            $response = $client->GetHabilitadasDestino($parameters);

            $terminales = new \SimpleXMLElement($response->GetHabilitadasDestinoResult);

            return json_encode($terminales);
        } catch (\Exception $e) {
            return [
                'error' => 1,
                'mensaje' => $e->getMessage()
            ];
        }
    }

    public function GetDisponiblesIda(Request $request){
        
        // se obtine el token
        $token = $this->soap->getToken();

        // comprobar si el token da error
        if (isset($token->error))
            return $token->mensaje;

        //obtener configuracion y cabeceras de solicitud
        // pasamos la clase a utilizar
        $client = $this->soap->config('Viaje.asmx');

        $fecha = new \DateTime($request['txtFecSalida']);
        $fecha = $fecha->format('d/m/Y H:i:s');
        // pasar parametros a ser enviados o requeridos
        $parameters = array(
            'Token' => $token,
            'Fecha' => $fecha,
            'TerminalOrigenID' =>  $request['optOrigen'],
            'TerminalDestinoID' =>  $request['optDestino'],
            'FechaAbierta' => 0,
            'BuscarTodosLosHorarios' => 1,
            'PuestoTrabajoID' => -1,
            'Operacion' => 0,
            'ModoResultados' => 0,
            'CantidadPasajeros' => 1
        );

        // dd($parameters);

        // se realiza la solicitud
        try {
            $response = $client->GetDisponiblesIda($parameters);
        
            $viajes = new \SimpleXMLElement($response->GetDisponiblesIdaResult);

            return json_encode($viajes);
        } catch (\Exception $e) {
            return [
                'error' => 1,
                'mensaje' => $e->getMessage()
            ];
        }
    }

    /*
    ---------------------------------
    |  seleccionar viajes disponibles
    ---------------------------------
    */
    public function SelectViaje(){
        return view('buscar_buses');
    }
}
