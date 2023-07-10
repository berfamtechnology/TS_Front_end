
        <section class="border border-left-0 border-right-0 border-top-0  text-center mceNonEditable" id="faq_">
            <div class="container mt-3 pb-5 pt-5"> 
                <section>
                    <h2 class="h1 mb-3 text-body text-left" style="font-weight: 700;">FAQS.</h2>
                    <div class="nav btn-group faq-cat-btns text-left mt-4 faq-btn-group" role="group" aria-label="Basic example" style="z-index:2;">
                            <? foreach($meta as $key=>$value): ?>
                                <button type="button"  data-target="#faq-<?= $key ?>" class="btn pb-2 pt-2 text-white <?= $key==0 ? 'active' : '' ?>"  data-toggle="tab" role="tab" aria-controls="faq-<?= $key+1 ?>" aria-selected="<?= $key==0 ? 'true' : 'false' ?>"><?= ucwords($value['name']) ?></button>
                            <? endforeach ?>
                    </div>
                </section>
                <div class="text-right">
                    <img src="common/front-end/assets/img/Man%20thinking%20about%20an%20important%20question.png" width="250px">
                </div>

                <div class="tab-content" style="margin-top: -50px;">
                    <? foreach($meta as $key=>$value): ?>
                        <div class="tab-pane  fade <?= $key==0 ? 'show active' : '' ?>" id="faq-<?= $key ?>" role="tabpanel" aria-labelledby="faq-<?= $key ?>-tab">
                            <div class="simple-scroll" style="position: relative;" data-simplebar data-simplebar-auto-hide="false">
                                <div class="flex-md-nowrap flex-nowrap pt-2 row">
                                    <div class="col-12 col-md-4">
                                        <div style="background: rgba(2, 91, 135, 0.07); background-color: rgba(2, 91, 135, 0.07);" class="h-100">
                                            <h4 style="background: rgba(0, 53, 80, 1); background-color: rgba(0, 53, 80, 1);" class="mr-auto pb-2 pl-auto pr-3 pt-2 text-white">Trading Rules</h4>
                                            <div id="panels1" role="tablist"> 
                                                <? foreach($value['faq_rules'] as $index=>$item): ?>
                                                    <div class="card"> 
                                                        <div class="card-header faq-item mt-0" role="tab">
                                                            <h5 class="mb-0"> <a class="collapsed h6 text-body" data-toggle="collapse" href="#collapse-r-<?= $key ?>-<?= $index ?>" aria-expanded="false" aria-controls="collapse<?= $index ?>"><?= $item->ques ?><i class='fa-angle-down fas pt-1' style="color: rgba(0, 150, 224, 1);"></i></a></h5> 
                                                        </div>                                         
                                                        <div id="collapse-r-<?= $key ?>-<?= $index ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?= $index ?>" data-parent="#panels1"> 
                                                            <div class="card-body"><?= $item->ans ?></div>                                             
                                                        </div>                                         
                                                    </div>  
                                                <? endforeach ?>                                    
                                            </div>
                                            <a href="#" class="d-flex justify-content-center mb-3 mt-3 text-warning invisible" style="text-decoration: underline; line-height: 32.2px;">See More</a>
                                        </div>                             
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div style="background: rgba(2, 91, 135, 0.07); background-color: rgba(2, 91, 135, 0.07);" class="h-100">
                                            <h4 style="background: rgba(0, 53, 80, 1); background-color: rgba(0, 53, 80, 1);" class="mr-auto pb-2 pl-auto pr-3 pt-2 text-white">Capital Growth</h4>
                                            <div id="panels2" role="tablist"> 
                                                <? foreach($value['faq_growth'] as $index=>$item): ?>
                                                    <div class="card"> 
                                                        <div class="card-header faq-item mt-0" role="tab">
                                                            <h5 class="mb-0"> <a class="collapsed h6 text-body" data-toggle="collapse" href="#collapse-g-<?= $key ?>-<?= $index ?>" aria-expanded="false" aria-controls="collapse<?= $index ?>"><?= $item->ques ?><i class='fa-angle-down fas pt-1' style="color: rgba(0, 150, 224, 1);"></i></a></h5> 
                                                        </div>                                         
                                                        <div id="collapse-g-<?= $key ?>-<?= $index ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?= $index ?>" data-parent="#panels2"> 
                                                            <div class="card-body"><?= $item->ans ?></div>                                             
                                                        </div>                                         
                                                    </div>  
                                                <? endforeach ?>                                       
                                            </div>
                                            <a href="#" class="d-flex justify-content-center mb-3 mt-3 text-warning invisible" style="text-decoration: underline; line-height: 32.2px;">See More</a>
                                        </div>                             
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div style="background: rgba(2, 91, 135, 0.07); background-color: rgba(2, 91, 135, 0.07);" class="h-100">
                                            <h4 style="background: rgba(0, 53, 80, 1); background-color: rgba(0, 53, 80, 1);" class="mr-auto pb-2 pl-auto pr-3 pt-2 text-white">Withdrawal</h4>
                                            <div id="panels3" role="tablist"> 
                                                <? foreach($value['faq_withdrawal'] as $index=>$item): ?>
                                                    <div class="card"> 
                                                        <div class="card-header faq-item mt-0" role="tab">
                                                            <h5 class="mb-0"> <a class="collapsed h6 text-body" data-toggle="collapse" href="#collapse-w-<?= $key ?>-<?= $index ?>" aria-expanded="false" aria-controls="collapse<?= $index ?>"><?= $item->ques ?><i class='fa-angle-down fas pt-1' style="color: rgba(0, 150, 224, 1);"></i></a></h5> 
                                                        </div>                                         
                                                        <div id="collapse-w-<?= $key ?>-<?= $index ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?= $index ?>" data-parent="#panels3"> 
                                                            <div class="card-body"><?= $item->ans ?></div>                                             
                                                        </div>                                         
                                                    </div>  
                                                <? endforeach ?>                                    
                                            </div>
                                            <a href="#" class="d-flex justify-content-center mb-3 mt-3 text-warning invisible" style="text-decoration: underline; line-height: 32.2px;">See More</a>
                                        </div>                             
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endforeach ?>
                </div>
                <section id="contact_" class="my-5 ">
                    <div class="container"> 
                        <div class="col-md-9 col-xl-8 ml-auto mr-auto"> 
                            <form class=""> 
                                <div class="align-items-center input-group overflow-hidden p-1" style="border: 1px inset rgba(0, 0, 0, 0.1); box-shadow: 10px 10px 4px rgba(2, 91, 135, 0.19);"> 
                                    <input type="text" class="border-0 form-control pb-2 pl-3 pr-3 pt-2" placeholder="YOUR EMAIL HERE !" aria-label="Recipient's username" aria-describedby="button-addon2"> 
                                    <div class="input-group-append ml-1"> 
                                        <button class="btn h4 mr-3 pb-2 pl-4 pr-4 pt-2 text-white" type="button" id="button-addon2" style="background: rgba(2, 91, 135, 1); background-color: rgba(2, 91, 135, 1);">ASK NOW</button>                                         
                                    </div>                                     
                                </div>                                 
                            </form>                             
                        </div>                         
                    </div>                     
                </section>
            </div>
        </section>