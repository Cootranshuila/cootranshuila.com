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

        $fechaActual = new \DateTime();
        $fechaViaje = new \DateTime($request['txtFecSalida']);
        $date = $fechaViaje->format('Y-m-d');
        $fechaDeViaje = $fechaViaje->format('d/m/Y');
        
        if($request['txtFecSalida'] == $fechaActual->format('Y-m-d')) {
            $fechaActual = $fechaActual->modify('+60 minute'); 
            $fecha = $fechaActual->format('d/m/Y H:i:s');
        } else {
            $fecha = new \DateTime($request['txtFecSalida']);
            $fecha = $fecha->format('d/m/Y H:i:s');
        }

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

            // dd($viajes->ida['TerminalOrigen']);

            return view('buscar_buses', ['viajes' => $viajes, 'fechaDeViaje' => $fechaDeViaje, 'date' => $date]); 
            
        } catch (\Exception $e) {
            return [
                'error' => 1,
                'mensaje' => $e->getMessage()
            ];
        }
    }

    public function GetMapaButacas(Request $request){
        // se obtine el token
        $token = $this->soap->getToken();

        // comprobar si el token da error
        if (isset($token->error))
            return $token->mensaje;

        //obtener configuracion y cabeceras de solicitud
        // pasamos la clase a utilizar
        $client = $this->soap->config('Viaje.asmx');

        // pasar parametros a ser enviados o requeridos
        $parameters = array(
            'Token' => $token,
            'ViajeID' => $request['ViajeID'],
            'TerminalOrigenID' =>  $request['TerminalOrigenID'],
            'TerminalDestinoID' =>  $request['TerminalDestinoID'],
            'Orientacion' => 1,
            'Modo' => 1,
            'InfoAdicional' => 1
        );

        // dd($parameters);

        // se realiza la solicitud
        try {
            $response = $client->GetMapaButacas($parameters);

            $butacas = new \SimpleXMLElement($response->GetMapaButacasResult);

            return json_encode($butacas);

            // return view('buscar_buses', ['viajes' => $viajes]); 
            
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
        return view('buscar_viaje');
    }

}
