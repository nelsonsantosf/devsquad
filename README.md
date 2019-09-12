# Devsquad

Painel Administrativo e Landing Page.

## Requisitos
PHP \
MySQL \
Git \
Composer

## Instalação

- Clone o repositório em seu computador.

```bash
git clone https://github.com/nelsonsantosf/devsquad.git
```

- Renomeie o arquivo ```.env.example``` para ```.env```
- Instale os pacotes do laravel e node

```bash
composer install
node install
```
- Rode os comando para configuração da aplicação

```bash
php artisan key:generate
php artisan migrate
php artisan db:seed
```
- Para iniciar o servidor execute

```bash
php artisan serve
```

## Usando o sistema

Para inserir um novo administrador acesse com ```/register``` a frente da URL

```bash
http://<site_url>/register
```
