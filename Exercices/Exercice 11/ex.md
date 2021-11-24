# Exercice 11

1. index.php :
    - Si utilisateur connecté : redirection sur home.php
    - Sinon, afficher un formulaire de connection

2. home.php :
    - Si utilisateur connecté : affichage de la liste des films (juste le titre de chaque film)
    - Sinon
      - Si on a des données de formulaire $_POST, on vérifie que le mot de passe / email est bon
        - Si oui : on connecte l'utilisateur
        - Sinon on redirige l'utilisateur vers index.php
      - Sinon on redirige l'utilisateur vers index.php