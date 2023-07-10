<!-- GALLERY DEMO OPEN -->
            <div class="demo-gallery card">
                <div class="card-header">
                    <div class="card-title">Light Gallery</div>
                </div>
                <div class="card-body">
                    <ul id="lightgallery" class="list-unstyled row">
                        {media}
                            {noparse}<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="common/assets/images/gallery/{/noparse}{img}{noparse}" data-src="common/assets/images/gallery/{/noparse}{img}{noparse}" data-sub-html="<h4>Gallery Image</h4><p> {/noparse}{name|capitalize}{noparse}</p>">
                                <a href="#">
                                    <img class="img-responsive" src="common/assets/images/gallery/{/noparse}{img}" alt="Thumb-1">
                                </a>
                            </li>
                        {/media}
                    </ul>
                </div>
            </div>
            <!-- GALLERY DEMO CLOSED -->

            <!-- PAGINATION OPEN -->
            <div class="float-right">
                <ul class="pagination mb-5">
                    <li class="page-item page-prev disabled">
                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item page-next">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </div>
            <!-- PAGINATION CLOSED -->