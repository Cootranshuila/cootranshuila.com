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
            'Modo' => 0,
            'InfoAdicional' => 0
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

    public function checkout() {
        return view('checkout');
    }

    public function validarViaje(Request $request) {
        // Validar todas las butacas
        foreach ($request['butacas'] as $butaca) {
            $info_butaca = $this->GetOcupacionButaca($request['viaje'], $butaca);

            // Si ocurre algun error, terminar el proceso
            if($info_butaca->error) {
                $error = [
                    'error' => true,
                    'butaca' => $butaca
                ];

                break;
            }

            // Buscamos si desde el terminal origen esta libre (-1)
            foreach ($info_butaca->parada as $info) {
                if($info['TerminalID'] == $request['origen_id']) {
                    $butaca_origen = $info['Estado'];

                    break;
                }
            }

            // Buscamos si desde el terminal destino esta libre (-1)
            foreach ($info_butaca->parada as $info) {
                if($info['TerminalID'] == $request['destino_id']) {
                    $butaca_destino = $info['Estado'];

                    break;
                }
            }

            if($butaca_origen == "-1" && $butaca_destino == "-1") {
                $reservar_butaca = $this->BloquearButacaConVencimiento($request['viaje'], $butaca, $request['origen_id'], $request['destino_id']);

                if( $reservar_butaca['BloqueoCodigo'] == "-1" ||
                    $reservar_butaca['BloqueoCodigo'] == "-3" ||
                    $reservar_butaca['BloqueoCodigo'] == "-4" ||
                    $reservar_butaca['BloqueoCodigo'] == "-2" ) {
                        return [
                            'error' => true,
                            'mensaje' => 'Una de las sillas seleccionadas ya se encuentra en uso'
                        ];
                    }
            }
        }

        // Si se completa el proceso anterior, pasamos a la venta
        return [
            'error' => false,
            'mensaje' => 'Ok'
        ];

    }

    private function GetOcupacionButaca($viaje, $butaca) {
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
            'ViajeID' => $viaje,
            'CocheOrden' =>  1,
            'Butaca' =>  $butaca,
            'Modo' => 0
        );

        // se realiza la solicitud
        try {
            $response = $client->GetOcupacionButaca($parameters);

            $butaca = new \SimpleXMLElement($response->GetOcupacionButacaResult);

            return $butaca;
        } catch (\Exception $e) {
            return [
                'error' => 1,
                'mensaje' => $e->getMessage()
            ];
        }
    }

    private function BloquearButacaConVencimiento($viaje, $butaca, $origen_id, $destino_id) {
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
            'ViajeID' => $viaje,
            'TerminalOrigenID' =>  $origen_id,
            'TerminalDestinoID' =>  $destino_id,
            'CocheOrden' => 1,
            'Butaca' => $butaca,
            'MinutosValidez' => 15
        );

        // se realiza la solicitud
        try {
            $response = $client->BloquearButacaConVencimiento($parameters);

            $butaca = new \SimpleXMLElement($response->BloquearButacaConVencimientoResult);

            return $butaca;
        } catch (\Exception $e) {
            return [
                'error' => 1,
                'mensaje' => $e->getMessage()
            ];
        }
    }
}
