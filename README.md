
# Awesome Calculator

*By: Nick Donohue (ndonohue@gmail.com)*

This is a basic calculator that handles binary arithmetic expressions.
The frontend interface communicates with a PHP backend via AJAX, which is where
the actual validation and evaluation occurs.

## Building/Running

`composer install`

*Requires an installation of [Bower](http://bower.io) to install front-end dependencies.*

`composer run`

*Local server should be running at localhost:8000.
Alternatively, point your webroot towards `public/`.*

## Running Tests

`composer test`

*Requires phpunit to be installed*
