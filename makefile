lint-php:
	docker-compose exec php su --command="composer php-lint" www-data

phpstan:
	docker-compose exec php bash /symfony-demo/bin/phpstan.sh
