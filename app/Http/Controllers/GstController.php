<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GstController extends Controller
{
    public function getToken()
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://clientbasic.mastersindia.co/oauth/access_token";

        $params = [
            "username"=>"testeway@mastersindia.co",
            "password"=> "!@#Demo!@#123",
            "client_id"=>"fIXefFyxGNfDWOcCWnj",
            "client_secret"=>"QFd6dZvCGqckabKxTapfZgJc",
            "grant_type"=>"password"
        ];

        $response = $client->request('POST', $url, [
            'json' => $params,
            'verify'  => false,
        ]);
        
        $responseBody = json_decode($response->getBody());

        return view('projects.apiwithoutkey', compact('responseBody'));
    }
}
