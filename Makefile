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
