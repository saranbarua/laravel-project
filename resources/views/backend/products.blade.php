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
                        <!-- <h1 class="text-center mb-4">Add New Product</h1> -->
                        <form method="post" action="store.php" enctype="multipart/form-data">
                            <div class="mb-3 row">
                                <label for="inputTilte" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputTitle" name="title" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputTilte" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputTitle" name="title" value="">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputDescription" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputFile" class="col-sm-2 col-form-label">Picture:</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="inputFile" name="pictures" value="">
                                </div>
                            </div>

                            <div class="mb-3 row form-check">
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <input class="form-check-input" name="is_active" type="checkbox" value="1"
                                            id="flexCheckChecked">
                                    </div>

                                    <label class="form-check-label" for="flexCheckChecked">
                                        Is Active
                                    </label>

                                </div>
                            </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-center">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
    </section>

</x-backend.layouts.master>