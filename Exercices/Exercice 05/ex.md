# Exercice 5
1. Créer une table voitures qui contiendra les colonnes suivantes :
- id INT auto incrementation
- immatriculation VARCHAR 20
- marque VARCHAR 20
- cylindree SMALLINT
- dateachat DATE
2. Créer une table clients qui contiendra les colonnes suivantes :
- id INT auto incrementation
- nom VARCHAR 40
- prenom VARCHAR 40
- codepostal VARCHAR 10
- localité VARCHAR 50
- rue VARCHAR 80
- numero VARCHAR 10
- telephone VARCHAR 40
- email VARCHAR 50
3. Créer une table locations qui contiendra les colonnes suivantes :
- id INT auto incrementation
- idclient INT
- immatriculation VARCHAR 20
- datedebut DATETIME
- datefin DATETIME
- daterentree DATETIME
- assurance BOOL

4. Dans PHPMyAdmin :
- Insérer 3 voitures différentes
- Insérer 3 clients différents
- Insérer 2 locations différentes

5. Créer un fichier bdd.php dans lequel on se connecte à la base de donnée avec l'objet PDO en le stockant dans une variable :
```php
    $pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
```

6. Créer un fichier formulaireVoiture.php qui affiche un formulaire permettant de saisir les données de la table voiture. Lorsque l'on clique sur le bouton Ajouter du formulaire, on appelle une page ajoutVoiture.php qui ajoute les nouvelles données dans la base (uniquement si tous les champs sont remplis, et que le champ cylindrée (chevaux) est bien un entier).

7. Faire la même chose pour les clients et les locations

8. Pour terminer, créer une page listes.php qui affiche 3 listes sous forme de tableaux :
- La liste des clients
- La liste des voitures
- La liste des locations