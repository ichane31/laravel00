<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\Speciality;
use App\Models\Professorsinfo;


class AdminController extends Controller
{
    public function addview (){
        return view('admin.add_professor');
    }
    public function add_S_view (){
        return view('admin.add_speciality');
    }
    public function upload(Request $request){
        $professor=new professor;
        $photo=$request->photo;
        $imagename=time().'.'.$photo->getClientoriginalExtension();
        $request->photo->move('profphoto',$imagename);
        $professor->photo=$imagename;
        $professor->nom=$request->nom;
        $professor->cin=$request->cin;
        $professor->drpp=$request->drpp;
        $professor->telephone=$request->telephone;
        $professor->specialite=$request->specialite;


        $professor->save();
        return redirect()->back()->with('message','Professor added sucessfully');
    }
    public function upload_S(Request $request){
        $speciality=new speciality;
        $speciality->code=$request->code;
        $speciality->libelle=$request->libelle;
        

        $speciality->save();
        return redirect()->back()->with('message','Speciality added sucessfully');
    }

    public function showinfo(){

        $data=professorsinfo::all();
        return view('admin.showinfo',compact('data'));
    }

    public function approuver($id){
        $data=professorsinfo::find($id);
        $data->status='approuvé';
        $data->save();
        return redirect()->back();

    }

    public function rejeter($id){
        $data=professorsinfo::find($id);
        $data->status='rejeté';
        $data->save();
        return redirect()->back();

    }

    public function showprofesseur(){
        $data=professor::all();
        return view('admin.showprofesseur',compact('data'));

    }

    public function supprimerprofesseur($id){
        $data=professor::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function modifierprofesseur ($id){

        $data=professor::find($id);
        return view('admin.modifier_professeur',compact('data'));
    }

    public function editprofesseur( Request $request, $id){
        $professor = professor::find($id);
        $professor->nom=$request->nom;
        $professor->cin=$request->cin;
        $professor->drpp=$request->drpp;
        $professor->telephone=$request->telephone;
        $professor->specialite=$request->specialite;

        $photo=$request->photo;

        if($photo){
                
            $imagename=time().'.'.$photo->getClientOriginalExtension();
            $request->photo->move('profphoto',$imagename);
            $professor->photo=$imagename;
            
            }
        $professor->save();
        return redirect()->back()->with('message','Professeur modifier avec success');

    }
}
