<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Add new Product
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
                                        Add new Product
                                    </div>
                                    <div class="coll-md-6">
                                        <a href="{{route('admin.products')}}" class="btn btn-success float-end">All Products</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" roles="alert">{{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="addProduct">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="enter prodct name" wire:model="name" wire:keyup="generateSlug">
                                        @foreach($errors->get('name') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder="enter product slug" wire:model="slug">
                                        @foreach($errors->get('slug') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="short_description" class="form-label">Short description</label>
                                        <textarea class="form-control" name="short_description" id="" cols="30" placeholder="enter short_description" wire:model="short_description"></textarea>
                                        @foreach($errors->get('short_description') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="description" class="form-label"> description</label>
                                        <textarea class="form-control" name="description" id="" cols="30" placeholder="enter description" wire:model="description"></textarea>
                                        @foreach($errors->get('description') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="regular_price" class="form-label">Regular Price</label>
                                        <input type="text" name="regular_price" class="form-control" placeholder="enter cregular_price" wire:model="regular_price">
                                        @foreach($errors->get('regular_price') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    
                                    <div class="mb-3 mt-3">
                                        <label for="sale_price" class="form-label">Sale Price</label>
                                        <input type="text" name="sale_price" class="form-control" placeholder="enter sale_price" wire:model="sale_price">
                                        @foreach($errors->get('sale_price') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input type="text" name="sku" class="form-control" placeholder="enter SKU" wire:model="SKU">
                                        @foreach($errors->get('SKU') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="stock_status" class="form-label" >Stock status</label>
                                        <select name="" id="" class="form-control" wire:model="stock_status">
                                                <option value="instock">Instock</option>
                                                <option value="outofstock">Out of stock</option>
                                        </select>
                                        @foreach($errors->get('stock_status') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="featured" class="form-label">Featured</label>
                                        <select name="featured" id="" class="form-control"  wire:model="featured">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                        </select>
                                        @foreach($errors->get('featured') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="text" name="quantity" class="form-control" placeholder="enter quantity"  wire:model="quantity">
                                        @foreach($errors->get('quantity') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label" >Image</label>
                                        <input type="file" name="image" class="form-control" wire:model="image"/>
                                        @if($image)
                                            <img src="{{$image->temporaryUrl()}}" alt="" width="120">
                                        @endif
                                        @foreach($errors->get('image') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select name="category_id" id="" class="form-control" wire:model="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                        </select>
                                        @foreach($errors->get('category_id') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>

                                    <button type="submit" class="btn bnt-primary float-end">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>