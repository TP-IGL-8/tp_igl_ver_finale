<?php

namespace App\Http\Controllers;
use App\Http\Controllers\StudentsCtrl as StudentsCtrl ;
use Validator;
use App\Students;
use Illuminate\Http\Request;

class StudentsController extends StudentsCtrl 
{
    //
    public function store(Request $request)
    {
        $input = $request->all();


        $validator = Validator::make($input, [
            'nom' => 'required',
            'prenom'=> 'required',
            'annee'=> 'required',
            'mat'=> 'required',
            'moy'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'grp'=> 'required'

        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $product = Students::create($input);


        return $this->sendResponse($product->toArray(), 'Product created successfully.');
    }

}
