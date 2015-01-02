#!/bin/sh

echo "listening on http://localhost:8000"
php -S localhost:8000 -t public/
