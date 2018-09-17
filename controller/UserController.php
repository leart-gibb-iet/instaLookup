<?php

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {
        // Anfrage an die URI /user/create weiterleiten (HTTP 302)
        header('Location: /user/create');
    }

    public function create()
    {
        $view = new View('user_form');
        $view->title = 'Benutzer erstellen';
        $view->heading = 'Benutzer erstellen';
        $view->stylesheets = array("kontakt.css", "style.css");
        $view->display();
    }

    public function Update()
    {

      $view = new View('User_panel');
      $view->title = 'benutzerDaten ändern';
      $view->heading = 'benutzerDaten ändern';
      $view->stylesheets = array("userPanel.css", "style.css");
      $view->display();
    }



}
