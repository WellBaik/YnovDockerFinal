# Projet Docker

Projet réalisé par Benjamin FÉRIÉ

## Structure
### Frontend
"Frontend" basé sur NodeJs, qui possède un compteur de visite.

### Backend
API en php, qui répond à l'url "/put_name/{nom}". 

L'API va ensuite communiquer avec la base de données MySQL pour y ajouter {nom}.

## Persistance
Les informations de la base de données sont persistantes lors du redémarrage d'une image, mais pas lors de la suppression de celle-ci.

Le compteur de visite est persistant lors du redémarrage de l'image, et lors de la suppression de celle-ci (les données sont stockées sur l'hôte des containers).

## Installation
Pour lancer le projet :
> docker-compose up

## Informations de connexion
### Frontend
Partie front accessible à l'adresse suivante :
> localhost:8080

### PHP
Partie php accessible à l'adresse suivante :
> localhost:80/index.php

Pour ajouter un nom dans la base de données :
> localhost:80/index.php/put_name/{nom}

### MySQL
Partie mysql accessible à l'adresse suivante :
> host : localhost:3306

> username : user

> password : pass

> dbname : db

> tablename : name

