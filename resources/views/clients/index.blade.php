@extends('welcome')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            @if(session('notification'))
                <div class="alert alert-success">
                    {{ session('notification') }}
                </div>
        @endif
        <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="/config/img/shop01.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Laptop<br>Collection</h3>
                            <a href="/store/1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="/config/img/shop03.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Mobiles<br>Collection</h3>
                            <a href="/store/5" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="/config/img/shop02.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Tablet<br>Collection</h3>
                            <a href="/store/3" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <!-- product -->
                                    @foreach ($newProduct as $item)
                                        @if($item->is_active === 1)
                                            <div class="product">
                                                <div class="product-img">
                                                    <img src="/upload/products/{{$item->image}}" alt="">
                                                    @if($item->promotion_price > 0)
                                                        <div class="product-label">
                                <span
                                    class="sale">{{number_format(100- $item->promotion_price/$item->price*100)}}%</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category">{{$item->category->name}}</p>
                                                    <h3 class="product-name"><a
                                                            href="/cart/products/{{$item->id}}">{{$item->name}}</a></h3>
                                                    <h4 class="product-price">@if($item->promotion_price > 0)
                                                            <del
                                                                class="product-old-price">{{number_format($item->price,'0')}}
                                                                đ
                                                            </del>
                                                            {{number_format($item->promotion_price,'0')}}
                                                            đ@else {{number_format($item->price,'0')}}đ@endif</h4>


                                                </div>
                                                <div class="add-to-cart">
                                                    <a href="/cart/addCart/{{$item->id}}">
                                                        <button class="add-to-cart-btn"><i
                                                                class="fa fa-shopping-cart"></i>
                                                            add to cart
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="hot-deal">

                        <h2 class="text-uppercase">hot deal this week</h2>
                        <p>New Collection Up to 50% OFF</p>
                        <a class="primary-btn cta-btn" href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Top selling</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">

                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">

                                    <!-- product -->
                                    @foreach ($hotProduct as $i)
                                        @if($item->is_active === 1)
                                            <div class="product">
                                                <div class="product-img">
                                                    <img src="/upload/products/{{$i->image }}" alt="">
                                                    @if($i->promotion_price > 0)
                                                        <div class="product-label">
                                                            <span class="sale">{{number_format(100 - $i->promotion_price/$i->price*100)}}%</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category">{{$i->category->name}}</p>
                                                    <h3 class="product-name"><a
                                                            href="/cart/products/{{$i->id}}">{{$i->name}}</a></h3>
                                                    <h4 class="product-price">@if($i->promotion_price > 0)
                                                            <del
                                                                class="product-old-price">{{number_format($i->price,'0')}}
                                                                đ
                                                            </del>
                                                            {{number_format($i->promotion_price,'0')}}
                                                            đ@else {{number_format($i->price,'0')}}đ@endif</h4>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a href="/cart/addCart/{{$i->id}}">
                                                        <button class="add-to-cart-btn"><i
                                                                class="fa fa-shopping-cart"></i>
                                                            add to cart
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                    @endif
                                @endforeach
                                <!-- /product -->
                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

@endsection

