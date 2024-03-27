<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;

class CompaniesConroller extends Controller
{
    public function companies_function(){
        $companies = companies::all();
        return view('companis\company',compact('companies'));

    }
    public function viewcompanies_function($id){
        $companies = companies::find($id);
        if ($companies) {
            return view('companis\viewcompanies', compact('companies'));
        } else {
            return redirect('/')->with('error', 'Profile not found');
        }
    }
    public function delete_function($id){
        $companies = companies::find($id);
        $companies->delete();
        return redirect('companies')->with('delete','the company   was deleted ');
    }

    public function addnewComp_function(){
        return view('companis.addnewComp');
    }
    public function addnewComp_function_traitement(Request $request){
        $request->validate([
            'Cnom'=>'required',
            'adress'=>'required',
            'email'=>'required|email',
            'website'=>'required',
        ]);
        $companies = new companies();
        $companies->Cnom = $request->Cnom;
        $companies->adress = $request->adress;
        $companies->email = $request->email;
        $companies->website = $request->website;
        $companies->save();
        return redirect('companies')->with('status','the company   was added ');
    }
}
