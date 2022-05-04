<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function registerUser(Request $request){
        $request->validate([
            'vardas'=>'required',
            'el_pastas'=>'required|email|unique:users',
            'slaptazodis'=>'required|min:5|max:12' 
        ]);
        $user = new User();
        $user->vardas = $request->vardas;
        $user->el_pastas = $request->el_pastas;
        $user->slaptazodis = Hash::make($request->slaptazodis);
        $res = $user->save();

        if($res){
            return back()->with('success', 'Sėkmingai užsiregistravote.');
        }
        else{
            return back()->with('fail', 'Įvyko klaida, bandykite dar kartą.');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'vardas'=>'required',
            'slaptazodis'=>'required|min:5|max:12' 
        ]);
        $user = User::where('vardas','=',$request->vardas)->first();
        if($user){
            if(Hash::check($request->slaptazodis,$user->slaptazodis)){
                $request->session()->put('loginId',$user->id);
                return redirect('/dashboard/home');
            }
            else{
                return back()->with('fail','Slaptažodis neteisingas.');
            }
        }
        else{
            return back()->with('fail','Paskyros su šiuo vardu nėra.');
        }
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('');
        }
    }
}
