<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCliente extends Component
{
    use WithPagination;

    public $search;
 

    public function render()
    {
        $search = '%' . $this->search . '%';
        $clientes = Cliente::where('cliente', 'like', $search)->paginate(15);
        return view('livewire.clientes.show-cliente', compact('clientes'));
    }
}
