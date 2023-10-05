@extends("layouts.admin")

@section("content")
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
            @foreach($categories as $category)
                <tr class="text-center align-middle">
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->categoryName}}</td>
                    <td><img width="50px" height="50px" src="{{'uploads/categories/'.$category->categoryImage}}"></td>
                    <td>{{$category->created_at}}</td>
                    <td>
                        <button><i class="fa-solid fa-pen-to-square"></i></button>
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
                        <button><i class="fa-solid fa-pen-to-square"></i></button>
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
@endsection
