# Exercice 15

Sur home.php, en plus des images déjà affichées, afficher la description de the movviedb (`overview`) et la note sur 10 (`vote_average`);

### <u>Il existe 2 solutions :</u>
1. Utiliser directement
```php
Api::getMovieDetails($titre)
```
1. Créer des nouvelles méthodes dans la classe `Api`