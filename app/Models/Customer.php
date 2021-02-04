<?php
namespace App\Models;

use App\Services\DB as Model;

/**
 * The customer class model
 */
class Customer extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Gets all the customers
     */
    public function all()
    {
        $q = "SELECT * FROM customers";
        $datas = $this->fetch($q);
        return $datas;
    }

    /**
     * Gets a single customer base on condition
     */
    public function find($id)
    {
        $q = "SELECT * FROM customers WHERE id = $id LIMIT 1";
        $data = $this->fetch($q);
        return $data;
    }
}
