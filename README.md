# Récupérer le projet ECF2 Pixel-Coffee

## Vous devez récupérez ce dépôt afin d'avoir l'API à disposition en local. 

Pour ce faire, il vous faudra utiliser la commande suivante dans votre répertoire wsldev/projects

```
git clone https://github.com/SWEEPACAKE/api-pixelcoffee.git 
```

Ensuite, vous devrez vous rendre dans le dossier qui vient d'être téléchargé, le dossier "api-pixelcoffee", puis son répértoire public

```
cd api-pixelcoffee/public
```

Et ici vous devrez télécharger les packages requis pour faire fonctionner l'API, avec 

```
composer install
```

Maintenant vous pouvez remonter à la racine du projet avec 

```
cd ../
```

et démarrer votre environnement avec 

```
docker compose up --build -d
```

La première fois. Puis après, vous pourrez jongler entre

```
docker compose down
```
et
```
docker compose up
```

Pour allumer / éteindre votre environnement. 

## Tester si tout marche : 

Vous devriez avoir accès à ces URLS : 

[http://localhost:8080](https://) doit renvoyer une erreur 404

[http://localhost:8080/documentation.php](https://) doit vous emmener vers la doc

[http://localhost:8081](https://) doit vous emmener vers phpMyAdmin. 


# Démarrer votre développement Angular

Dans un AUTRE DOSSIER, démarrez votre projet Angular comme à votre habitude. Rendez vous donc dans votre répertoire wsldev/projects et exécutez la commande : 
```
ng new pixel-coffee
``` 

Vous devrez, dans les services de votre projet, appeler l'API sur l'URL http://localhost:8080/{endpoint de votre choix}