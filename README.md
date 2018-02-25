# [FIC 2k18]Taille-Crayon

Ce challenge a été réalisé dans le cadre du Forum International de la Cybersécurité (FIC)
2018 se tenant à Lille le 23 et 24 janvier 2018. L’ENSIBS (Ecole Nationale Supérieur d’Ingénieurs
de Bretagne Sud ), et plus précisément les étudiants de la formation Cyberdéfense, a été chargée
de préparer un événement de type Capture The Flag (CTF).
C’est dans le but d’alimenter cet événement en épreuves que j’ai créé le challenge
« TailleCrayon ».

## Enoncé

Le but de ce challenge est de récupérer l’adresse mail et le mot de passe de
l’administrateur à l’origine de ce petit site.
Cependant, le challenger ne devra pas utiliser une vulnérabilité d’un des langages de
programmation utilisés.
En effet, il devra tout d’abord trouver quelle particularité du site lui permettra de donner des
indices sur le mot de passe de l’administrateur.
Puis il devra trouver, sur des sites externes, l’adresse mail et les différents éléments du mot
de passe de l’administrateur en utilisant les renseignements d’origine source ouverte (OSINT).

## Categories

*OSINT (Open Source INTelligence)

## Matériel nécessaire pour le résoudre

*Accès à Internet

## Matériel nécessaire pour le rejouer

*Docker

## Mise en place du challenge

1. Depuis ce dossier, effectuez la commande : docker build . -t myphp
2. Puis la commande : docker-compose up -d
3. Enfin, rendez-vous dans votre naviguateur préféré à l'adresse suivante : http://localhost:8080

## Contact

https://twitter.com/y0r3l
