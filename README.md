# Ask a spider

## Installation

```
composer install
bin/console ckeditor:install
bin/console assets:install web
bin/console doctrine:database:create
bin/console doctrine:migrations:migrate --no-interaction
```

## Loading fixtures

```
bin/console doctrine:fixtures:load --no-interaction
```
