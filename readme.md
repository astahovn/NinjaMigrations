# Ninja DB migrations

## Database configuration
Make a copy of `console/config/main-local.php.dist` as `main-local.php`.

Change database connection parameters in accordance with the local DB.

## Run migrations

```sh
php yii migrate
```