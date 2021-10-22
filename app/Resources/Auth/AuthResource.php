<?php

namespace App\Resources\Auth;

use App\Resources\Resource;
use App\Resources\Contracts\Auth\AuthResourceInterface;
use Facades\App\Helpers\Contracts\HttpRequestInterface as HttpRequest;

class AuthResource extends Resource implements AuthResourceInterface
{
    /**
     * Create the source instance and declare the route endpoint.
     *
     */
    public function __construct()
    {
        $this->route = sprintf('%s/api/v1/auth', config('services.auth.url'));
    }

    /**
     * POST request to the API auth endpoint.
     *
     * @param array $headers
     * @return mixed
     */
    public function getAuth(array $headers = [])
    {
        return HttpRequest::post($this->route, [], $headers);
    }

    /**
     * POST request to the API auth endpoint.
     *
     * @param array $params
     * @return mixed
     */
    public function oauth(array $params = [])
    {
        $route = sprintf('%s/oauth/token', config('services.auth.url'));

        return HttpRequest::post($route, $params, [
            'Accept' => 'application/json'
        ]);
    }
}
