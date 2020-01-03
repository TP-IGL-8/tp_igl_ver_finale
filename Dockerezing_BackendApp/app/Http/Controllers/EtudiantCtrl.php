<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantCtrl extends Controller
{
    
    public function newEtudiant(){
        $newEtudiant=new Etudiant();
        $newEtudiant->nom="nekamiche";
        $newEtudiant->prenom="noha";
        $newEtudiant->annee="1CS";
        $newEtudiant->grp="G04";
        $newEtudiant->mat="17/0129";
       
        $newEtudiant->email="hn_nekamiche@esi.dz";
        $newEtudiant->password="595dza";
        $newEtudiant->moy="14";
        $newEtudiant->save();
    }


    public function DataDisplayapi(){

        $Etudiant= Etudiant::all();
        return response()->json($Etudiant);
    }
    public function ShowSingleData($id){

        $Etudiant= Etudiant::find($id);
        return response()->json($Etudiant);
    }
    public function render($request, Exception $exception)
    {
    // This will replace our 404 response with
    // a JSON response.
    if ($exception instanceof ModelNotFoundException &&
        $request->wantsJson())
    {
        return response()->json([
            'data' => 'Resource not found'
        ], 404);
    }

    return parent::render($request, $exception);
}

    public function index(){
        return view('app');
    }
    /*public function cree(Request $request){
        $newEtu=new Etudiant();
        $newEtu->nom=$request->input('nom');
        $newEtu->prenom=$request->input('prenom');
        $newEtu->email=$request->input('email');
        $newEtu->mat=$request->input('mat');
        $newEtu->grp=$request->input('grp');
        $newEtu->annee=$request->input('annee');
        $newEtu->password=$request->input('password');
        $newEtu->moy=$request->input('moy');

        $newEtu->save();
      
    }*/
    public function cree(Request $request){
        $newEtu=new Etudiant();
        $newEtu->nom=$request->input('nom');
        $newEtu->prenom=$request->input('prenom');
        $newEtu->annee=$request->input('annee');
        $newEtu->grp=$request->input('grp');
        $newEtu->mat=$request->input('mat');
       
        $newEtu->email=$request->input('email');
        $newEtu->password=$request->input('password');
        $newEtu->moy=$request->input('moy');

        $newEtu->save();
      
    }
}
