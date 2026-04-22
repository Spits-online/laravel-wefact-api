# Release Notes

# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Unreleased

### Added
- Laravel 13 compatibility

### Fixed
- `src\Entities\BaseEntity` constructor: use explicit nullable type `?int $Identifier = null` (PHP 8.4 deprecation)
- `src\HostFact` static factory methods: use explicit nullable type `?int $Identifier = null` (PHP 8.4 deprecation)
- `composer.json`: corrected `phpunit/phpunit` constraint (`12.5` → `^12.0`)

## [1.0.1] - 2025-09-03

### Added 
- `src\HostFact` added function `domain`

### Fixed
- Typo `src\Traits\HasAttachments` function `addAttachement()` -> `addAttachment()`

## [1.0.0] - 2025-05-23
- Initial release