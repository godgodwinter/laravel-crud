<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use Livewire\Component;

class Carts extends Component
{
    public $cart;
    public function mount(){
    $this->cart=Cart::get();
    }
    public function render()
    {
        return view('livewire.carts')
            ->layout('layouts.main');
    }
    public function removeItem($productId){
        Cart::removeItem($productId);
        $this->cart= Cart::get();
        $this->emit('productRemoved');
    }
    public function checkout(){
        Cart::clear();
        $this->emit('clearCart');
        $this->cart=Cart::get();
        }
}
