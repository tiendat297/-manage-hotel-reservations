@include('client\layouts\header-top')
@include('client\layouts\header-botom')
@include('client\layouts\menu')
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.html">Home</a>
                    <i>|</i>
                </li>
                <li>Chi tiết phòng</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->



@foreach ( $ct as $chitiet )


<div class="banner-bootom-w3-agileits py-5">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>C</span>hi tiết
            <span>P</span>phòng</h3>
        <!-- //tittle heading -->
        <div class="row">
            <div class="col-lg-5 col-md-8 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="assets/client/images/{{ $chitiet ->phongkhach }}">
                                <div class="thumb-image">
                                    <img src="assets/client/images/{{ $chitiet ->phongkhach }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
                            </li>
                            <li data-thumb="assets/client/images/{{ $chitiet ->phongngu }}">
                                <div class="thumb-image">
                                    <img src="assets/client/images/{{ $chitiet ->phongngu }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
                            </li>
                            <li data-thumb="assets/client/images/{{ $chitiet ->phongtam }}">
                                <div class="thumb-image">
                                    <img src="assets/client/images/{{ $chitiet ->phongtam }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        @endforeach

@foreach ($ct as $chitiet)




            <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                    <h2 class="mb-3">{{ $chitiet -> tenphong }}</h2>
                    <p class="mb-3">
                    <label>Giá: </label>
                    <span class="item_price">{{ $chitiet -> gia }} $</span>
                    <del class="mx-2 font-weight-light">600$</del>
                    <label>Free delivery</label><br>

                       <label>Diện tích: </label><span class="item_price"> {{ $chitiet -> dientich }} m</span><br>
                       <label>Số lượng Max: </label><span class="item_price"> {{ $chitiet -> SLmax }} people</span><br>
                       <label>Mô tả: {{ $chitiet -> mota }}  </label>


                </p>
                <div class="single-infoagile">
                    <ul>
                            <li class="mb-3">
                            Phòng thực tế giống 100% ảnh
                        </li>

                    </ul>
                </div>
                <div class="product-single-w3l">
                        <p class="my-3">
                                <i class="far fa-hand-point-right mr-2"></i>
                        Các thiết bị có trong phòng
                       </p>
                       @foreach ($tb as $thietbi)


                    <ul>
                            <li class="mb-1">
                            {{ $thietbi -> sl }} {{ $thietbi -> tenthietbi }}
                        </li>

                    </ul>
                    @endforeach
                    <p class="my-sm-4 my-3">
                            <i ></i>Các thiết bị trong phòng đều được nhập ngoại
                    </p>
                </div>
                <div class="occasion-cart">

                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">

                            <a @if(Auth::check()) href="{{ url('addcart',['id' => $chitiet->id]) }}" @else href="#" data-toggle="modal" data-target="#exampleModal"  @endif  >Đặt phòng ngay</a>
                        </div>


                </div>

            </div>
            @endforeach

        </div>

    </div>
</div>

<!-- //Single Page -->
@include('client.layouts.duoi')


