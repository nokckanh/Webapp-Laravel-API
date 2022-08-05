<?php 

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;

trait IssueTokenTrait{

    
    private $client;

    public function __construct(){
        $this->client = Client::find(1);
    }

	public function issueToken(Request $request, $grantType, $scope = ""){

		$params = [
            'username' => $request('email'),
            'password' => $request('password'),
    		'grant_type' => $grantType,
    		'client_id' => $this->client->id,
    		'secret' => $this->client->secret,    		
    		'scope' => $scope
    	];

    

    	$request->request->add($params);

    	$proxy = Request::create('oauth/token', 'POST');

    	return Route::dispatch($proxy);

	}

}