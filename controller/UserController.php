<?php

require_once '../repository/UserRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{

    public function doCreate()
    {
    

    if (isset($_POST)) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userRepository = new UserRepository();
        $userRepository->create($username, $email, $password);

        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        $_SESSION["IsLoggedIn"] = true;

    }
     // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /sites/UserPanel');
    }



    

    public function doUserPanel() 
    {
       
        session_start();

        $userRepository = new UserRepository();

       

        
        if(isset($_POST["Change"])) {
           
           $userRepository->update($_POST["email"], $_POST["password"]);
            
            header('Location: /');
          }
        
          if(isset($_POST["delete_account"])) {
          
            $userRepository->deleteByUsername($_POST["username"]);

            header('Location: /');
          }
        
    }


    public function doLogin() 
    {

        $userRepository = new UserRepository();

        if(isset($_GET["login"])) {

            $username = $_GET['username'];
            $password = $_GET['password'];
           
            
            $result = $userRepository->read($username, $password);

         
        session_start();
        $_SESSION["username"] = $result["username"];
        $_SESSION["email"] = $result["email"];
        $_SESSION["IsLoggedIn"] = true;
   
            header('Location: /');
        }
    }
    

    public function doLogout() 
    {

            // Initialize the session.
            session_start();
            // Unset all of the session variables.
            unset($_SESSION);
            // destroy the session.    
            session_destroy();

            // HTTP 302 redirect
            header("Location: /sites/default_index.php");
            exit;
    }

}
