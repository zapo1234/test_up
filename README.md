développement du module de fidélisation par point test société up

A)Environnement de développement PHP 7.3 , Lavarel 7. et Mysql

B) Installation de projet clone le projet

->git clone git@github.com:zapo1234/test_up.git

->sur votre terminale commande entrez dans le repertoire  dossier projet avec cd name_projet (cd test_up).

-> installer les dépendances dossiers vendor avec la commande =>conposer install

C) Récupération et installation de la bdd

-voir fichier .env , créer votre base de données dans phpmyadmin au nom test_up 

-charger les migrations existante en tapant la commande  php artisan migrate.
-importer le fichier datas.sql pour charger les données existant du csv  dans la table mysql nommée datas.

NB: fichier sql envoyé par Email en piéce jointe.

-démarer le serveur en tapant php artisan serve

charger la table datas , à partir du fichier sql en important directement dans phpmyadmin pour les données dans le fichiers csv.(voir fichier sql).
B) accèder à votre routes http://127.0.0.1:8000/homes qui affiche directement les résutats de l'aglorithme pour les données demandées.

-voir dans le controller DataController(la fonction algorithmique) dans (app/http/controllers/)

NB: Plusieurs technique pour le rendre plus dynamiques(via les formulaire dans la vue et organisation des récupérations des données dans les tables mysql) dans le cas d'un projet de développement en prod.
