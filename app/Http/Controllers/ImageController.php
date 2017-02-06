<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;
use App\Prueba;
use Intervention\Image\ImageManagerStatic as Image;
use App\TokenFirebase;
class ImageController extends Controller
{
    public function upload(Request $request)
    {
    	$deito=str_slug(Carbon::now());
    	$deito1='https://deitodeito.vagrantshare.com/'.$deito.'.jpg';
    	$img=Image::make($request->file('deito'))->encode('jpg',75)->save($deito.'.jpg');
    	$User = new Prueba(['name' => $deito1]);
		return \Firebase::push('image',$User);
    }
    public function token(){

    }
    public function addtoken(Request $request){
        $token=$request->get('token');
        TokenFirebase::create(['token'=>$token]);
    }
}
