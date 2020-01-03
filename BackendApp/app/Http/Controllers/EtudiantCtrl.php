<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantCtrl extends Controller
{
    public function uploade(Request $request){
        $newEtu=new Etudiant();
        $newEtu->nom=$nom=$request->input('nom');
        $newEtu->prenom=$prenom=$request->input('prenom');
        $newEtu->email=$email=$request->input('email');
        $newEtu->mat=$mat=$request->input('mat');
        $newEtu->moy=$moy=$request->input('moy');
        $newEtu->grp=$grp=$request->input('grp');
        $newEtu->annee=$annee=$request->input('annee');
        $newEtu->password=$password=$request->input('password');
        $newEtu->save();
        //$etu =Etudiant ::orderBy($request->all());
        return response()->json($newEtu, 201); 
    }
    public function newEtudiant(){
        $newEtudiant=new Etudiant();
        $newEtudiant->nom="nekamiche";
        $newEtudiant->prenom="noha";
        $newEtudiant->mat="17/0129";
        $newEtudiant->annee="2CS";
        $newEtudiant->grp="G04";
        $newEtudiant->email="hn_nekamiche@esi.dz";
        $newEtudiant->password="595dza";
        $newEtudiant->moy="13";
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


public function store(Request $request){
    $etudiant=Etudiant::create($request->all());
    $etudiant->save();
    return response()->json($etudiant);
}
  public function cree(Request $request){

    /*    $newEtudiant =Etudiant::create([
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'email'=>$request->email,
                'moy'=>$request->moy,
                'annee'=>$request->annee,
                'password'=>$request->password,
                'grp'=>$request->grp,
                'mat'=>$request->mat
            ]
            );*/
            //Etudiant::create($request->all());
        
        $newEtu=new Etudiant();
        $newEtu->nom=$request->nom;
        $newEtu->prenom=$request->prenom;
        $newEtu->annee=$request->annee;
        $newEtu->grp=$request->grp;
        $newEtu->mat=$request->mat;
        $newEtu->email=$request->email;
        $newEtu->password=$request->password;
        $newEtudiant->save();
     //   return response()->json($newEtudiant);
       /* $post = Etudiant::create($request->all());
        return response()->json($post, 201);*/
      
    }
}
