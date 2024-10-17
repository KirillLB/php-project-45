# Makefile

.PHONY: brain-games

install: # установить зависимости
	composer install
	
brain-games: # запуск игры
	./bin/brain-games

validate: # проверка правильности и корректности файла composer.json
	composer validate

lint: # запуск PHP_CodeSniffer и проверка каталогов src и bin на соответствие стандарту PSR-12
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-even: # запуск игры brain-even
	./bin/brain-even

brain-calc: # запуск игры brain-calc
	./bin/brain-calc

brain-gcd: # запуск игры brain-gcd
	./bin/brain-gcd

brain-progression: # запуск игры brain-progression
	./bin/brain-progression

brain-prime: # запуск игры brain-prime
	./bin/brain-prime