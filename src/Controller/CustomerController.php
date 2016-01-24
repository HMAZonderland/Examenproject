<?php
namespace ANPNews\Controller;
use ANPNews\Repository\CustomerRepository;

class CustomerController extends Controller
{
    public function __construct(\PDO $pdo, \Smarty $smarty)
    {
        parent::__construct($smarty, $pdo);
    }

    public function index()
    {
        $customerRepository = new CustomerRepository($this->pdo);
        $customers = $customerRepository->getCustomers();

        $this->smarty->assign('header', 'Customers');
        $this->smarty->assign('customers', $customers);
        $this->smarty->display('customer/index.tpl');
    }

    public function view()
    {
        $id = $_GET['id'];

        $customerRepository = new CustomerRepository($this->pdo);
        $customer = $customerRepository->getCustomer($id);

        $this->smarty->assign('header', 'Bekijk ' . $customer->name);
        $this->smarty->assign('customer', $customer);
        $this->smarty->display('customer/view.tpl');
    }
}