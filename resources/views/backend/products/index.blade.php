<x-backend.layouts.master>
    <x-slot name="PageTitle">Products</x-slot>
    <main>
        <div class=" container-fluid px-4">
            <x-backend.layouts.elements.breadcrumb>
                <x-slot name="PageHeader">Product Manage</x-slot>
                <li class="breadcrumb-item active">Dashboard</li>
            </x-backend.layouts.elements.breadcrumb>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Category Name</th>
                                <th>Brand Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <img src="{{URL::asset('/uploads/products/'.$product->image)}}" height="100"
                                        width="100">
                                </td>
                                <td>{{ $product->status }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{url('edit-product/'.$product->id)}}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{url('delete-product/'.$product->id)}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-backend.layouts.master>