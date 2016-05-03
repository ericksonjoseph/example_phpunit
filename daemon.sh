fswatch -o ./ | xargs -n1 -I "-" vendor/bin/phpunit
