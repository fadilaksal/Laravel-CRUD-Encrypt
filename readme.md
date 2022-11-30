# Laravel CRUD Encryption


## Installation

Make sure you have docker installed in your desktop, run docker compose up

```bash
docker compose up -d
```

copy environment laravel project

```bash
cp src/backend/.env.example src/backend/.env
```

run composer install

```bash
docker compose exec backend composer install
```

generate laravel key

```bash
docker compose exec backend php artisan key:generate
```

migrate db

```bash
docker compose exec backend php artisan migrate
```

then open your project in "localhost"


## License

[MIT](https://choosealicense.com/licenses/mit/)