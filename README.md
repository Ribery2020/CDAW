# Template project for CDAW

## Prerequisites

- git - https://git-scm.com/downloads
- docker - https://docs.docker.com/get-docker/
- vscode - https://code.visualstudio.com/
- vscode remote container extension - https://code.visualstudio.com/docs/remote/containers
- create a github account

## How to use this template?

1. go to https://github.com/ceri-num/uv-cdaw-template
2. click on the green button "use this template". This will create a similar git repository on your account
3. clone your repository on your machine

```
git clone https://github.com/xxxx/uv-cdaw-template MyCDAWProject
```
4. Open the project with VSCode and re-open it with remote container extesion (the 1st launch takes time)

You should have:
- Apache on http://localhost:8080
- PhpMyAdmin on http://localhost:8081
    2 mysql accounts: root/root and mysql/mysql

Simple ``it works`` test: http://localhost:8080/test-pdo/test-PDO.php

xdebug is installed so you can put breakpoints in your code.

# Others links

- https://www.section.io/engineering-education/dockerized-php-apache-and-mysql-container-development-environment/


Je fais les pages suivant

Controllers:
    CommentController.php pour ajouter des commentaires
    listeMediasController.php pour ajouter un film à la liste

public/js:
    comment.js pour transmettre des informations de commentaire par ajax
    list.js pour transmettre des informations de liste par ajax

resources/views:
    welcome.blade.php:  
        c'est la page d'accueil, dans la barre de navigation, il y a une liste de favoris, une liste d'historique, une déconnexion et une page d'accueil personnelle.
        Dans la partie inférieure de la page, il peut afficher huit films recommandés, j'ai choisi les huit premiers films de top250.
        Cliquez sur le bouton <More Details> pour accéder à la page des détails du film.
    films.blade.php:
        Ceci est un modèle pour afficher les détails du film. Il peut afficher l'image du film, l'année, le réalisateur, les acteurs, la durée, etc. Il a trouvé les informations correspondantes dans la base de données <table_media> selon l'imdb_id dans l'url.
        Il y a deux boutons sur la droite pour ajouter des films à la liste, puis revenez sur cette page.
        Le button <Create Comment> peut ajouter des commentaires.

routes/web.php
    Chemin configuré, listeMedias, addComment, addToWatchlist, addTolist, films/{imdb_id}.

Le <dashboard> de la barre de navigation ne sont pas utiles pour ce projet, ce sont les pages que j'ai faites pour tester certaines fonctions.
J'ai utilisé ces tables dans la base de données: comment, history, list, playlist, table_media, watchlist.
