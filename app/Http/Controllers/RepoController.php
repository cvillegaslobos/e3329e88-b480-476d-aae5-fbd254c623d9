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
        
        $url = '';
        if($request->filled('page')){
            $url = "?page={$request->page}";
        }
        
        $response = $this->request($url);
        
        session()->put('next', $response['next']);
        $actual = $response['page'];
        $next = $response['page']+1;
        $prev = ($response['page']-1 <= 0 ? 1: $response['page']-1);
        $repos = $response['values'];
        $cantidad = $response['size'];
        return view('repo.main', compact('repos', 'next', 'prev', 'actual', 'cantidad'));
        
    }

    public function summary($repo_slug){
        $response = $this->request($repo_slug);
        return view('repo.show.summary', compact('response', 'branches'));
    }
    
    public function commits($repo_slug, Request $request){
        $response = $this->request($repo_slug);
        
        $url = "{$response['links']['commits']['href']}";
        
        if($request->has('page')){
            $url.= "?page={$request->input('page')}";
        }
        
        
        $commits = $this->request($url);
        
        return view('repo.show.commits', compact('response','commits'));
    }
    
    public function branches($repo_slug, Request $request){
        $response = $this->request($repo_slug);
        
        $url = "{$response['links']['branches']['href']}";
        
        if($request->has('page')){
            $url.= "?page={$request->input('page')}";
        }
        
        
        $branches = $this->request($url);
        
        return view('repo.show.branches', compact('response','branches'));
    }
    
    public function tags($repo_slug){
        $response = $this->request($repo_slug);
        $tags = $this->request($response['links']['tags']['href']);
        
        return view('repo.show.tags', compact('response','tags'));
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
