<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Product</h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <!-- product -->
                                @foreach ($product as $item)
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{$item->image}}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">{{$item->name}}</a></h3>
                                            <h4 class="product-price">{{$item->price}}đ</h4>
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
                                @endforeach
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
