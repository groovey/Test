<?php

namespace App\Controllers\Api\v1;

use App\Models\Customer;
use App\Services\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Customer API controller
 */
class CustomerController
{
    private $request;
    private $response;
    private $customer;
    
    public function __construct(Request $request)
    {
        $this->request  = $request;
        $this->response = new Response();
        $this->customer = new Customer();
    }

    /**
     * Gets all customers
     * ex. http://tester.test/api/v1/customers
     */
    public function index()
    {
        $customer = $this->customer;
        $response = $this->response;
        $datas    = $customer->all();
        
        return $response->send($datas);
    }

    /**
    * Retrieves a single customers details base conditions
    * ex. http://tester.test/api/v1/customers?id=1
    */
    public function find()
    {
        $request  = $this->request;
        $response = $this->response;
        $customer = $this->customer;
        $id       = $request->get('id');
        $data     = $customer->find($id);

        return $response->send($data);
    }
}
