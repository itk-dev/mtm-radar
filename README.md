# MTM-radar

## Installation

```shell
docker compose up --detach
docker compose exec phpfpm composer install
docker compose exec phpfpm bin/console doctrine:migrations:migrate --no-interaction
```

Open the site:

```shell
open "http://$(docker compose port nginx 8080)"
```

## Create administrator users

**The stuff in this section does not work!**

### Super administrator

```shell
docker compose exec phpfpm bin/console fos:user:create --super-admin super-admin@example.com super-admin@example.com
```

```shell
docker compose exec phpfpm bin/console fos:user:create admin@example.com admin@example.com
```

### Administrator

```shell
docker compose exec phpfpm bin/console fos:user:promote admin@example.com ROLE_ADMIN
```

## Loading fixtures

```shell
docker compose exec phpfpm bin/console doctrine:fixtures:load --no-interaction
```

After loading fixtures, you can sign in with username `admin@example.com` and password `password`.
