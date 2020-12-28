<div class="header-bot">
    <div class="container">
        <div class="row header-bot_inner_wthreeinfo_header_mid">
            <!-- logo -->
            <div class="col-md-3 logo_agile">
                <h1 class="text-center">
                    <a href="{{ url('home') }}" class="font-weight-bold font-italic">
                       Hằng Lê <br> Hotel
                    </a>
                </h1>
            </div>
            <!-- //logo -->
            <!-- header-bot -->
            <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                <div class="row">
                    <!-- search -->
                    <div class="col-10 agileits_search">
                        <form class="form-inline" action="{{ 'search' }}" method="post">
                            @csrf
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search" required>
                            <button class="btn my-2 my-sm-0" type="submit" name="submit">Tìm kiếm</button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- cart details -->
                    <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                        <div class="wthreecartaits wthreecartaits2 cart cart box_1">


                                <a @if(Auth::check()) href ="{{ url('giohang') }}  " @else href="" data-toggle="modal" data-target="#exampleModal"  @endif title="Bạn đã đặt {{ Cart::count() }} phòng" class = "btn w3view-cart">
                                    <i class="fas fa-cart-arrow-down"></i>
                                </a>

                        </div>
                    </div>
                    <!-- //cart details -->
                </div>
            </div>
        </div>
    </div>
</div>
