<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    // use WithPagination;

    protected $paginationTheme='bootstrap';

    public $search;

    protected $UpdatesQueryString =['cari'];

    public function render()
    {
        // dd(Cart::get());
        //cara1
        $products=Product::paginate(12);
        
        if($this->search!==null){
            $products=Product::where('name', 'like', '%'. $this->search.'%')->paginate(12);
        }
        return view('livewire.products',[
            'products'=>$products,
        ])
        ->layout('layouts.main');

        //cara 2
        // return view('livewire.products',[
        //     'products'=>$this->search===null ? Product::paginate(12) : Product::where('name', 'like', '%'. $this->search.'%')->paginate(12)
        // ])
        // ->layout('layouts.main');

    }

    public function addToCart(int $productID){
        Cart::add(Product::where('id',$productID)->first());
        $this->emit('cartAdded');
    }
}
