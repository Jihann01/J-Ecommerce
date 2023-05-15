<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Edit Category
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
                                        Edit Category
                                    </div>
                                    <div class="coll-md-6">
                                        <a href="{{route('admin.categories')}}" class="btn btn-success float-end">All Categories</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" roles="alert">{{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="updateCategory">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="enter category name" wire:model="name" wire:keyup="generateSlug">
                                        @foreach($errors->get('name') as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder="enter category slug" wire:model="slug">
                                        @foreach($errors->get('slug') as $error)
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