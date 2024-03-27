<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;


class ContactController extends Controller
{
    public function index(){
        $profils = profil::query()->paginate(6);
        return view('contact',compact('profils'));
    }
    public function addnew_function(){
        return view('addnew');
    }
    public function addnew_function_traitement(Request $request){
        $request->validate([
            'Fnom'=>'required',
            'Lnom'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'adress'=>'required',
            'selectOption'=>'required',
        ]);
        $profil = new profil();
        $profil->Fnom = $request->Fnom;
        $profil->Lnom = $request->Lnom;
        $profil->email = $request->email;
        $profil->phone = $request->phone;
        $profil->adress = $request->adress;
        $profil->selectOption = $request->selectOption;
        $profil->save();
        return redirect('/')->with('status','the profil   was added ');
    }
    public function delete_function($id){
        $profil = profil::find($id);
        $profil->delete();
        return redirect('/')->with('delete','the profil   was deleted ');
    
}
public function viewprofil_function($id){
    $profil = profil::find($id);
    if ($profil) {
        return view('viewprofil', compact('profil'));
    } else {
        return redirect('/')->with('error', 'Profile not found');
    }
}
public function update_function($id){
    $profil = profil::find($id);
    if ($profil) {
        return view('edit', compact('profil'));
    } else {
        return redirect('/')->with('error', 'Profile not found');
    }
     }
    public function update_function_traitement(Request $request){
        $request->validate([
            'Fnom'=>'required',
            'Lnom'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'adress'=>'required',
            'selectOption'=>'required',
        ]);
        $profil = profil::find($request->id);
        $profil->Fnom = $request->Fnom;
        $profil->Lnom = $request->Lnom;
        $profil->email = $request->email;
        $profil->phone = $request->phone;
        $profil->adress = $request->adress;
        $profil->selectOption = $request->selectOption;
        $profil->update();
        return redirect('/')->with('status','the profil   was updated ');
    }
}
