<?php

namespace App\Resources\Support\BaseContracts;

interface IndexInterface
{
    /**
     * GET request to the API index endpoint.
     * 
     * @param array $query
     * @param array $headers
     * @return mixed
     */
    public function index(array $query = [], array $headers = []);
}
