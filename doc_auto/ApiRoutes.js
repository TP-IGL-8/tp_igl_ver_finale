/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|   La ou on vas sauvgarder notre API Routes pour notre Application Backend.
|   Ces Routes sont charger par RouteServiceProvider avec un group qui est:
|   "api" middleware group.
|
*/
/*_____________________________________________________________________________________*\ 
|   Route::middleware('auth:api')->get('/user', function (Request $request) {          |       
|   return $request->user();                                                           |
|   });                                                                                |
|                                                                                      |
|   Route::get('/info',function(){                                                     |
|                                                                                      |
|    $etudiant=[                                                                       |
|        'nom'=> 'nekamiche',                                                          |
|        'prenom'=>'noha',                                                             |
|        'annee'=>'2CS',                                                               | 
|        'grp'=>'G04',                                                                 |
|        'moy'=>'14',                                                                  |
|        'matricule'=>'17/0129',                                                       |
|        'email'=>'hn_nekamiche@esi.dz',                                               |
|        'password'=>'aezaa',                                                          |
|    ];                                                                                |             
|    return $etudiant;                                                                 |
|   });                                                                                |
|                                                                                      |
|   Route::get('/etudiants','EtudiantCtrl@DataDisplayapi');                            |
|   Route::get('/etuapi/{id}','EtudiantCtrl@ShowSingleData');                          |
|   Route::post('/cree','EtudiantCtrl@cree');                                          |
|______________________________________________________________________________________|*/