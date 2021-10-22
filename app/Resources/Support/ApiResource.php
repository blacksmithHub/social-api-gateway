<?php

namespace App\Resources\Support;

use Facades\App\Helpers\Contracts\HttpRequestInterface as HttpRequest;

trait ApiResource
{
    /**
     * GET request to the API show endpoint.
     *
     * @param array $query
     * @param int $id
     * @param array $headers
     * @return mixed
     */
    public function show(array $headers = [], int $id, array $query = [])
    {
        $route = sprintf('%s/%d', $this->route, $id);

        return HttpRequest::get($route, $query, $headers);
    }

    /**
     * GET request to the API index endpoint.
     *
     * @param array $query
     * @param array $headers
     * @return mixed
     */
    public function index(array $query = [], array $headers = [])
    {
        return HttpRequest::get($this->route, $query, $headers);
    }
}
