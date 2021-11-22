# Exercice 3

1. Créer les fichiers suivants :
   - `index.php`
   - `connect.php`

2. Faire en sorte que :
   - Sur `index.php`, on ait un formulaire de connexion (email/mdp) qui renvoi vers `connect.php`
   - Sur `connect.php` :
     - si on a la bonne combinaison email/mdp en `$_POST`, alors on créé une variable de session pour connecter l'utilisateur
     - si on a une variable de session alors on affiche Bonjour
     - Dans tous les autres cas on redirige l'utilisateur vers `index.php`

3. À chaque fois que l'utilisateur se connecte, on stocke la date (ou le timestamp) correspondant au moment ou il se connect (time())

4. Lorsque l'utilisateur est connecté, en plus du 'Bonjour', on affiche la date de la dernière connection (avant de remplacer le cookie).

Bonus : Lorsque l'utilisateur se trompe de mdp ou essaye d'acceder à `connect.php` sans etre connecté, afficher un message d'erreur au dessus du formulaire de connection.