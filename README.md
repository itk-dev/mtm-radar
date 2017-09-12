# Ask a spider

## Installation

```
composer install
bin/console ckeditor:install --clear=drop
bin/console assets:install --symlink
bin/console doctrine:database:create
bin/console doctrine:migrations:migrate --no-interaction
```

## Loading fixtures

```
bin/console doctrine:fixtures:load --no-interaction
```
