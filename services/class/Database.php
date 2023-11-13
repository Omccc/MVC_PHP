<?php

class Database{ //va nous permettre de paramétrer PDO, nous connecter et faire des requêtes plutôt que de le faire de façon classique.

    //propriétés de notre class
    private $db_host; // lien le protocole pour communiquer avec la BDD
    private $db_name;
    private $db_port;
    private $db_user;
    private $db_pass;

    //propriétés du DSN (Data Source Name)
    private $db_dsn;

    //PDO qu'on connaît bien
    private $pdo;


    public function __construct(    //cette fonction publique va appeler des propriétés privées.

        $db_host = 'localhost',
        $db_port = '3306',
        $db_name ='dwwm_23_10_19',
        $db_user = 'root',
        $db_pass = ''

    )

    {
        $this->db_host= $db_host;
        $this->db_port = $db_port;
        $this->db_name= $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_dsn = 'mysql:host='.$this->db_host.';port='.$this->db_port.';dbname='.
        $this->db_name.'; charset=utf8';
    }

    private function getPDO()

    {
    if($this->pdo === null){
        try{

            $db = new PDO($this->db_dsn,$this->db_user,$this->db_pass);
            $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e) {
            echo "Oops PDO n'est pas content:". $e->getMessage(); //permet de récuperer les erreurs de PDO
            die(); 
        }
        $this->pdo = $db;

    }

        //TOUT EST OK POUR AVOIR NOTRE OBJET PDO
        // PDO EST APPELE UNE SEULE FOIS
        return $this->pdo;
    }

    public function selectAll($statement,$params=[]) {

        $stmt = $this->getPDO()->prepare($statement);
        $stmt->execute($params);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        

    }

}


//quand je vais instancier ma class, je dois lui passer tous ces paramètres