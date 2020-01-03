/*
|--------------------------------------------------------------------------
| Class CreateEtudiantsTable
|--------------------------------------------------------------------------
|   c'est la classe ou on vas declarer les attributs de notre bdd.
|   
*/

class CreateEtudiantsTable extends Migration
{

}
/*
|--------------------------------------------------------------------------
| Les Fonction de cette Classe
|--------------------------------------------------------------------------
|   ce sont les fonctions ou on vas declarer nos attributs(champs ) de la base de donnees dans PHPMYADMIN
|   
*/
    /**
     * Run the migrations.
     *@public
     * @return void
     */
    function up()
    {
       /* 
       | Schema::create('etudiants', function (Blueprint $table) {
       |    $table->bigIncrements('id');
       |     $table->string('nom');
       |     $table->string('prenom');
       |     $table->string('annee');
       |     $table->string('grp');
       |     $table->string('mat');
       |     $table->string('email');
       |     $table->string('password');
       |     $table->string('moy');
       |     $table->timestamps();
       | });
        */
    }

    /**
     * Reverse the migrations.
     *@public
     * @return void
     */
    function down()
    {
        /**
         |Schema::dropIfExists('etudiants');
        **/
    }
