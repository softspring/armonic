# Contributing

Run the standard package checks before submitting changes:

```bash
composer fix
composer test
composer test-bc
```

Run normal and lowest dependency workflows sequentially. This package validates static analysis,
code style, Rector and YAML; it does not currently configure PHPUnit.

Keep the public `EventSubscriberInterface` contract used by application integrations.
Rector excludes automatic subscriber conversion, with a guard for the lowest supported Rector version.
