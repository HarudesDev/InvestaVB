<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    
    public function registerEnterprise(Request $request){
        $document_types = DB::table('ttipo_doc_legals')->where('id','<','3')->get();
        return view('registerEnterprise',['document_types'=>$document_types]);
    }

    public function storeEnterprise(Request $request){
        $rules=[
            'email' => 'required | max:25 | unique:tusuarios',
            'name' => 'required | max: 25',
            'lastname' => 'required | max:25',
            'document-number' => 'required | max:25',
        ];

        $messages=[
            'email.required' => 'El correo electrónico es obligatorio',
            'email.max' => 'El correo electrónico no debe exceder los 255 caracteres',
            'email.unique' => 'Este correo ya se encuentra registrado',
            'name.required' => 'El nombre es obligatorio',
            'name.max' => 'El nombre no debe exceder los 25 caracteres',
            'lastname.required' => 'El apellido es obligatorio',
            'lastname.max' => 'El apellido no debe exceder los 25 caracteres',
            'document-number.required' => 'El número de documento es obligatorio',
            'document-number.max' => 'El número de documento no debe exceder los 25 caracteres'
        ];

        $request->validate($rules, $messages);

        $randomPassword = $this->generateRandomString(16);

        DB::beginTransaction();

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
            'name' => $request->input('name'),
            'password' => $randomPassword,
        ];

        try{
            \Mail::to($request->input('email'))->send(new \App\Mail\AccountMail($details));
            DB::commit();
            return view('registerSuccess');
        }
        catch(Exception $e){
            DB::rollBack();
            return redirect()->back();
        }
    }
    
    public function registerEntrepreneur(Request $request){
        $document_types = DB::table('ttipo_doc_legals')->where('id','<','3')->get();
        return view('registerEntrepreneur',['document_types'=>$document_types]);
    }

    public function storeEntrepreneur(Request $request){
        $rules=[
            'email' => 'required | max:25 | unique:tusuarios',
            'name' => 'required | max: 25',
            'lastname' => 'required | max:25',
            'document-number' => 'required | max:25',
        ];

        $messages=[
            'email.required' => 'El correo electrónico es obligatorio',
            'email.max' => 'El correo electrónico no debe exceder los 255 caracteres',
            'email.email' => 'El correo electrónico debe cumplir con el formato de email',
            'email.unique' => 'Este correo ya se encuentra registrado',
            'name.required' => 'El nombre es obligatorio',
            'name.max' => 'El nombre no debe exceder los 25 caracteres',
            'lastname.required' => 'El apellido es obligatorio',
            'lastname.max' => 'El apellido no debe exceder los 25 caracteres',
            'document-number.required' => 'El número de documento es obligatorio',
            'document-number.max' => 'El número de documento no debe exceder los 25 caracteres'
        ];

        $request->validate($rules, $messages);

        $randomPassword = $this->generateRandomString(16);

        DB::beginTransaction();

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
            'name' => $request->input('name'),
            'password' => $randomPassword,
        ];

        try{
            \Mail::to($request->input('email'))->send(new \App\Mail\AccountMail($details));
            DB::commit();
            return view('registerSuccess');
        }
        catch(Exception $e){
            DB::rollBack();
            return redirect()->back();
        }
    }
    
    public function registerPortfolio(Request $request){
        $document_types = DB::table('ttipo_doc_legals')->where('id','<','3')->get();
        return view('registerPortfolio',['document_types'=>$document_types]);
    }

    public function storePortfolio(Request $request){
        $rules=[
            'email' => 'required | max:25 | unique:tusuarios',
            'name' => 'required | max: 25',
            'lastname' => 'required | max:25',
            'document-number' => 'required | max:25',
        ];

        $messages=[
            'email.required' => 'El correo electrónico es obligatorio',
            'email.max' => 'El correo electrónico no debe exceder los 255 caracteres',
            'email.email' => 'El correo electrónico debe cumplir con el formato de email',
            'email.unique' => 'Este correo ya se encuentra registrado',
            'name.required' => 'El nombre es obligatorio',
            'name.max' => 'El nombre no debe exceder los 25 caracteres',
            'lastname.required' => 'El apellido es obligatorio',
            'lastname.max' => 'El apellido no debe exceder los 25 caracteres',
            'document-number.required' => 'El número de documento es obligatorio',
            'document-number.max' => 'El número de documento no debe exceder los 25 caracteres'
        ];

        $request->validate($rules, $messages);

        $randomPassword = $this->generateRandomString(16);

        DB::beginTransaction();

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
            'name' => $request->input('name'),
            'password' => $randomPassword,
        ];

        try{
            \Mail::to($request->input('email'))->send(new \App\Mail\AccountMail($details));
            DB::commit();
            return view('registerSuccess');
        }
        catch(Exception $e){
            DB::rollBack();
            return redirect()->back();
        }

    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
