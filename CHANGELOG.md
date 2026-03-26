# Changelog

All notable changes to `laravel-referral-rewriter-tag` will be documented in this file.

## v1.0.6 - 2026-03-26

### What's Changed

- stabilize the Laravel 12 maintenance baseline on `main`
- align the dev toolchain to Testbench 10, Pest 3, Larastan 3, PHPStan 2, Rector 2, and Collision 8
- replace the fragile multi-OS / Code Climate setup with a small `pull_request` gate that validates Composer, runs tests, and runs static analysis
- add a real package boot smoke test and cover Instant Gaming config fallback defaults
- add Composer Dependabot coverage and tighten auto-merge handling for non-major Dependabot PRs

### Config Changes

- `config/referral-rewriter-tag.php` now includes the optional `instantgaming.subtag` key

### Upgrade Steps

- require PHP 8.2 or newer for local development and CI
- refresh local dev dependencies with `composer update`
- if you rely on repository workflows, note that standalone `phpstan.yml` was removed and analysis now runs inside `run-tests.yml`

### Compatibility Notes

- the maintenance baseline now targets Laravel 12 through Orchestra Testbench 10
- the testing / analysis toolchain now uses Pest 3, Larastan 3, PHPStan 2, and Rector 2

### Maintenance PRs

- merged #23
- closed obsolete major Dependabot PRs #19, #20, and #22

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/compare/v1.0.5...v1.0.6

## v1.1.0 - 2026-03-26

### What's Changed

- stabilize the Laravel 12 maintenance baseline on `main`
- align the dev toolchain to Testbench 10, Pest 3, Larastan 3, PHPStan 2, Rector 2, and Collision 8
- replace the fragile multi-OS / Code Climate setup with a small `pull_request` gate that validates Composer, runs tests, and runs static analysis
- add a real package boot smoke test and cover Instant Gaming config fallback defaults
- add Composer Dependabot coverage and tighten auto-merge handling for non-major Dependabot PRs

### Config Changes

- `config/referral-rewriter-tag.php` now includes the optional `instantgaming.subtag` key

### Upgrade Steps

- require PHP 8.2 or newer for local development and CI
- refresh local dev dependencies with `composer update`
- if you rely on repository workflows, note that standalone `phpstan.yml` was removed and analysis now runs inside `run-tests.yml`

### Compatibility Notes

- the maintenance baseline now targets Laravel 12 through Orchestra Testbench 10
- the testing / analysis toolchain now uses Pest 3, Larastan 3, PHPStan 2, and Rector 2

### Maintenance PRs

- merged #23
- closed obsolete major Dependabot PRs #19, #20, and #22

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/compare/v1.0.5...v1.1.0

## v1.0.5 - 2025-07-22

Add PHP 8.2, 8.3, 8.4

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/compare/v1.0.4...v1.0.5

## v1.0.4 - 2025-07-18

### What's Changed

* Bump dependabot/fetch-metadata from 2.2.0 to 2.3.0 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/12
* Bump aglipanci/laravel-pint-action from 2.4 to 2.5 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/13
* Bump dependabot/fetch-metadata from 2.3.0 to 2.4.0 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/14
* Bump stefanzweifel/git-auto-commit-action from 5 to 6 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/15
* Beta laravel 12 by @murdercode in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/16

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/compare/v1.0.3...v1.0.4

## v1.0.3 - 2024-12-13

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/compare/v1.0.2...v1.0.3

## v1.0.2 - 2024-11-05

### What's Changed

* Bump aglipanci/laravel-pint-action from 2.3.0 to 2.3.1 by @dependabot in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/5
* Bump aglipanci/laravel-pint-action from 2.3.1 to 2.4 by @dependabot in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/9
* Bump dependabot/fetch-metadata from 1.6.0 to 2.2.0 by @dependabot in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/11
* Bump amancevice/setup-code-climate from 1 to 2 by @dependabot in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/7
* Bump ramsey/composer-install from 2 to 3 by @dependabot in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/6
* Bump stefanzweifel/git-auto-commit-action from 4 to 5 by @dependabot in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/4

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/compare/v1.0.1...v1.0.2

## v1.0.1 - 2023-09-22

### What's Changed

- Bump actions/checkout from 3 to 4 by @dependabot in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/2
- Fix missing constructor
- Rector by @murdercode in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/3

### New Contributors

- @murdercode made their first contribution in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/3

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/compare/v1.0.0...v1.0.1

## v1.0.0 - 2023-08-30

### What's Changed

- Bump aglipanci/laravel-pint-action from 2.2.0 to 2.3.0 by @dependabot in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/1

### New Contributors

- @dependabot made their first contribution in https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/pull/1

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/commits/v1.0.0
