default:
	composer install
	php -S 127.0.0.1:8000 index.php

serve:
	php -S 127.0.0.1:8000 index.php

test:
	./vendor/bin/phpunit ./tests/*.php

