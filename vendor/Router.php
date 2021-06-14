<?php


class Router
{
    static public function init(){
        $userDB = new User();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user = filter_input_array(INPUT_POST);
            if($user['password'] === $user['password_confirm']){
                $userDB->addUser($user['login'], $user['password'], $user['email']);
            }else{
                //TODO send errors
            }
            self::redirect();
        }else if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
            $deleteId = filter_input(INPUT_GET, 'id');
            if($deleteId!==null){
                $id = intval($deleteId);
                $userDB->deleteUser($id);
                self::redirect();
            }
        }else{
            $view = new View('users.php');
            $users = $userDB->getAllUsers();
            $view->users = $users;
            $view->render();
        }

    }

    static public function redirect(){
        header('Location: index.php');
    }
}