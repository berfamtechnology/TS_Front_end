
						            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    {item}
                        <div class="card productdesc">
                            <div class="card-body">
                                <div class="productdec text-center">
                                    <div class="bg-light-gray p-6 text-center">
                                        <img alt="Product" src="common/assets/images/products/{image}" class="border p-2">
                                    </div>
                                </div>
                                <div class="text-center mt-5 pb-5 border-bottom">
                                    <a href="user/products/cart/{id}" class="btn btn-secondary"><i class="ti-shopping-cart"> </i> Buy Now</a>
                                </div>
    
                                <div class="mt-4 mb-4">
                                    <h3>{name|title} </h3>
                                    <h5 class="mb-3 mt-2">Description</h5>
                                    <p></p>{! description_long !}</p>
                                </div>
                            </div>
                        </div>
                    {/item}
                </div><!-- COL-END -->
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title"> Features</div>
                        </div>
                        <div class="card-body text-center">
                            {item}
                                <div class="form-group mt-3">
                                    <input type="text" value="{feature1}" class="form-control" readonly disabled>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" value="{feature2}" class="form-control" readonly disabled>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" value="{feature3}" class="form-control" readonly disabled>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" value="{feature4}" class="form-control" readonly disabled>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" value="{feature5}" class="form-control" readonly disabled>
                                </div>
                           {/item}
                        </div>
                    </div>
                    <div class="card productdesc-1">
                        <div class="card-body bg_gray">
                            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                                <div class="carousel-inner ">
                                    {products}
                                        <div class="carousel-item">
                                            <img class="pro_img" alt="Product" src="products/{image}">
                                            <div class="carouselproduct mt-4 text-center">
                                                <h5 class=""><a href="product-details.html">{name|title}</a></h5>
                                                <ul class="product_price list-unstyled">
                                                    <li class="new_price">{price}</li>
                                                </ul>
                                                <div class="mb-3 mt-2 text-warning">
                                                    <i class=" fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="user/products/cart/{id}" class="btn btn-primary"><i class="ti-shopping-cart"></i> Buy Now</a>
                                            </div>
                                        </div>
                                   {/products}
                                    <div class="carousel-item active">
                                        <img class="pro_img " alt="Product" src="common/assets/images/logo/logo.png">
                                        <div class="carouselproduct mt-4 text-center">
                                            <h5 class=""><a href="product-details.html">Products You may Like</a></h5>
                                            <ul class="product_price list-unstyled">
                                            </ul>
                                            <div class="mb-3 mt-3 text-warning">
                                                <i class=" fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a class="btn btn-secondary"><i class="ti-shopping-cart"></i> Other Products</a>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev product-carousel-control" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next product-carousel-control" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->