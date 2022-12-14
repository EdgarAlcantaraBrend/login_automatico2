<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
class UserController extends Controller
{
    public function create(Request $request){
        $user = new Persona();
   
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return json_encode(["msg" => "usuario agregado"]); 
    }
}
