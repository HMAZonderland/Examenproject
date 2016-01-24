<?php
namespace ANPNews\Controller;
use ANPNews\Repository\UserRepository;

abstract class Controller
{
    /**
     * @var \Smarty $smarty
     */
    protected $smarty;

    /**
     * @var \PDO $pdo
     */
    protected $pdo;

    public function __construct(\Smarty $smarty, \PDO $pdo)
    {
        $this->smarty = $smarty;
        $this->pdo = $pdo;

        // alway show login button
        $this->smarty->assign('show_login', true);

        if (isset($_SESSION['user'])) {
            $userRepository = new UserRepository($this->pdo);

            $this->smarty->assign('show_login', false);
            $this->smarty->assign('user', $userRepository->getUser($_SESSION['user']));

        } elseif ($_SERVER['REQUEST_METHOD'] != 'POST' && $_GET['section'] != 'user' && $_GET['action'] != 'login' && !isset($_SESSION['user'])) {
            // you shall not pass! LOGIN!
            header('location: index.php?section=user&action=login');
        }
    }
}