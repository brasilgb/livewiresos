<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Asantibanez\LivewireSelect\LivewireSelect;
use Illuminate\Support\Collection;

use Livewire\Component;

class CarModelSelect extends LivewireSelect
{
    public function options($searchTerm = null): Collection
    {
        $search = '%' . $this->searchTerm . '%';
        $clients = Client::where('nome', 'like', $search)->get();
        foreach ($clients as $client) {
            $response[] = ['value' => $client->id_cliente, 'label' => $client->nome];
        }

        return collect([
            response()->json($response)
        ]);
        
    }
}
