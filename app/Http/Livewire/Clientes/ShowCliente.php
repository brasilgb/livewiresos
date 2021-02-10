<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCliente extends Component
{
    use WithPagination;
    public function render()
    {
        $clientes = Cliente::paginate(20);
        return view('livewire.clientes.show-cliente', compact('clientes'));
    }
}
