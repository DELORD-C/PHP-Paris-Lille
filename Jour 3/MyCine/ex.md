# Exercice 11

Compléter `home.php`, `auth.php`, et `bdd.php` pour connecter l'utilisateur afin qu'il accède au contenu de la page `home.php` si la combinaison email/mot de passe qu'il a renseigné dans le formulaire de la page `index.php` est bonne.

Aide :
```php
$pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
//Creation de l'objet PDO qui se connect à la base de donnée
```

```php
$pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
$query = $pdo->prepare("SELECT * FROM users WHERE email = '" . $_POST['email'] . "'");
$query->execute();
$resultat = $query->fetch();
//Récupérer en bdd le mot de passe associé à l'email envoyé par le formulaire
```

```php
if (!empty($resultat) && $resultat['password'] == $_POST['mdp']) {
        $_SESSION['connected'] = 'true';
}
//Vérifier si le mot de passe du formulaire correspond à celui stocké en bdd
```