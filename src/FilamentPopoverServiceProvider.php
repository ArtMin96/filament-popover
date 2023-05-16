<?php

namespace ArtMin96\FilamentPopover;

use ArtMin96\FilamentPopover\Http\Livewire\Popover;
use Filament\PluginServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;

class FilamentPopoverServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-popover';

    protected function getStyles(): array
    {
        parent::getStyles();

        return array_merge(
            $this->configureCss(for: 'themes'),
            $this->configureCss(for: 'animations'),
        );
    }

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile()
            ->hasViews();
    }

    public function packageBooted(): void
    {
        parent::packageBooted();

        $this->configureComponents();

        Livewire::component('filament-popover', Popover::class);
    }

    /**
     * Configure the Filament Account Blade components.
     */
    protected function configureComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponent('preview');
        });
    }

    /**
     * Register the given component.
     */
    protected function registerComponent(string $component): void
    {
        Blade::component('filament-popover::components.'.$component, 'filament-popover::'.$component);
    }

    protected function configureCss(string $for): ?array
    {
        $configFor = config("filament-popover.{$for}");

        if (empty($configFor)) {
            return [];
        }

        return collect($configFor)
            ->mapWithKeys(fn ($item): ?array => [
                "tippy-{$for}-{$item}" => "https://unpkg.com/tippy.js@6/{$for}/{$item}.css",
            ])
            ->all();
    }
}
