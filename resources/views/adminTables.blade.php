@extends("layouts.admin")

@section("content")

    <style>
        .modal-wrapper {
            display: none;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            background-color: rgb(0, 0, 0, 0.5);
        }

        .image-input-label{
            background-size: cover;
            background-position: center center;
        }
    </style>

    <div class="table_container p-3 m-5 border border-light">
        <table class="table">
            <thead>
            <tr class="text-center align-middle">
                <th scope="col">id</th>
                <th scope="col">Category Name</th>
                <th scope="col">Category Image</th>
                <th scope="col">Insert Date</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $index=>$category)
                <tr class="text-center align-middle">
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->categoryName}}</td>
                    <td><img width="50px" height="50px" src="{{'uploads/categories/'.$category->categoryImage}}"></td>
                    <td>{{$category->created_at}}</td>
                    <td>
                        <button id="{{'editModalButton'.$category->id}}" type="button" class="btn btn-primary editModalButton"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fa-solid fa-pen-to-square"></i></button>
                    </td>
                    <td>
                        <form action="{{route('deleteCategory', $category->id)}}">
                            @csrf
                            <button type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="add-product-form-container">
                            <div>
                                <h3 class="">EDIT CATEGORY</h3>
                            </div>
                            <input id="editCategoryNameInput" name="categoryName" class="w-100"
                                   placeholder="category name" type="text">
                            <label class="image-input-label" for="category_image"
                                   id="editCategoryImageInput">+</label>
                            <input class="image-input" type="file" name="category_image" id="category_image">
                        </div>
                        <div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- finish Modal -->















    <div class="table_container p-5 m-5 border border-light">
        <table class="table">
            <thead>
            <tr class="text-center align-middle">
                <th scope="col">id</th>
                <th scope="col">Category Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Product Count</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Code</th>
                <th scope="col">Insert Date</th>
                <th scope="col">Images</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr class="text-center align-middle">
                    <th scope="row">{{$product->id}}</th>
                    <th>{{$product->category_id}}</th>
                    <td>{{$product->productName}}</td>
                    <td>{{$product->productDescription}}</td>
                    <td>{{$product->productCount}}</td>
                    <td>{{$product->productPrice}}$</td>
                    <td>{{$product->productCode}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>
                        @foreach($product->images as $image)
                            <img width="50px" height="50px" src="{{'uploads/content/'.$image->productImage}}">
                        @endforeach
                    </td>
                    <td>
                        <button id="{{'editModalButtonPr'.$product->id}}" type="button" class="btn btn-primary editModalButtonPr"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-pen-to-square"></i></button>
                    </td>
                    <td>
                        <form action="{{route('deleteProduct', $product->id)}}">
                            @csrf
                            <button type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForms" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="add-product-form-container">
                            <div>
                                <h3>EDIT PRODUCT</h3>
                            </div>
                            <input id="editProductNameInput" name="productName" placeholder="product name" type="text" class="w-100">
                            <input  id="editProductCountInput" name="productCount" placeholder="product count" type="number" min="1" class="w-100">
                            <input id="editProductPriceInput" name="productPrice" placeholder="product price" type="text" class="w-100">
                            <textarea id="editProductDescriptionInput" placeholder="product description" name="productDescription" class="w-100"></textarea>
                            Images
                            <div class="add-images-container">
                                <label id="editProductImage1" class="image-input-label" for="image1">+</label>
                                <input class="image-input" type="file" name="image1" id="image1">
                                <label id="editProductImage2" class="image-input-label" for="image2">+</label>
                                <input class="image-input" type="file" name="image2" id="image2">
                                <label id="editProductImage3" class="image-input-label" for="image3">+</label>
                                <input class="image-input" type="file" name="image3" id="image3">
                                <label id="editProductImage4" class="image-input-label" for="image4">+</label>
                                <input class="image-input" type="file" name="image4" id="image4">
                                <label id="editProductImage5" class="image-input-label" for="image5">+</label>
                                <input class="image-input" type="file" name="image5" id="image5">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- finish Modal -->

    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>

        @foreach($categories as $category)
            $('{{'#editModalButton'.$category->id}}').on('click', () => {
                $('#editCategoryNameInput').val('{{$category->categoryName}}');
                $('#editCategoryImageInput').css('background-image','url({{asset('uploads/categories/'.$category->categoryImage)}})');

                $("#editForm").attr('action', '{{route('editCategory', $category->id)}}')
            })
        @endforeach



        @foreach($products as $product)
        $('{{'#editModalButtonPr'.$product->id}}').on('click', () => {
            console.log('{{$product->id}}')
            $('#editProductNameInput').val('{{$product->productName}}');
            $('#editProductCountInput').val('{{$product->productCount}}');
            $('#editProductPriceInput').val('{{$product->productPrice}}');
            $('#editProductDescriptionInput').val('{{$product->productDescription}}');

            @foreach($product->images as $index => $image)
                var elementId = '#editProductImage{{$index+1}}';
                $(elementId).css('background-image','url("{{ asset('uploads/content/'.$image->productImage)}}")');
            @endforeach

            $("#editForms").attr('action', '{{route('editProduct', $product->id)}}');
        })


        @endforeach


    </script>

@endsection
