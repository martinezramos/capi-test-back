## Proceso de instalación

- Copiar el archivo .env.example y renombrarlo con .env

- Correr los comandos siguientes:
```
composer install 
php artisan key:generate
```

- Correr las migraciones:
```
php artisan migrate
```

- Correr los seeders:
```
php artisan db:seed --class="Database\Seeders\DatabaseSeeder"
```

- Correr el servidor:
```
php artisan server
```
