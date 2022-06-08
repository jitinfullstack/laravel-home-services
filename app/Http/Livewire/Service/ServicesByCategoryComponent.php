<?php

namespace App\Http\Livewire\Service;

use App\Models\ServiceCategory;
use Livewire\Component;

class ServicesByCategoryComponent extends Component
{
    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $scategory = ServiceCategory::where('slug', $this->category_slug)->first();
        return view('livewire.service.services-by-category-component', ['scategory' => $scategory])->layout('layouts.base');
    }
}
