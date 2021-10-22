<?php

namespace App\Resources\Contracts\Customer;

interface CustomerResourceInterface
{
    /**
     * GET request to the API index endpoint.
     *
     * @param array $headers
     * @return mixed
     */
    public function test(array $headers = []);
}
