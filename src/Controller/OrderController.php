<?php
namespace Project\Controller;
use Project\Repository\OrderRepository;

class OrderController extends Controller
{
    public function __construct(\PDO $pdo, \Smarty $smarty)
    {
        parent::__construct($smarty, $pdo);
    }

    public function index()
    {
        $orderRepository = new OrderRepository($this->pdo);
        $orders = $orderRepository->getOrders();

        $this->smarty->assign('header', 'Orders');
        $this->smarty->assign('orders', $orders);
        $this->smarty->display('order/index.tpl');
    }

    public function view()
    {
        $id = $_GET['id'];

        $orderRepository = new OrderRepository($this->pdo);
        $orders = $orderRepository->getOrders();

        $this->smarty->assign('order', $orders);
        $this->smarty->display('order/view.tpl');
    }
}