<?php
namespace Project\Repository;
use Project\Model\Order;

class OrderRepository extends Repository
{

    public function getOrders() : array
    {
        $query = 'SELECT * FROM `order`';

        $statement = $this->db->prepare($query);
        $statement->execute();
        $orders = $statement->fetchAll(\PDO::FETCH_OBJ);

        return $orders;
    }

    public function getOrder($id) : Order
    {
        $query = 'SELECT * FROM order WHERE id = :id';

        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        $order = $statement->fetchObject(Order::class);
        return $order;
    }
}