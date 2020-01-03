<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
   // protected $table="students";
    protected $filables=['nom','prenom','annee','grp','mat','email','password','moy'];
}
