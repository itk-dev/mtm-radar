# Ask a spider

## Installation

```
composer install
bin/console ckeditor:install --clear=drop
bin/console assets:install --symlink
bin/console doctrine:database:create
bin/console doctrine:migrations:migrate --no-interaction
```

## Create administrator users


### Super administrator

```
bin/console fos:user:create --super-admin super-admin@example.com super-admin@example.com
```

```
bin/console fos:user:create admin@example.com admin@example.com
```

### Administrator

```
bin/console fos:user:promote admin@example.com ROLE_ADMIN
```

## Loading fixtures

```
bin/console doctrine:fixtures:load --no-interaction
```
