<?php

namespace Controller;

include_once 'model/UserModel.php';

use Model\UserModel;

class UserController
{
    private $url_controller = 'index.php?controller=User';
    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            if (!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email) || !preg_match('/^[a-zA-Z0-9]{5,}$/', $password)) {
                $_SESSION['notification'] = '<span style="color:red;padding-left:10px;">Invalid email or password</span>';
                header('Location: ' . $this->url_controller . '&action=login');
            } else {
                $objUserModel = new UserModel();
                $user = $objUserModel->checklogin($email, $password);
                if ($user) {
                    $_SESSION['current_user'] = $user;
                    // header('Location: index.php?controller=Homepage&action=list');
                    $role = $objUserModel->checkRole($email);
                    if ($role == "2") {
                        header('Location: admin/index.php?controller=Home&action=view');
                    } else {
                        header('Location: index.php?controller=Homepage&action=list');
                    }
                } else {
                    $_SESSION['notification'] = '<span style="color:red">Email or password incorrect</span>';
                    header('Location: ' . $this->url_controller . '&action=login');
                }
            }
        } else {
            include 'view/login/login.php';
        }
    }
    public function logout()
    {
        unset($_SESSION['current_user']);
        header('Location: ' . $this->url_controller . '&action=login');
    }
    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["re_username"];
            $email = $_POST["re_email"];
            $password = $_POST["re_password"];
            $repassword = $_POST["re-repassword"];
            // Validate password
            if (!preg_match('/^[a-zA-Z0-9]{5,}$/', $password)) {
                $_SESSION['error_password'] = '<span style="color:red;padding-left:10px;">Invalid password</span>';
            } else if ($password != $repassword) {
                $_SESSION['error_password'] = '<span style="color:red;padding-left:10px;">Password does not match</span>';
            }
            if (!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)) {
                $_SESSION['error_email'] = '<span style="color:red;padding-left:10px;">Invalid email</span>';
            }
            if (!isset($_SESSION['error_email']) && !isset($_SESSION['error_password'])) {
                $objRegister = new UserModel();
                $rs = $objRegister->checkEmail($email);
                if ($rs == 'false') {
                    $_SESSION['error_email'] = '<span style="color:red;padding-left:10px;">Already exist account</span>';
                    header('Location: ' . $this->url_controller . '&action=register');
                } else {
                    $objRegister->register($name, $email, $password);
                    header('Location: ' . $this->url_controller . '&action=login');
                }
            }
            include 'view/register/register.php';
        } else {
            include 'view/register/register.php';
        }
    }
}
