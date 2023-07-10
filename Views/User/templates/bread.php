            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">{page_title|title}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active font-weight-bold" aria-current="page">{page|capitalize}</li>
                    </ol>
                </div>
                <div class="ml-auto pageheader-btn">
                    <a href="user/plans" class="btn btn-primary btn-icon text-white mr-2">
                        <span>
                            <i class="fe fe-shopping-cart"></i>
                        </span> Add Funding Package
                    </a>
                    {if $allow_deposit == 1}
                        <a  data-toggle="modal" data-target="#payModal" class="btn btn-secondary btn-icon text-white">
                            <span>
                                <i class="fe fe-plus"></i>
                            </span> Add Funds
                        </a>
                    {endif}
                </div>
            </div>
            <!-- PAGE-HEADER END -->
              <!-- ROW-1 -->
              {if $enable_jumbotron == 1}
                <div class="row" id="jumbotron" style="display:none;">
                 <div class="col-md-12">
                    <div class="card  banner">
                       <div class="card-body">
                          <div class="row">
                             <div class="col-xl-3 col-lg-2 text-center">
                                <img src="{jumbotron_img}" alt="img" class="w-95">
                             </div>
                             <div class="col-xl-9 col-lg-10 pl-lg-0">
                                <div class="row">
                                   <div class="col-xl-7 col-lg-6">
                                      <div class="text-left text-white mt-xl-4">
                                         <h3 class="font-weight-semibold">{jumbotron_heading}</h3>
                                         <h4 class="font-weight-normal">{jumbotron_body_1}</h4>
                                         <p class="mb-lg-0 text-white-50">{jumbotron_body_2}</p>
                                      </div>
                                   </div>
                                   <div class="col-xl-5 col-lg-6 text-lg-center mt-xl-4">
                                      <h5 class="font-weight-semibold mb-1 text-white">{jumbotron_sub-heading1}</h5>
                                      <h2 class="display-2 mb-3 number-font text-white">{jumbotron_sub-heading2}</h2>
                                      <div class="btn-list mb-xl-0">
                                         <a href="{jumbotron_btn1-link}" class="btn btn-dark mb-xl-0">{jumbotron_btn1}</a>
                                         <a href="{jumbotron_btn2-link}" onclick="(()=>{$('#jumbotron').hide(); sessionStorage['jumbotron'] = true;})()" class="btn btn-white mb-xl-0" id="skip">{jumbotron_btn2}</a>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              {noparse}<script>
                  if(!sessionStorage['jumbotron'])document.getElementById('jumbotron').style.display = "block";
              </script>{/noparse}
              {endif}
              <!-- ROW-1 End-->