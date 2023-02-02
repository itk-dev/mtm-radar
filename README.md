# MTM-radar

## 1. Installation

```
docker-compose up -d
docker-compose exec phpfpm composer install
docker-compose exec phpfpm bin/console doctrine:migrations:migrate --no-interaction
```

## 2. Loading fixtures

```
docker-compose exec phpfpm bin/console doctrine:fixtures:load --no-interaction
```

## 3. Open site

```
open "http://$(docker-compose port nginx 8080)" OR
open "http://$(docker-compose port nginx 8080)/admin"
```
After loading fixtures, you can sign in with username `admin@example.com` and password `password`.

## 4. Open Mailhog
```
docker-compose ps
```
Copy the mailhog route.


### Coding stamdards

```
docker-compose exec phpfpm composer check-coding-standards
```
