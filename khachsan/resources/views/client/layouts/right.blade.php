<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
    <div class="side-bar p-sm-4 p-3">

        <!-- price -->
        <div class="range border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">Price</h3>
            <div class="w3l-range">
                <ul>
                    <li>
                        <a href="#">Under $1,000</a>
                    </li>
                    <li class="my-1">
                        <a href="#">$1,000 - $5,000</a>
                    </li>
                    <li>
                        <a href="#">$5,000 - $10,000</a>
                    </li>
                    <li class="my-1">
                        <a href="#">$10,000 - $20,000</a>
                    </li>
                    <li>
                        <a href="#">$20,000 $30,000</a>
                    </li>
                    <li class="mt-1">
                        <a href="#">Over $30,000</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //price -->

        <!-- reviews -->
        <div class="customer-rev border-bottom left-side py-2">
            <h3 class="agileits-sear-head mb-3">Đặt phòng</h3>
            <form   method="POST">
                @csrf

                <div class="form-group">

                    <label class="col-form-label">Ngày đến</label>
                    <input type="date" class="form-control" placeholder=" " name="checkin" >


                </div>
                <div class="form-group">
                    <label class="col-form-label">Ngày đi</label>
                    <input type="date" class="form-control" placeholder=" " name="checkout" >

                </div>
                <div class="form-group">
                    <label class="col-form-label">Số lượng người lớn</label>
                    <input type="floaf" class="form-control" placeholder=" " name="nguoilon" >

                </div>
                <div class="form-group">
                    <label class="col-form-label">Số lượng trẻ em</label>
                    <input type="fload" class="form-control" placeholder=" " name="treem" >

                </div>
                <div class="right-w3l">
                    <button type="submit" name="submit" class="form-control">Đặt ngay </button>
                </div>


            </form>
            <h3 class="agileits-sear-head mb-3">Customer Review</h3>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>5.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>4.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                        <span>3.5</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>3.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                        <span>2.5</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- //reviews -->


        <!-- best seller -->
        <div class="f-grid py-2">
            <h3 class="agileits-sear-head mb-3">Phòng được đặt nhiều nhất</h3>
            <div class="box-scroll">
                <div class="scroll">
                    <div class="row">
                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                            <img src="assets/client/images/k1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                            <a href="{{ url('2.html') }}">Phòng gia đình</a>
                            <a href="" class="price-mar mt-2">$400</a>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                            <img src="assets/client/images/k2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                            <a href="{{ url('3.html') }}">Phòng đơn</a>
                            <a href="" class="price-mar mt-2">300$</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                            <img src="assets/client/images/k3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                            <a href="{{ url('6.html') }}">Phòng ngắm biển</a>
                            <a href="" class="price-mar mt-2">200$ </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //best seller -->
    </div>
    <!-- //product right -->
a</div>
