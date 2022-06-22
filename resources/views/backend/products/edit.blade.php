<x-backend.layouts.master>

    <div class="container-fluid px-4">
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="PageHeader">Dashboard</x-slot>
            <li class="breadcrumb-item active">Add Product</li>
        </x-backend.layouts.elements.breadcrumb>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10">

                        @if(session('status'))
                        <h6 class="alert alert-success">{{ session('status')}}</h6>
                        @endif

                        <!-- <h1 class="text-center mb-4">Add New Product</h1> -->
                        <form method="post" action="{{ url('update-product/'.$product->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="inputName" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" name="product_name"
                                        value="{{$product->product_name}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputCategoryName" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputTitle" name="category_name"
                                        value="{{$product->category_name}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputBrandName" class="col-sm-2 col-form-label">Brand Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputBrandName" name="brand_name"
                                        value="{{$product->brand_name}}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputDescription" name="description"
                                        rows="3">{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputFile" class="col-sm-2 col-form-label">Picture:</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="inputFile" name="image" value="">
                                    <img src="{{URL::asset('/uploads/products/'.$product->image)}}" height="70"
                                        width="70">
                                </div>
                            </div>
                            <!-- <div class="mb-3 row">
                                <label for="inputFile" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Unpublished
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-secondary btn-block">Update
                                    Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

</x-backend.layouts.master>