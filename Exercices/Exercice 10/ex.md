# Exercice 10

1. Créer les classes suivantes en utilisant l'héritage :
- Entite :
  - Attribut string $nom
  - Attribut string $dimension
  - Attribut int $age

- Mortel qui hérite de Entite :
  - Attribut int $pointsDeVie
  - Attribut int $force
  - Attribut int $intelligence
  - Attribut int $agilite

- Elfe qui hérite de Mortel :
  - Attribut int $esquive
  - Valeur par défaut de $pointsDeVie = 18
  - Methode acrobaties () qui augmente leur esquive de 10

- Nain qui hérite de Mortel :
  - Attribut int $richesse
  - Valeur par défaut de $pointsDeVie = 24
  - Methode prospection () qui augmente sa richesse d'une valeur aléatoire entre 1 et 1000

- Humain qui hérite de Mortel :
  - Attribut $arrogance
  - Valeur par défaut de $pointsDeVie = 20
  - Methode mepris () qui augmente leur arrogance de 20

- Voleur qui hérite de Elfe :
  - Valeur par défaut de $force = 12
  - Valeur par défaut de $intelligence = 10
  - Valeur par défaut de $agilite = 18
  - Methode invisibilité() qui affiche "[Nom] est devenu invisible"

- Guerrier qui hérite de Nain :
  - Valeur par défaut de $force = 18
  - Valeur par défaut de $intelligence = 6
  - Valeur par défaut de $agilite = 14
  - Methode criDeGuerre() qui augmente sa force de 2 points

- Mage qui hérite de Humain:
  - Valeur par défaut de $force = 4
  - Valeur par défaut de $intelligence = 19
  - Valeur par défaut de $agilite = 7
  - Methode sheep($cible) qui affiche "[Nom de la cible] est transformé en mouton !"

2. Créer les différents constructeurs, getters et setters
3. Tester les différentes méthodes et attributs dans index.php