<?php

namespace App\Http\Controllers;

use Facades\App\Resources\Contracts\Auth\AuthResourceInterface as AuthResource;
use Facades\App\Resources\Contracts\Customer\CustomerResourceInterface as CustomerResource;

class TestController extends Controller
{
    public function test()
    {
        $token = AuthResource::oauth([
            'grant_type' => 'client_credentials',
            'scope' => '*',
            'client_id' => 3,
            'client_secret' => 'uUeLazscNOeCi066C1AwdiWsGhivbT6lbCd4yxdB'
        ]);

        $test = CustomerResource::test([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $token->access_token
        ]);

        dd($test);
    }
}
