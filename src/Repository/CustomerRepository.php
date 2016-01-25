<?php
namespace Project\Repository;
use Project\Model\Customer;

class CustomerRepository extends Repository
{
    public function addCustomer($name) : Customer
    {
        $query = 'INSERT INTO `customer` (`name`) VALUES (:name)';

        $statement = $this->db->prepare($query);
        $statement->execute([':name' => $name]);

        $id = $this->db->lastInsertId();

        $customer = new Customer();
        $customer->id = $id;
        $customer->name = $name;
        return $customer;
    }

    public function getCustomers() : array
    {
        $query = 'SELECT `customer`.* FROM `customer`';

        $statement = $this->db->prepare($query);
        $statement->execute();
        $customers = $statement->fetchAll(\PDO::FETCH_OBJ);

        return $customers;
    }

    public function getByName($name) : Customer
    {
        $query = 'SELECT `customer`.* FROM `customer` WHERE `customer`.`name` = :name';

        $statement = $this->db->prepare($query);
        $statement->execute([':name', $name]);

        $customer = $statement->fetchObject(Customer::class);
        return $customer;
    }

    public function getCustomer($id) : Customer
    {
        $query = 'SELECT `customer`.* FROM `customer` WHERE `customer`.`id` = :id';

        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        $customer = $statement->fetchObject(Customer::class);
        return $customer;
    }
}