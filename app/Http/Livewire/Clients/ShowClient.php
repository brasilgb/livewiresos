<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class ShowClient extends Component
{
    use WithPagination;

    public $search;
    public $confirmingClientDeletion = false;

    public function confirmClientDeletion($id)
    {
        // $client->delete();
        $this->confirmingClientDeletion = $id;
    }

    public function deleteClient(Client $client)
    {
        $client->delete();
        $this->confirmingClientDeletion = false;
    }

    public function render()
    {
        $search = '%' . $this->search . '%';
        $clients = Client::where('nome', 'like', $search)->orderby('id_cliente', 'DESC')->paginate(15);
        return view('livewire.clients.show-client', compact('clients'));
    }
}
