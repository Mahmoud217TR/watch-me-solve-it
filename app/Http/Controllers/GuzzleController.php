<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    //
    public function test(){
        $client = new Client();
        $res = $client->request('GET', 'https://codeforces.com/api/user.status', [
            'handle' => ['Haidar_Kahs']
        ]);
        return $res;
    }
}
