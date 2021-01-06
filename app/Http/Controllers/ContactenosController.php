<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class ContactenosController extends Controller
{
    public function index(){

        
        return view('contactenos.index', ['current' => 3]);
    }

    public function send(Request $request){
        
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            echo json_encode(array('result' => false, 'msg' =>$validator) );
            exit;
        }
        
    }
}
