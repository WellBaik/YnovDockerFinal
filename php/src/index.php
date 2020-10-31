<?php
$txt = $_SERVER['REQUEST_URI'];
$pos = strrpos($txt,"/");
echo $pos;
echo "<br>";
$name = substr($txt, $pos+1);
echo $name;
echo "<br>";
echo strlen($name);

if(strlen($name)>0){
    echo "Un nom est présent dans l'url";
    $servername = "localhost";
    $username = "user";
    $password = "pass";
    $dbname = "db";
    $port = "3306";
    
    try {
        $dbh = new PDO('mysql:host=mysql;port=$port;dbname=db', $username, $password);
        foreach($dbh->query('SELECT * from name') as $row) {
            print_r($row);
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    } 
} else {
    echo "Aucun nom dans l'url";
}
