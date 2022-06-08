<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\ServiceProvider;
use Livewire\Component;

class AdminServiceProvidersComponent extends Component
{
    public function render()
    {
        $sproviders = ServiceProvider::paginate(12);
        return view('livewire.admin.service.admin-service-providers-component', ['sproviders' => $sproviders])->layout('layouts.base');
    }
}
