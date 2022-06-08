<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class ServiceDetailsComponent extends Component
{
    public function mount($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function render()
    {
        $service = Service::where('slug', $this->service_slug)->first();
        $r_service = Service::where('service_category_id', $service->service_category_id)->where('slug', '!=', $this->service_slug)->inRandomOrder()->first();
        return view('livewire.service.service-details-component', ['service' => $service, 'r_service' => $r_service])->layout('layouts.base');
    }
}
