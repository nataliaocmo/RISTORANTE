<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function autenticar(Request $request){
        echo json_encode($_SERVER, JSON_PRETTY_PRINT);
        die();

        $mensaje="El usuario esta autenticado";
        return response()->json(['mensaje'=>$mensaje]);
    
    }
    function autorizar(Request $request){
        $userName="hola";
        $pw="Chao90#u";
        $mensaje2="El usuario está autorizado";
        $mensaje3="Usuario o contraseña incorrectos";
        $long = count($_SERVER);

            if($userName==$_SERVER["PHP_AUTH_USER"] && $pw==$_SERVER["PHP_AUTH_PW"] ){
                return response()->json(['mensaje'=>$mensaje2],200);
                
                $user = User::where('email', $_SERVER["PHP_AUTH_USER"])->get();
                return response()->json(['email'=>$mail]);
            }else{
                return response()->json(['mensaje'=>$mensaje3],404);
            }
        
    }
}
