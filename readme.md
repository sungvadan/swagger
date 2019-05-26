A test with swagger
------------------

swagger-editor: outils en ligne pour générer la doc

swagger-php : annotation swagger

command pour générer avec swagger-php 
```
./vendor/bin/openapi --format yaml --output ./swagger/swagger.yaml ./swagger/swagger.php src
```

swagger-ui: l'interface pour visualiser 

Démarer server build in symfony
``` 
./bin/console server:run
```

Générer le fichier swagger.yaml
```
./vendor/bin/openapi --format yaml --output ./public/swagger/swagger.yaml ./swagger/swagger.php src
```

[link vers le doc générer par swagger-ui](http://localhost:8000/swagger/index.html)
