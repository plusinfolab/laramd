<?php

declare(strict_types=1);

namespace NunoMaduro\SkeletonPhp;

use Illuminate\Support\ServiceProvider;

class MarkdownDocsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $docsPath = __DIR__ . '/.markdown/docs';

        if (is_dir($docsPath)) {
            $this->publishes([
                $docsPath => base_path('docs/vendor/laramd'),
            ], 'laramd-docs');
        }
    }
}


