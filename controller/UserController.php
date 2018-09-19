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

    public function doDeleteAccount() {

        session_start();

        $userRepository = new UserRepository();

        $valid = $userRepository->read($_SESSION["username"], $_POST["password"]);
        
        $confirmPwd = sha1($_POST["password"]);
        
        if($confirmPwd == $valid["password"]) {
            
            $userRepository->deleteByUsername($_SESSION["username"]);
       }else{
            $_SESSION["error"] = "wrong password";
            header('Location: /sites/UserPanel');

       }



    }

    
    /**
     * UPDATE & DELETE
     * 
     */
    public function doUserPanel() 
    {
       
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

        if(isset($_POST["login"])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
           
            
            $result = $userRepository->read($username, $password);

         
        if($result["username"] != NULL) {

        session_start();
        $_SESSION["username"] = $result["username"];
        $_SESSION["email"] = $result["email"];
        $_SESSION["IsLoggedIn"] = true;

        header('Location: /');

        }else{
        
            header('Location: /');
            
        }
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
            header("Location: /");

            var_dump("LOGOUT");
            exit;
    }

}
