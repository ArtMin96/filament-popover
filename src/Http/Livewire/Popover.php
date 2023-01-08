<?php

namespace ArtMin96\FilamentPopover\Http\Livewire;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Popover extends Component
{
    public bool $shouldOpenPopover = false;

    public ?Model $model;

    public string $view;

    public ?array $viewData = [];

    public function openPopover()
    {
        $this->shouldOpenPopover = true;
    }

    public function getModel(): ?Model
    {
        return $this->model;
    }

    public function getView(): string
    {
        return $this->view;
    }

    public function getViewData(): ?array
    {
        return $this->viewData;
    }

    public function render(): View
    {
        return view($this->getView(), array_merge([
            'model' => $this->getModel()
        ], $this->getViewData()));
    }
}
