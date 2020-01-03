<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/info',function(){

    $etudiant=[
        'nom'=> 'nekamiche',
        'prenom'=>'noha',
        'annee'=>'2CS',
        'grp'=>'G04',
        'moy'=>'14',
        'matricule'=>'17/0129',
        'email'=>'hn_nekamiche@esi.dz',
        'password'=>'aezaa',
    ];
    return $etudiant;
});

Route::get('/etudiants','EtudiantCtrl@DataDisplayapi');
Route::get('/etuapi/{id}','EtudiantCtrl@ShowSingleData');
Route::get('/cree','EtudiantCtrl@cree');