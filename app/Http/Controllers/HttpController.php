<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;
use App\Prueba;
use Intervention\Image\ImageManagerStatic as Image;
use App\TokenFirebase;
class HttpController extends Controller
{
    public function upload(Request $request)
    {
    	$deito=str_slug(Carbon::now());
    	$deito1='http://45.55.155.101//'.$deito.'.jpg';
        $path=$request->file('deito')->getRealPath();
    	$img=Image::make($path)->encode('jpg',75)->save($deito.'.jpg');
    	$solicitud=$request->get('solicitud');
    	$solicitud='ghjkldsasgh';
    	$name=$request->get('nombre');
    	$User = new Prueba(['name'=>$name,'URL' => $deito1]);
		$codigo= \Firebase::push('image/'.$solicitud,$User);
		if (!is_null($codigo)) {
			return 200;
		}
		return 401;

    }
    
    public function addtoken(Request $request){
        $token=$request->get('token');
        TokenFirebase::create(['token'=>$token]);
    }

}
