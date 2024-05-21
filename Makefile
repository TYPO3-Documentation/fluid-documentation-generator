PHP_BIN = docker run --rm --user $$(id -u):$$(id -g) -v${PWD}:/opt/project -w /opt/project php:8.2-cli php -d memory_limit=1024M

.PHONY: help
help: ## Displays this list of targets with descriptions
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: fix-code-style
fix-code-style: ## Fix coding styles
	$(PHP_BIN) vendor/bin/php-cs-fixer fix

.PHONY: fix-rector
fix-rector: ## Fix rector
	$(PHP_BIN) vendor/bin/rector

.PHONY: fix
fix: fix-rector fix-code-style ## Runs all available fixers (rector, cs)

.PHONY: test-unit
test-unit: ## Run unit test
	$(PHP_BIN) vendor/bin/phpunit

.PHONY: test
test: fix-code-style test-unit ## Runs all test

.PHONY: code-style
code-style: ## Executes php-cs-fixer with "check" option
	@echo "$(ENV_INFO)"
	$(PHP_BIN) vendor/bin/php-cs-fixer check

.PHONY: phpstan
phpstan: ## Execute phpstan
	@echo "$(ENV_INFO)"
	$(PHP_BIN) vendor/bin/phpstan --configuration=phpstan.neon

.PHONY: phpstan-baseline
phpstan-baseline: ## Generates phpstan baseline
	@echo "$(ENV_INFO)"
	$(PHP_BIN) vendor/bin/phpstan --configuration=phpstan.neon --generate-baseline

.PHONY: generate
generate: ## Generate rst files to "public" with schemas from "schemas"
	rm -r public/typo3
	rm -r public/typo3fluid
	rm -r public/Index.rst
	$(PHP_BIN) ./bin/generate-fluid-documentation "`pwd`/public/" "" 1

.PHONY: docs
docs: ## Try out the generated reference (from "public" directory)
	mkdir -p Documentation-GENERATED-temp
	docker run --rm --pull always -v "$(shell pwd)":/project -t ghcr.io/typo3-documentation/render-guides:latest --config=public public

.PHONY: test-docs
test-docs: ## Test rendering the generated reference
	mkdir -p Documentation-GENERATED-temp
	docker run --rm --pull always -v "$(shell pwd)":/project -t ghcr.io/typo3-documentation/render-guides:latest --config=public public --no-progress --fail-on-log

