# You don't need JWT

This application is a demo to show how we can avoid JWT with Symfony.

It's better to read the [blog post](https://jolicode.com/blog/why-you-dont-need-jwt)
before playing with it.

## Installation

You can create a `.env.local` file, and override env var defined in `.env` in it.

    composer install
    bin/console doctrine:database:create
    bin/console doctrine:migration:migration
    bin/console doctrine:fixture:load

## Key files:

* [Security Controller to get a token](./src/Controller/Api/SecurityController.php)
* [`security.yaml`](./config/packages/security.yaml)
* [The user class](./src/Entity/User.php)
* [A very simple JS application](./templates/frontend/index.html.twig)
