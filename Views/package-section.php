
        <section class="border border-left-0 border-right-0 border-top-0  text-center mceNonEditable"  style="background: rgba(2, 91, 135, 1);" id="models_"> 
            <div class="container  pb-5 pt-3"> 
                <section>
                    <div class="container pl-0 pl-md-auto pr-0 pr-md-auto"> 
                        <section class="mt-5">
                            <h2 class="h1 mb-3 ml-auto model-heading mr-auto text-white w-50" style="font-weight: 700;">Our Models &amp; Pricing</h2>
                            <h3 class="community-section1-text h5 m-auto model-description text-white text-left w-75" style="font-weight: 400;">Traders Support Funds offers multiple models to its traders , so they can enjoy the benefits of trading in every way possible. You can choose model/package according to your trading expertise.</h3>
                            <?= $products ?>     
                        </section>                         
                    </div>
                </section>                 
            </div>             
        </section>                                  
        <section class="pt-md-5 text-center bg-light model-section mt-5 mt-md-0 mceNonEditable"> 
            <div class="container  pt-5"> 
                <div class="ml-lg-5 mr-lg-5  pl-lg-3 pr-lg-3 row"> 
                    <? foreach($meta as $key=>$value): ?>
                        <? if(strtolower($value['name']) == 'general') continue ?>
                        <div class="col-12 col-md-6 pb-3 pt-3"> 
                            <div class="h-100 pb-5 pl-4 pr-4 pt-5 shadow">
                                <h4 class="community-section1-heading h3 model-head1 text-left d-none" style="color: rgba(2, 91, 135, 1);">Funding Model-<?= $key+1 ?></h4>
                                <h4 class="font-weight-bold h1 model-head2 model-heading text-body text-left"><?= $value['name'] ?> :</h4> 
                                <h3 class="community-section1-text h5 mb-5 model-body mt-4 text-body text-left" style="font-weight: 400; line-height: 30px;"><?= $value['description'] ?></h3>
                                <a href="#" class="float-left h5 mb-5 mt-2 text-warning d-none" style="text-decoration: underline; line-height: 32.2px; font-weight: 600;">Learn More</a>
                            </div>
                        </div>
                    <? endforeach ?>                                            
                </div>                                         
            </div>                                     
        </section>