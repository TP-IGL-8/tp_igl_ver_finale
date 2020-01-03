<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table="etudiants";
    protected $filables=['nom','prenom','annee','grp','mat','email','password','moy'];
}
