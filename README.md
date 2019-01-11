# Projet PHP/Symfony3 2k18 CIR3 KLT/ABM

## API Rest
|Route	|Description                                
|-------------------------------------------------------|-|
|`/api/deplacements`					|Ramène l’ensemble des déplacements pour tous les utilisateurs
|`/api/deplacements/user/{id}`				|Ramène l’ensemble des déplacements pour un utilisateur (passé en paramètre)
|`/api/deplacements/user/{id}/annee/{annee}`		|Ramène les déplacements particuliers en fournissant l’utilisateur et l’année
|`/api/deplacements/user/{id}/annee/{annee}/mois/{mois}`|Ramène un déplacement particulier en fournissant l’utilisateur, l’année et le mois

## Base de données
Le script de la base de données se trouve ici [prj-cir3-1819-sfny.sql](https://github.com/CHEN-AND-CO/europe-ecologie-les-rouges/blob/master/prj-cir3-1819-sfny.sql)
Le nom de la Base, Utilisateur et Mot de passe sont à changer dans `app/config/parameters.yml`
