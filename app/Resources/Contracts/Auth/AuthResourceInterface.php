<?php

namespace App\Resources\Contracts\Auth;

interface AuthResourceInterface
{
    /**
     * POST request to the API auth endpoint.
     *
     * @param array $headers
     * @return mixed
     */
    public function getAuth(array $headers = []);

    /**
     * POST request to the API auth endpoint.
     *
     * @param array $params
     * @return mixed
     */
    public function oauth(array $params = []);
}
