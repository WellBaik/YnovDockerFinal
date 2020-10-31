<?php
$txt = $_SERVER['REQUEST_URI'];
$pos = strrpos($txt,"/put_name/");
$name = substr($txt, $pos+10);
if($pos>=10){
    if(strlen($name)>0){
        $servername = "localhost";
        $username = "user";
        $password = "pass";
        $dbname = "db";
        $port = "3306";

        try {
            $dbh = new PDO('mysql:host=mysql;port=$port;dbname=db', $username, $password);
            $request = "INSERT INTO name (name) VALUES ('".$name."')";
            $stmt = $dbh->prepare($request);     
            $retour = $stmt->execute();
            if($retour==1){
                echo "Le nom a bien été ajouté";    
            } else {
                echo "Une erreur est survenue";
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        } 
    } else {
        echo "Aucun nom dans l'url";
    }
} else {
    echo "Url invalide";
}
