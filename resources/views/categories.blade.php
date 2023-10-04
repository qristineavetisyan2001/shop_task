@extends("layouts.app")

@section("content")
    <link rel="stylesheet" href="{{asset("css/categories_style.css")}}">
    <div class="categories-wrapper">
        <div class="categories-container">
            @foreach($categories as  $index => $category)
                <div class="category-block" style="background-image: {{$index%2===0?'linear-gradient(to right, #000000, #FFFFFF00), url(https://wallpapercave.com/wp/wp4675437.jpg)':'linear-gradient(to right,#FFFFFF00, #000000), url(https://wallpapercave.com/wp/wp4675437.jpg)'}};">
                    <div>
                        @if($index==0)
                            <a href="{{route('category', $category->id)}}">
                                <img src="{{asset("uploads/categories/".$category->categoryImage)}}" alt="" class="category-image">
                            <a/>
                        @else
                             <a href="{{route('category', $category->id)}}">
                                 <img src="{{asset("uploads/categories/".$category->categoryImage)}}" alt=""
                                      class="category-image">
                             </a>
                        @endif
                    </div>
                    <div>
                        <div class="category-name">
                            <a href="{{route('category', $category->id)}}">
                                {{$category->categoryName}}
                            </a>
                        </div>
                    </div>
                </div>
    @endforeach

@endsection
