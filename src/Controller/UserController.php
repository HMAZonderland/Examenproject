<?php
namespace ANPNews\Controller;
use ANPNews\Repository\CustomerRepository;
use ANPNews\Repository\UserRepository;

class UserController extends Controller
{
    public function __construct(\PDO $pdo, \Smarty $smarty)
    {
        parent::__construct($smarty, $pdo);
    }

    public function login()
    {
        $this->smarty->assign('header', 'Login!');
        $this->smarty->assign('message', '');
        $this->smarty->assign('username', '');

        $userRepository = new UserRepository($this->pdo);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // authenticate
            $user = $userRepository->login($_POST['username'], $_POST['password']);

            // oops nothing found.. back to the form!
            if (is_null($user)) {
                $this->smarty->assign('message', 'Geen gebruiker gevonden met deze username/password combinatie');
                $this->smarty->assign('username', $_POST['username']);
                $this->smarty->display('user/login.tpl');
            }

            // we have a valid user, lets session it
            $_SESSION['user'] = $user->id;
            header('location: index.php?section=customer&action=index');

        } else {
            $this->smarty->display('user/login.tpl');
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();

        header('location: index.php?section=customer&action=index');
    }

    public function add()
    {
        $this->smarty->assign('header', 'Gebruiker aanmaken!');
        $this->smarty->assign('message', '');
        $this->smarty->assign('username', '');
        $this->smarty->assign('company_id', '');

        $customerRepository = new CustomerRepository($this->pdo);
        $customers = $customerRepository->getCustomers();
        $this->smarty->assign('customers', $customers);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $customer_id = $_POST['customer_id'];
            if (empty($customer_id)) {
                $this->smarty->assign('message', 'Je hebt geen Customer geselecteerd, dat moet');
                $this->smarty->display('user/add.tpl');
            }

            $customer = $customerRepository->getCustomer($customer_id);

            $userRepository = new UserRepository($this->pdo);
            $user = $userRepository->addUser($_POST['username'], $_POST['password'], $customer);
            header('location: index.php?section=customer&action=index');

        } else {
            $this->smarty->display('user/add.tpl');
        }
    }
}