/*
|--------------------------------------------------------------------------
| Class EtudiantCtrl
|--------------------------------------------------------------------------
|   C'est une Classe qui vas Controller les Differents fonction de Model Etudiant  
|   
*/
class EtudiantCtrl extends Controller
{
    // ...
}

/**
 * Les Fonctions Suivants sont les Fonctions De la Classe EtudiantCtrl
 */


    /**
     * c'est la fonction qui vas creer UN Etudiant Dans la bdd des etudiants
     * @public
     */
    function newEtudiant(){
        // ...
    }
    /**
     * c'est la fonction qui vas Afficher Tout les Etudiants De la bdd des etudiants
     * @public
     * @return response()->json
     */

    function DataDisplayapi(){
        // ...
    }
    /**
     * c'est la fonction qui vas Afficher Un Seule Etudiant De la bdd des etudiants Selon son "id"
     * @return response()->json
     * @public
     */
    function ShowSingleData($id){

        // ...
    }

    /**
     * Cette fonction vas remplacer notre 404 error response par un JSON response.
     * @param {Request} $request 
     * @param {Exception} $exception 
     * @public
     * @return void
     */
    function render($request,$exception)
    {
        // ...
    }
    /**
     * @return void
     * @public
     * @param {Request} $request c'est un objet de type Etudiant qui vas etre creer dans notre bdd des Etudiants.
     */
     function cree($request){
        // ...
    }
