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