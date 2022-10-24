# MTM-radar

## Installation

``` 
    docker-compose up -d
docker-compose exec phpfpm composer install
docker-compose exec phpfpm bin/console doctrine:migrations:migrate --no-interaction
```

## Rewrite in app/vendor/itk-dev/user-bundle/src/User/UserManager.php:90

``` 
OLD: 
$user->setField($user, $this->getUsernameField(), $username);
NEW: 
$this->setField($user, $this->getUsernameField(), $username);
```

## Create administrator users


### Super administrator

```
docker-compose exec phpfpm bin/console itk-dev:user:create --super super-admin@example.com
```

### Administrator

```
docker-compose exec phpfpm bin/console itk-dev:user:create admin@example.com ROLE_ADMIN 
```

## Loading fixtures

```
docker-compose exec phpfpm bin/console doctrine:fixtures:load --no-interaction
```

After loading fixtures, you can sign in with username `admin@example.com` and password `password`.

## Open site

```
open http://$(docker-compose port nginx 80)
```