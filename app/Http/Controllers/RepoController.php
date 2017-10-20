<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepoController extends Controller
{
     public function index(Request $request){
        
        $user = $request->input('user');
        $pass = $request->input('pass');
        
        $data = [
            
            [
                'name' => 'medicap-ris-web',
                'branches' => 65,
                'owner' => 'cvillegas'
            ]
            
        ];
        
        return view('repo.main', compact('data'));
        
    }
}
