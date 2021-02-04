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

    /**
     * Insert a customer entry
     */
    public function create($data)
    {
        $name = $data['name'];

        $q = "INSERT INTO customers (name) VALUES ('$name')";
        $result = $this->query($q);

        $data =[];
        if ($result == true) {
            $data = [
                'message' => 'succefully inserted record.'
            ];
        }
        return $data;
    }

    /**
     * Update customer record by ID
     */
    public function update($id, $data)
    {
        $name = $data['name'];

        $q = "UPDATE customers SET name='$name' WHERE id = '$id' ";
        $result = $this->query($q);

        $data =[];
        if ($result == true) {
            $data = [
                'message' => 'Succefully updated record.'
            ];
        }
        return $data;
    }


    /**
     * Update customer record by ID
     */
    public function delete($id)
    {
        $q = "DELETE FROM customers WHERE id = '$id' ";
        $result = $this->query($q);

        $data =[];
        if ($result == true) {
            $data = [
                'message' => "Succefully deleted record"
            ];
        }
        return $data;
    }
}
