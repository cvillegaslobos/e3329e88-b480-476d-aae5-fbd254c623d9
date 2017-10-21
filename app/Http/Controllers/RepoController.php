<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepoController extends Controller
{
    private $client;

    public function __construct(){
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => config('app.bitbucket.url'),
            'auth' => [
                config('app.bitbucket.user'),
                config('app.bitbucket.pass')
            ]
        ]);
    }

    public function overview(Request $request){
        
        $response = $this->request("");
        return view('repo.main', compact('response'));
        
    }

    public function view($repo_slug){
        $response = $this->request($repo_slug);

        $branches = $this->request($response['links']['branches']['href']);

        return view('repo.view', compact('response', 'branches'));
    }

    private function request($url, $method = 'get'){
        
        $return = [];

        $response = $this->client->request($method, $url);

        if( $response->getStatusCode() == 200 ){
            $return = json_decode($response->getBody(), true);
        }

        return $return;
        
    }
}
