<div>
<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    
                    <span></span> All Coupons
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                           
                                <div class="row">
                                    <div class="col-md-6">
                                        All coupons
                                    </div>
                                      <div class="col-md-6">
                                        <a href="{{route('admin.addcoupon')}}" class="btn btn-success float-end">Add new coupon</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" roles="alert">{{Session::get('message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Coupon code</th>
                                            <th>Coupon type</th>
                                            <th>Coupon value</th>
                                            <th>Cart value</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($coupons as $coupon)
                                            <tr>
                                                <td>{{$coupon->id}}</td>
                                                <td>{{$coupon->code}}</td>
                                                <td>{{$coupon->type}}</td>
                                                @if($coupon->type == "fixed")
                                                    <td>${{$coupon->value}}</td>
                                                @else
                                                    <td>{{$coupon->value}}%</td>
                                                @endif
                                                <td>{{$coupon->cart_value}}</td>
                                                <td>
                                                    <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}" class="text-info" style="margin-left:50px;">Edit</a>
                                                    <a href="#" wire:click.prevent="deleteCoupon({{$coupon->id}})">delete</a>
                                                    
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
</div>

<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">Do you want to delete this record ????</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cancel</button>
                        <button type="button" onclick="deleteCategory()" class="btn btn-danger" >Delete</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id)
        {
            @this.set('$category_id',id);
            $('#deleteConfirmation').modal('show');
        }
        function deleteCategory()
        {
            @this.call('deleteCategory');
            $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush