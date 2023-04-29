### Installation Command

```
composer install // For Development / Local
composer install --no-dev --optimize-autoloader
cp .env.example .env
php artisan key:generate
npm install
php artisan icons:cache
```

### Development Command

```
npm run dev
php artisan server
```

### Production Command

``` 
npm run build
```

#### Page Cache
Esta aplicação utiliza cache de página, através do seguinte [pacote](https://github.com/JosephSilber/page-cache):
    
``
silber/page-cache
``

Caso haja algum problema com atualização de páginas, execute o comando abaixo:

```
php artisan page-cache:clear
```
