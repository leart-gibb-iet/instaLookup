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
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userRepository = new UserRepository();
        $userRepository->create($firstName, $lastName, $email, $password);
    }
    // Anfrage an die URI /user weiterleiten (HTTP 302)
    header('Location: /user');
}


    public function Update()
    {

      $view = new View('User_panel');
      $view->title = 'benutzerDaten ändern';
      $view->heading = 'benutzerDaten ändern';
      $view->stylesheets = array("userPanel.css", "style.css");
      $view->display();
    }


        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }



}
