 <!-- ROW-1 OPEN -->
            <div class="row row-cards">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="row card-body p-2">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ...">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary" type="button">Search</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">{noparse}{/noparse}
                        {products}
                            <div class="col-md-4 col-xl-3">
                                <div class="card item-card">
                                    <div class="product-grid6 card-body">
                                        <div class="product-image6">
                                            <a href="user/products/details/{id}">
                                                <img class="img-fluid" src="products/{image}" alt="img" width="210px" height="200px">
                                            </a>
                                        </div>
                                        <div class="product-content text-center">
                                            <div class="text-center mb-2 text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <h4 class="title"><a href="">{name|title}</a></h4>
                                            <div class="price number-font1">{price}</div>
                                        </div>
                                        <ul class="icons">
                                            <li><a href="user/products/details/{id}" data-tip="View Details"><i class="fa fa-info-circle"></i></a></li>
                                            <li><a href="user/products/cart/{id}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        {/products}
                    </div>
                    <div class="mb-5">
                        <div class="float-right">
                            <ul class="pagination ">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" tabindex="-1">Prev</a>
                                </li>
                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">4</a></li>
                                <li class="page-item"><a class="page-link">5</a></li>
                                <li class="page-item page-next">
                                    <a class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->