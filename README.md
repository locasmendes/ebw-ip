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
