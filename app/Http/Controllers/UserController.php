<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    
    public function registerEnterprise(Request $request){
        $document_types = DB::table('ttipo_doc_legals')->get();
        return view('registerEnterprise',['document_types'=>$document_types]);
    }

    public function storeEnterprise(Request $request){
        $randomPassword = $this->generateRandomString(16);

        DB::table('tusuarios')->insert([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'fktipo_doc' => $request->input('document-type'),
            'num_doc' => $request->input('document-number'),
            'password' => Hash::make($randomPassword),
            'estado' => 0,
            'user_type' => 2,
        ]);

        $details = [
            'password' => $randomPassword,
        ];
        \Mail::to($request->input('email'))->send(new \App\Mail\AccountMail($details));

        return view('registerSuccess');
    }
    
    public function registerEntrepreneur(Request $request){
        $document_types = DB::table('ttipo_doc_legals')->get();
        return view('registerEntrepreneur',['document_types'=>$document_types]);
    }

    public function storeEntrepreneur(Request $request){
        $randomPassword = $this->generateRandomString(16);

        DB::table('tusuarios')->insert([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'fktipo_doc' => $request->input('document-type'),
            'num_doc' => $request->input('document-number'),
            'password' => Hash::make($randomPassword),
            'estado' => 0,
            'user_type' => 3,
        ]);

        $details = [
            'password' => $randomPassword,
        ];
        \Mail::to($request->input('email'))->send(new \App\Mail\AccountMail($details));

        return view('registerSuccess');
    }
    
    public function registerPortfolio(Request $request){
        $document_types = DB::table('ttipo_doc_legals')->get();
        return view('registerPortfolio',['document_types'=>$document_types]);
    }

    public function storePortfolio(Request $request){
        $randomPassword = $this->generateRandomString(16);

        DB::table('tusuarios')->insert([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'fktipo_doc' => $request->input('document-type'),
            'num_doc' => $request->input('document-number'),
            'password' => Hash::make($randomPassword),
            'estado' => 0,
            'user_type' => 4,
        ]);

        $details = [
            'password' => $randomPassword,
        ];
        \Mail::to($request->input('email'))->send(new \App\Mail\AccountMail($details));

        return view('registerSuccess');
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
