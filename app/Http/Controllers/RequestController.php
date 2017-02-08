<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
class RequestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function listRequest(){
    	$solicitudes=\Firebase::get('Solicitud');
    	return view('solicitud',compact('solicitudes'));
    }
    public function deito($id){
    	$deviceToken = TokenFirebase::all()->last()->token;
        \Firebase::update('/Solicitud/'.$id, array('Estado' => 'Aceptada'));
        $message = 'Tu Solicitud ha sido aceptada, esperamos en el Banco a tu cliente!';
        
    	/*\PushNotification::app('appNameAndroid')
            ->to($deviceToken)
            ->send($message);*/
    }
    public function nodeito($id){
    	$deviceToken = TokenFirebase::all()->last()->token;
        \Firebase::update('/Solicitud/'.$id, array('Estado' => 'Cancelado'));
        $message = 'Tu Solicitud ha sido rechazada, revisa la documentacion!';
        
    	/*\PushNotification::app('appNameAndroid')
            ->to($deviceToken)
            ->send($message);*/
        return redirect()->route('listRequest');
    }

}
