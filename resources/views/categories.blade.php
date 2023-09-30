@extends("layouts.app")

@section("content")

    <div class="categories-wrapper">
        <div class="categories-container">
            @foreach($categories as  $index => $category)
                <a href="{{route('category', $category->id)}}">
                    <div class="category-block" style="background-image: linear-gradient(to right, #000000, #FFFFFF00), url(https://wallpapercave.com/wp/wp4675437.jpg);">
                        <div>
                            @if($index==0)
                                <img src="https://www.printandcastllc.com/cdn/shop/products/engagmentring-yellowgold.png?v=1675816378&width=1445" alt="" class="category-image">
                            @else
                                <img src="{{asset("uploads/categories/".$category->categoryImage)}}" alt="" class="category-image">
                            @endif
                        </div>
                        <div>
                            <div class="category-name">



                                    {{$category->categoryName}}

                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

@endsection
