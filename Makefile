## Install Dependencies
install:
	docker run -it --rm -v $(CURDIR):/app composer/composer install

## Run phpunit tests
test-phpunit:
	./vendor/bin/sail test --configuration phpunit.xml

## Start Sail
sail-start:
	./vendor/bin/sail up -d




