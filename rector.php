<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\Symfony\CodeQuality\Rector\Class_\EventSubscriberToAttributeRector;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/src',
    ])
    ->withSets([
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::TYPE_DECLARATION,
    ])
    ->withImportNames()
    ->withPhpVersion(PhpVersion::PHP_84)
    ->withComposerBased(symfony: true)
    ->withSkip(array_filter([
        // Preserve the public subscriber API; this rule is absent in the lowest Rector version.
        class_exists(EventSubscriberToAttributeRector::class) ? EventSubscriberToAttributeRector::class : null,
    ]));
