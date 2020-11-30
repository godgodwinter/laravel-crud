<div class="row">
  <div class="col-md-12">
      <input type="text" wire:model="cari" placeholder="Cari sesuatu .... "class="form-control mb-3" >

    </div>
        @foreach ($products as $product)
        <div class="col-md-3 mt-2">
            <div class="card-header">({{$product->id}}) {{$product->name}}
            </div>
            <div class="card-body">{{$product->description}}</div>
            <div class="card-footer">
                <button wire:click="addToCart({{$product->id}})"class="btn btn-success"> Add to Cart</button>
            </div>
        </div>
        @endforeach

    {{$products->links()}}
</div>