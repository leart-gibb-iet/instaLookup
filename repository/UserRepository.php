<?php

require_once '../lib/Repository.php';

/**
 * Das UserRepository ist zuständig für alle Zugriffe auf die Tabelle "user".
 *
 * Die Ausführliche Dokumentation zu Repositories findest du in der Repository Klasse.
 */
class UserRepository extends Repository
{
    /**
     * Diese Variable wird von der Klasse Repository verwendet, um generische
     * Funktionen zur Verfügung zu stellen.
     */
    protected $tableName = 'users';

    /**
     * Erstellt einen neuen benutzer mit den gegebenen Werten.
     *
     * Das Passwort wird vor dem ausführen des Queries noch mit dem SHA1
     *  Algorythmus gehashed.
     *
     * @param $username Wert für die Spalte username
     * @param $email Wert für die Spalte email
     * @param $password Wert für die Spalte password
     *
     * @throws Exception falls das Ausführen des Statements fehlschlägt
     */
    public function create($username, $email, $password)
    {
        $password = sha1($password);

        $query = "INSERT INTO $this->tableName (username, email, password) VALUES (?, ?, ?)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('sss', $username, $email, $password);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

        return $statement->insert_id;
    }

    /**
     * 
     */
    public function read($username, $password)
    {
        $password = sha1($password);

        $query = "SELECT * FROM $this->tableName WHERE username = ? AND password = ?";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('ss', $username, $password);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

        $result = $statement->get_result();
        
       
        if ($result->num_rows == 1) {
           
            return  $result->fetch_array(MYSQLI_ASSOC);
        
        }else{   
            exit;
            // ERROR HANDLING!!!!
        }
       
    }

    /**
     * 
     */
    public function update($email, $password) //Die Function Update erstellt
    {
        $password = sha1($password);
<<<<<<< HEAD
       // session_start();
        var_dump($username = $_SESSION["username"]);
        $query = "UPDATE $this->tableName SET email = $email, password = $password WHERE username = $username";
=======

        session_start();

        $username = $_SESSION["username"];

        $query = "UPDATE $this->tableName SET email = ?, password = ? WHERE username = '$username'";
>>>>>>> a8a80d31c0120b384a9f5a023e0083f7104e3fab

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('ss', $email, $password);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

       
    }

    
    
  

}

?>