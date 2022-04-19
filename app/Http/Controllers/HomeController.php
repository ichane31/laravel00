<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Professor;
use App\Models\Speciality;
use App\Models\professorsinfo;

class HomeController extends Controller
{ 
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                
                $professor = professor::all();
                $speciality = speciality::all();
                return view('user.home',compact('professor'));
                return view('user.home',compact('speciality'));
            }
            else{
                return view('admin.home');
            }

        }
        else{
            return redirect()->back();

        }
    }
    public function index(){

        if(Auth::id()){
            return redirect('home');
        }
        else{
        $professor = professor::all();
        $speciality = speciality::all();
        return view('user.home',compact('professor'));
        return view('user.home',compact('speciality'));
        }
    }


    public function professorinfo(Request $request){
        $data=new professorsinfo;
       /* $photo=$request->photo;
        $imagename=time().'.'.$photo->getClientoriginalExtension();
        $request->photo->move('profinfophoto',$imagename);

        $dossierA=$request->dossierA;
        $dossierAname=time().'.'.$dossierA->getClientoriginalExtension();
        $request->dossierA->move('profinfoDossierA',$dossierAname);

        $dossierP=$request->dossierP;
        $dossierPname=time().'.'.$dossierP->getClientoriginalExtension();
        $request->dossierP->move('profinfoDossierP',$dossierPname);

        $dossierS=$request->dossierS;
        $dossierSname=time().'.'.$dossierA->getClientoriginalExtension();
        $request->dossierS->move('profinfoDossierS',$dossierSname);
*/
        $data->photo=$request->photo;
        $data->nom=$request->nom;
        $data->prenom=$request->prenom;
        $data->cin=$request->cin;
        $data->drpp=$request->drpp;
        $data->date_recrutement=$request->date_recrutement;
        $data->telephone=$request->telephone;
        $data->email=$request->email;
        $data->date_naissance=$request->date_naissance;
        $data->specialite=$request->specialite;
        $data->structure=$request->structure;
        $data->directeur=$request->directeur;
        $data->dossierA=$request->dossierA;
        $data->dossierP=$request->dossierP;
        $data->dossierS=$request->dossierS;
         $data->status='En cours';
        


        $data->save();
        return redirect()->back()->with('message','vos informations ont ete ajoute avec succes');
    }
     
    public function mesinfos(){

        if(Auth::id())
        {
            //$info=professorsinfo::all();
            $userid=Auth::user()->id;
            $info=professorsinfo::where('id',$userid)->get();
            return view('user.mes_infos',compact('info'));
        }
        else{
            return redirect()->back();
        }
    }

    public function annuler_info($id){
        $data=professorsinfo::find($id);
        $data->delete();
        return redirect()->back();

    }

}
