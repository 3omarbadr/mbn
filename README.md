# MBN

## Installation

First clone this repository, install the dependencies, and setup your .env file.

```
git clone git@github.com:3omarbadr/mbn.git
composer install
cp .env.example .env
```

Then create the necessary database.

```
php artisan db
create database mbn
```

And run the initial migrations and seeders.

```
php artisan migrate --seed

OR

php artisan migrate
php artisan db:seed
```

Login credentials

```
email : demo@demo.com
password: demo
```


