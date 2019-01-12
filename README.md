

# Projet PHP/Symfony3 2k18 CIR3 KLT/ABM

## Installation
Connectez vous sur mysql
```
source prj-cir3-1819-sfny.sql;
SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
exit;
```
Puis
```
php bin/console cache:clear --env=prod --no-debug

```

## API Rest
### Ramène l’ensemble des déplacements pour tous les utilisateurs
`/api/deplacements`
```javascript
{
"deplacementJour_id":1,		// ID Déplacement Jour
"nbKm":15.6,			// Nombre km
"montant":7,			// Montant
"date":null,			// Date déplacement
"deplacementJour_created":null,	// Date créa déplacement jour
"deplacementJour_updated":null,	// Date maj déplacement jour
"id":1,				// ID Déplacement
"deplacement_id":1,		// ID Déplacement
"annee":2018,			// Année création
"mois":1,			// Mois déplacement
"dateValidation":null,		// Date validation
"deplacement_created":null,	// Date création
"deplacement_updated":null,	// Date maj
"validation":null,		// VDéplacement validé
"nom":"Rambert",		// NOM USER
"prenom":"Julien",		// PRENOM USER
"user_id":2			// ID USER
}
```
(Même type de données renvoyées pour les autres)
### Ramène l’ensemble des déplacements pour un utilisateur (passé en paramètre)
`/api/deplacements/user/{id}`

### Ramène les déplacements particuliers en fournissant l’utilisateur et l’année
`/api/deplacements/user/{id}/annee/{annee}`

### Ramène un déplacement particulier en fournissant l’utilisateur, l’année et le mois
`/api/deplacements/user/{id}/annee/{annee}/mois/{mois}`

### Bonus
`/api/deplacement/` renvoie la liste des déplacements
`/api/deplacement/{id}/show` renvoie un déplacement
`/api/deplacement/{id}/new` créer un déplacement

## Base de données
Le script de la base de données se trouve ici [prj-cir3-1819-sfny.sql](https://github.com/CHEN-AND-CO/europe-ecologie-les-rouges/blob/master/prj-cir3-1819-sfny.sql)
Le nom de la Base, Utilisateur et Mot de passe sont à changer dans `app/config/parameters.yml`
