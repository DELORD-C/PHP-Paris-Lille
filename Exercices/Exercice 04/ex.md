# Exercice 3

1. Dans connect.php, remplacer l'endroit ou CODE est commenté par :
   - Creation d'un objet `PDO` pour se connecter à la base de donnée
   - Preparation d'une requete afin de récupérer le mot de passe associé à l'email `$_POST['email']` 
   - Comparaison du mot depasse récupéré avec celui dans `$_POST['pass']`
   - Action en fonction

Bonus : Lorsque l'utilisateur se trompe de mdp ou essaye d'acceder à `connect.php` sans etre connecté, afficher un message d'erreur au dessus du formulaire de connection.