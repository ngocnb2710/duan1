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
