# test_up
développement du module de fidélisation par point test société up

A)Environnement de développement
PHP 7.3 , Lavarel 7.

B) Installa tion de projet  clone le projet 

->git clone git@github.com:zapo1234/test_up.git

-> installer les dépendances dossiers vendor avec la commande  =>conposer install

C) Récupération et installation de la bdd

-voir fichier .env , créer votre base de données dans phpmyadmin au nom test_up
-charger les migration existante en tapant php artisan migrate.
- charger la table datas , à partir du fichier sql en important directement dans phpmyadmin pour les données dans le fichiers csv.


B) accèder à votre routes http://127.0.0.1:8000/homes qui affiche directement les résutats de l'aglorithme pour les données demandées.


