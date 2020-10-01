# airlines

Ce projet est une simple application web de reservation de billet d'avion. Le parcours de la recherche de vol jusqu'a l'impression du billet d'avion, en passant par  la consultation d'un vol , sans oublier un panel pour l'administration  est entièrement geré sur ce site.



## Ce qu'il faut savoir pour deployer cette app:
  
- il faut faire tourner cette app sur un serveur web de votre choix ( Apache pour mon cas)
-  PHP doit être installé sur votre système
- Ainsi qu'un SGBD , MariaDB de préférence  car simple et efficace
- Pour avoir ces trois elements sus-mentionné , il est possible de telecharger les stacks LAMP(pour Linux) ou WAMP ( pour Windows)
- Dans le dossier **bd** se trouve un fichier sql qui est le jeu de données utilisés pour developper et tester cette app . Ainsi, veuillez importer ce fichier sql dans une base de donnée
- Et le plus important concernant la base de donnée , veuillez créer un utilisateur nommé '**mupie**' ayant un mot de passe '**onlab**' afin que le code puisse se connecter a la base de donnée ou encore vous pouvez changer dans les fichiers php , toute connexion avec la base de donnée par vos idientifiants souhaité

- En ce qui concerne le panel administration, l'idientifiant de connexion est **admin** , de même pour le mot de passe.


## Etat de securité:

 Ce site est entièrement vulnérable à la majorité des attaques web. il a été developpé avec l'intention de le faire simplement fonctionner sans prendre en considération les mesures de securité. Ainsi, ça fait un bon site pour s'entrainer sur ses compétences en test d'intrusion des applications web. 
