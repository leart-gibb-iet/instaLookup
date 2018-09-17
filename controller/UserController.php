<?php

require_once '../repository/UserRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {

        $userRepository = new UserRepository();

        $view = new View('user_index');
        $view->title = 'Benutzer';
        $view->heading = 'Benutzer';
        $view->users = $userRepository->readAll();
        $view->display();



        // Anfrage an die URI /user/create weiterleiten (HTTP 302)
        header('Location: /user/create');

    }

    public function create()
    {
        $view = new View('user_create');
        $view->title = 'Benutzer erstellen';
        $view->heading = 'Benutzer erstellen';
        $view->stylesheets = array("kontakt.css", "style.css");
        $view->display();
    }

    public function doCreate()
{
    if ($_POST['send']) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userRepository = new UserRepository();
        $id = $userRepository->create($username, $email, $password);
        session_start();
        $_SESSION["id"] = $id;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["IsLoggedIn"] = true;

    }
    // Anfrage an die URI /user weiterleiten (HTTP 302)
    header('Location: /user');
}


    public function Update()
    {
      if ($_POST['send']) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $userRepository->update($email, $password);

    }


        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }



}
