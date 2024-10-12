# Makefile

.PHONY: brain-games

install: # установить зависимости
	composer install
	
brain-games: # запуск игры
	./bin/brain-games

validate: # проверка правильности и корректности файла composer.json
	composer validate

