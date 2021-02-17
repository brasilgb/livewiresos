<?php

namespace App\Http\Livewire\Utils;

use Livewire\Component;

class SearchDropdown extends Component
{
    public $i          = 1;
    public $suppliers  = [];

    public $inputsearchsupplier = '';
    public $supplier_id;

    public function selectsupplier($supplier_id, $terms)
    {
        $this->supplier_id = $supplier_id;
        $this->terms = $terms;
        $this->inputsearchsupplier = '';
    }

    public function render()
    {

        $searchsuppliers = [];

        if (strlen($this->inputsearchsupplier) >= 2) {
            $searchsuppliers = Supplier::where('name', 'LIKE', '%' . $this->inputsearchsupplier . '%')
                ->orWhere('code', 'LIKE', '%' . $this->inputsearchsupplier . '%')
                ->get();
        }

        return view('livewire.purchase-invoice-items')->with(['searchsuppliers' => $searchsuppliers]);
    }
    // public function render()
    // {
    //     return view('livewire.utils.search-dropdown');
    // }
}
