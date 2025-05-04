<?php

namespace App\Http\Controllers\Backend\Soap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NumberToWordsController extends Controller
{
    // Método para mostrar la vista inicial
    public function index()
    {
        return view('number_to_words');
    }

    // Método para convertir un número a palabras
    public function convert(Request $request)
    {
        // Obtención del número desde el formulario y validación de entrada, la cual debe ser obligatoria y un número entre 0 y 999999999
        $request->validate([
            'number' => 'required|numeric|min:0|max:999999999',
        ]);

        try {
            // Creación de instancia de SoapClient y llamada al servicio web de conversión de número a palabras
            $client = new \SoapClient('http://www.dataaccess.com/webservicesserver/NumberConversion.wso?WSDL');

            // Definición de parámetros para la llamada al servicio SOAP
            $params = ['ubiNum' => (int)$request->number];

            // Llamada al método NumberToWords del servicio SOAP para convertir el número a palabras
            $response = $client->NumberToWords($params);

            // Obtención y verificación de la respuesta
            $words = $response->NumberToWordsResult ?? 'Error: No se pudo convertir el número.';
        } catch (\Exception $e) {
            // Manejo de excepciones y errores en la llamada al servicio SOAP
            $words = 'Error: ' . $e->getMessage();
        }

        // Retorno de la vista con el resultado de la conversión
        return view('number_to_words', [
            'result' => $words,
            'input' => $request->number
        ]);
    }
}
