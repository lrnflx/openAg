.PHONY: testunit testphpm testphpcs

testunit:
	bin/phpunit --coverage-html=var/phpunitest

testphpm:
	vendor/bin/phpmetrics --report-html=var/build ./src

testphpcs:
	vendor/bin/phpcs --standard=PSR2 src