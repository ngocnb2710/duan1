<div class="section">
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="shop-wrapper col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="/config/img/b81058cf8ea78d2e4aa625cf41cb9d695f5f9f88_ubisoft.png" alt="">
                    </div>
                </div>
            </div>

            <div class="shop-wrapper col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="/config/img/51cf584a7ebb6db118a77e3de7a173ba6c62bd08_botbanner-origin.png" alt="">
                    </div>
                </div>
            </div>

            <div class="shop-wrapper col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="/config/img/90368d32aca1bb1a7294d1fc4c0dd834b5cc8c5e_botbanner-blizzard.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">All Products</h3>

                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                @foreach($product as $item)
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{$item->image}}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{$item->category->name}}</p>
                                            <h3 class="product-name"><a
                                                    href="#">{{$item->product_name}}</a></h3>
                                            <h4 class="product-price">{{$item->price}} đ</h4>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#">
                                                <button class="add-to-cart-btn"><i
                                                        class="fa fa-shopping-cart"></i>
                                                    add to cart
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
