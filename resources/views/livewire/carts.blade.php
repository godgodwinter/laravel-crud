<div class="row">
    <div class="col-md-12"><div class="car">
         <div class="card">
             <div class="card-body">
                 <ul class="list-group">
                    @foreach ($cart['products'] as $product)
                    <li class="list-group-item">
                        <span>{{$product->name }} | Prce: {{$product->price}}
                        </span>
                        <div class="float-right">
                            <button wire:click="removeItem({{$product->id}})" class="btn btn-danger">Remove</button>
                        </div>
                    </li>    

                    @endforeach

                 </ul>
             </div>
             <div class="card-footer">
                @if ($cart['products'])
                <button wire:click="checkout" class="btn btn-success float-right">Checkout</button>
            @endif
             </div>
         </div>
    </div></div>
</div>