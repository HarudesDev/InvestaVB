<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function register(Request $request){
        $randomPassword = $this->generateRandomString(16);

        DB::table('tusuarios')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'fktipo_doc' => $request->input('document-type'),
            'num_doc' => $request->input('document-number'),
            'password' => Hash::make($randomPassword),
            'estado' => 0
        ]);

        return view('registerSuccess', ['password' => $randomPassword]);
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
