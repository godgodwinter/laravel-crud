<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use Livewire\Component;

class Navbar extends Component
{
    public $cartTotal=0;
    protected $listeners=[
        'cartAdded'=>'updateCartTotal',
        'productRemoved'=>'updateCartTotal',
        'clearCart'=>'updateCartTotal'
    ];
    public function mount(){
          $this->cartTotal=count(Cart::get()['products']);
    }
    public function render()
    {
        // dd($this->cartTotal);
        return view('livewire.navbar');
    }
     
}
