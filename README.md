# MTM-radar

## Installation

```
docker-compose up -d
docker-compose exec phpfpm composer install
docker-compose exec phpfpm bin/console doctrine:migrations:migrate --no-interaction
```

Open the site:

```sh
open "http://$(docker-compose port nginx 80)"
```

## Create administrator users

<strong>The stuff in this section does not work!</strong>

### Super administrator

```
docker-compose exec phpfpm bin/console fos:user:create --super-admin super-admin@example.com super-admin@example.com
```

```
docker-compose exec phpfpm bin/console fos:user:create admin@example.com admin@example.com
```

### Administrator

```
docker-compose exec phpfpm bin/console fos:user:promote admin@example.com ROLE_ADMIN
```

## Loading fixtures

```
docker-compose exec phpfpm bin/console doctrine:fixtures:load --no-interaction
```

After loading fixtures, you can sign in with username `admin@example.com` and password `password`.
