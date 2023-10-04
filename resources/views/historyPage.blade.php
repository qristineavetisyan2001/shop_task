@extends("layouts.app")

@section("content")
    <link rel="stylesheet" href="{{asset("css/historyPage_style.css")}}">
    <div class="history-wrapper">
        <div class="history-container">
            <div class="history-title">History</div>
            <div class="history-products">
                <table class="table">
                    <tr>
                        <th class="th">PRODUCT IMAGE</th>
                        <th class="th">PRODUCT NAME</th>
                        <th class="th"> SOLD PRODUCT COUNT</th>
                        <th class="th">PRODUCT CREATED_AT</th>
                        <th class="th">PRODUCT TOTAL PRICE</th>
                    </tr>
                    @foreach($soldProducts as $soldProduct)
                        <tr>
                            <td class="td"><img class="history-product-image" src="{{asset('uploads/content/'.$soldProduct->productImage)}}" /></td>
                            <td class="td">{{$soldProduct->productName}}</td>
                            <td class="td">{{$soldProduct->soldProductCount}}</td>
                            <td class="td">{{$soldProduct->created_at}}</td>
                            <td class="td">{{$soldProduct->productPrice * $soldProduct->soldProductCount}}$</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
