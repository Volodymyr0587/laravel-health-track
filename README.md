```git clone https://github.com/Volodymyr0587/laravel-health-track```

```cd laravel-health-track```

```composer install```

```cp .env.example .env```

```create mysql database``` **health_track**

```php artisan key:generate```

```php artisan migrate```

```php artisan storage:link```

```npm install```

```npm run dev```

```php artisan serve```

Register new user.

To receive event information by email, specify the mail server credentials in the ```.env``` file. 
By default, messages will be written to ```storage/logs/laravel.log```
