<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Coupon;
use App\Models\Category;

class AdminCouponsComponent extends Component
{
    use WithPagination;

    public function deleteCoupon($coupon_id)
    {
        $coupon = Category::find($coupon_id);
        $coupon->delete();
        session()->flash('message','coupon deleted');
    }

    public function render()
    {
        $coupons = Coupon::all();
        return view('livewire.admin.admin-coupons-component',['coupons'=>$coupons])->layout('layouts.base');
    }
  
}
