<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Add new Coupon
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
                                    <div class="coll-md-6">
                                        Add new Coupon
                                    </div>
                                    <div class="coll-md-6">
                                        <a href="{{route('admin.coupons')}}" class="btn btn-success float-right">All Coupons</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" roles="alert">{{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="storeCoupon">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Coupon code</label>
                                        <input type="text" name="name" class="form-control" placeholder="enter Coupon code" wire:model="code">
                                        @foreach($errors->get('name') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Coupon type</label>
                                        <select class="form-control" wire:model="type">
                                            <option value="">select</option>
                                            <option value="fixed">fixed</option>
                                            <option value="percent">percent</option>
                                        </select>
                                        @foreach($errors->get('name') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="slug" class="form-label">Coupon Value</label>
                                        <input type="text" name="slug" class="form-control" placeholder="enter Coupon Value" wire:model="value">
                                        @foreach($errors->get('slug') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="slug" class="form-label">Cart Value</label>
                                        <input type="text" name="slug" class="form-control" placeholder="enter Card Value" wire:model="cart_value">
                                        @foreach($errors->get('slug') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>
                                    <button type="submit" class="btn bnt-primary float-right">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
