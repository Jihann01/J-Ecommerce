<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product=Cart::get($rowId);
        $qty= $product->qty + 1;
        Cart::update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function destroy($rowid)
    {
        Cart::remove($rowid);
        session()->flash('success_message','Product has been removed');
    }

    public function checkout()
    {
        if(Auth::check())
        {
            return redirect()->route('checkout');
        }
        else 
        {
            return redirect()->route('login');
        }
    }
    
    

    public function render()
    {
        return view('livewire.cart-component')->layout("layouts.base");
    }
}
