<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class ShowOrder extends Component
{
    use WithPagination;

    public $search;
    public $confirmingOrderDeletion = false;

    public function confirmOrderDeletion($id)
    {
        $this->confirmingOrderDeletion = $id;
    }

    public function deleteOrder(Order $order)
    {
        $order->delete();
        $this->confirmingOrderDeletion = false;
    }

    public function render()
    {
        $search = '%' . $this->search . '%';
        $orders = Order::where('id_ordem', 'like', $search)->orderby('id_ordem', 'DESC')->paginate(15);
        return view('livewire.orders.show-order', compact('orders'));
    }
}
