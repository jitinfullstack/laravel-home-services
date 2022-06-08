<?php

namespace App\Http\Livewire\Service;

use App\Models\ServiceCategory;
use Livewire\Component;

class ServiceCategoriesComponent extends Component
{
    public function render()
    {
        $scategories = ServiceCategory::all();
        return view('livewire.service.service-categories-component', ['scategories' => $scategories])->layout('layouts.base');
    }
}
