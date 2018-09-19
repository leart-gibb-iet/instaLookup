<?php

/**
 * Der Controller ist der Ort an dem es für jede Seite, welche der Benutzer
 * anfordern kann eine Methode gibt, welche die dazugehörende Businesslogik
 * beherbergt.
 *
 * Welche Controller und Funktionen muss ich erstellen?
 *   Es macht sinn, zusammengehörende Funktionen (z.B: User anzeigen, erstellen,
 *   bearbeiten & löschen) gemeinsam in einem passend benannten Controller (z.B:
 *   UserController) zu implementieren. Nicht zusammengehörende Features sollten
 *   jeweils auf unterschiedliche Controller aufgeteilt werden.
 *
 * Was passiert in einer Controllerfunktion?
 *   Die Anforderungen an die einzelnen Funktionen sind sehr unterschiedlich.
 *   Folgend die gängigsten:
 *     - Dafür sorgen, dass dem Benutzer eine View (HTML, CSS & JavaScript)
 *         gesendet wird.
 *     - Daten von einem Model (Verbindungsstück zur Datenbank) anfordern und
 *         der View übergeben, damit diese Daten dann für den Benutzer in HTML
 *         Code umgewandelt werden können.
 *     - Daten welche z.B. von einem Formular kommen validieren und dem Model
 *         übergeben, damit sie in der Datenbank persistiert werden können.
 */
class SitesController
{
    /**
     * Die index Funktion des DefaultControllers sollte in jedem Projekt
     * existieren, da diese ausgeführt wird, falls die URI des Requests leer
     * ist. (z.B. http://my-project.local/). Weshalb das so ist, ist und wann
     * welcher Controller und welche Methode aufgerufen wird, ist im Dispatcher
     * beschrieben.
     */
    public function index()
    {
        // In diesem Fall möchten wir dem Benutzer die View mit dem Namen
        //   "default_index" rendern. Wie das genau funktioniert, ist in der
        //   View Klasse beschrieben.
        $view = new View('default_index');
        $view->title = 'instaLookup';
        $view->heading = 'instaLookup';
        $view->pageColor = "InstaLookup";
        $view->stylesheets = array("modalForm.css","instagramSearch.css","style.css");
        $view->javascripts = array("instagramSearch.js", "main.js");
        $view->display();
    }

	public function impressum()
	{
		 // In diesem Fall möchten wir dem Benutzer die View mit dem Namen
        //   "impressum" rendern. Wie das genau funktioniert, ist in der
        //   View Klasse beschrieben.
        $view = new View('impressum');
        $view->title = 'Impressum';
        $view->heading = 'Impressum';
        $view->pageColor = "Impressum";
        $view->stylesheets = array("modalForm.css","impressum.css","style.css");
        $view->javascripts = array("main.js");
        $view->display();

    }


    public function userPanel()
    {
        if(!isset($_SESSION)) {
            session_start();
        }
        

        if($_SESSION["IsLoggedIn"] == true) {

            $view = new View('user_panel');
            
            $view->title = $_SESSION["username"];
            $view->heading =  $_SESSION["username"];
            $view->javascripts = array("main.js");
            $view->pageColor = "userPanel";
            $view->stylesheets = array("style.css", "modalForm.css", "userPanel.css");
            $view->display();
            
        }else{

            header('Location: /');

        }

    }






}
