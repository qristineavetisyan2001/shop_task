@extends("layouts.admin")

@section("content")
    <div class="d-flex gap-5 container-fluid pt-4 px-4">
        <form action="{{ route("addCategory") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="add-product-form-container">
                <div>
                    <h3>ADD CATEGORY</h3>
                </div>
                <input name="categoryName" placeholder="category name" type="text">
                <label class="image-input-label" for="category_image">+</label>
                <input class="image-input" type="file" name="category_image" id="category_image">
                <button class="add-product-button" type="submit">Add Category</button>
            </div>
        </form>


        <form action="{{ route("addProduct") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="add-product-form-container">
                <div>
                    <h3>ADD PRODUCT</h3>
                </div>
                <input name="productName" placeholder="product name" type="text">
                Product Catgory
                <select name="category_id" class="select-category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->categoryName}}</option>
                    @endforeach
                </select>
                <input name="productCount" placeholder="product count" type="number" min="1">
                <input name="productPrice" placeholder="product price" type="text">
                <textarea placeholder="product description" name="productDescription"></textarea>
                Images
                <div class="add-images-container">
                    <label class="image-input-label" for="image1">+</label>
                    <input class="image-input" type="file" name="image1" id="image1">
                    <label class="image-input-label" for="image2">+</label>
                    <input class="image-input" type="file" name="image2" id="image2">
                    <label class="image-input-label" for="image3">+</label>
                    <input class="image-input" type="file" name="image3" id="image3">
                    <label class="image-input-label" for="image4">+</label>
                    <input class="image-input" type="file" name="image4" id="image4">
                    <label class="image-input-label" for="image5">+</label>
                    <input class="image-input" type="file" name="image5" id="image5">
                </div>
                <button class="add-product-button" type="submit">Add Product</button>
            </div>
        </form>
    </div>


@endsection
