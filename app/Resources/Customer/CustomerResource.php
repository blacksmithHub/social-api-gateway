<?php

namespace App\Resources\Customer;

use App\Resources\Resource;
use App\Resources\Contracts\Customer\CustomerResourceInterface;
use Facades\App\Helpers\Contracts\HttpRequestInterface as HttpRequest;

class CustomerResource extends Resource implements CustomerResourceInterface
{
    /**
     * Create the source instance and declare the route endpoint.
     *
     */
    public function __construct()
    {
        $this->route = sprintf('%s/api/v1/test', config('services.customer.url'));
    }

    /**
     * GET request to the API index endpoint.
     *
     * @param array $headers
     * @return mixed
     */
    public function test(array $headers = [])
    {
        return HttpRequest::get('http://social-customer.api/api/v1/test', [], $headers);
    }
}
