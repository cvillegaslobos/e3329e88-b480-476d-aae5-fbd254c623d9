<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepoController extends Controller
{
     public function index(Request $request){
        
        $user = $request->input('user');
        $pass = $request->input('pass');
        
        $data = [
            
        ];
        

        $client = new \GuzzleHttp\Client();
        
        $response = json_decode($client->get( "{$prefix}{$url}" , [
            'auth' => [
                $user, $pass
            ]
        ])->getBody(), true);
        
        dd($response);
        
        return view('repo.main', compact('data'));
        
    }
}
