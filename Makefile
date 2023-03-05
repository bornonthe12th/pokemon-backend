## Install Dependencies
install:
	docker run -it --rm -v $(CURDIR):/app composer/composer install

## Migration
sail-migrate:
	./vendor/bin/sail php artisan migrate:fresh

## Start Sail
sail-start:
	./vendor/bin/sail up -d




