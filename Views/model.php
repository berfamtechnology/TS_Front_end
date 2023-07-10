<style>
    /*! CSS Used from: https://walletz.goshencityfarms.com/common/design2/assets/css/custom-style.css */
    .pricing-btn{background:linear-gradient(360deg, #025B87 23.08%, rgba(217, 217, 217, 0) 173.08%);background-color:linear-gradient(360deg, #025B87 23.08%, rgba(217, 217, 217, 0) 173.08%);}
    @media (min-width:768px) and (max-width:991px){
        .pricing-btn{font-size:12px;}
    }
    @media (max-width:767px){
    .model-option-btn{width:70%!important;margin-bottom:70px;}
    }
    .pricing-btn-group button{
        background: rgba(0, 70, 105, 1); 
        background-color: rgba(0, 70, 105, 1);
        font-weight: 500;
        width:fit-content;
    }
    .pricing-btn-group button.active{
        background: rgba(0, 36, 54, 1); 
        background-color: rgba(0, 36, 54, 1);
        font-weight: 600;
    }
</style>
                                                                                                                                                                                                                                                                                                                                                                                                            <!-- faq section start -->
<section class="pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center wow fadeInUp" data-wow-duration="0.5" data-wow-delay="0.3s">
                    <h2 class="section-title">Consistency Rule</h2>
                </div>
            </div>
        </div><!-- row end -->
        <div class="w-100 text-center">
            <div class="nav btn-group model-option-btn mx-auto pricing-btn-group text-center w-50">
                                <? foreach($model as $key=>$value): ?>
                                    <button type="button"  data-target="#coll-<?= $key ?>" class="btn pb-2 pt-2 text-white <?= $key==0 ? 'active' : '' ?>"  data-toggle="tab" role="tab" aria-controls="model-<?= $key+1 ?>" aria-selected="<?= $key==0 ? 'true' : 'false' ?>"><?= ucwords($value['name']) ?></button>
                                <? endforeach ?>
            </div>
        </div>
        <div class="tab-content">
                <? foreach($model as $key=>$value): ?>
                    <div class="tab-pane  fade <?= $key==0 ? 'show active' : '' ?>" id="coll-<?= $key ?>" role="tabpanel" aria-labelledby="model-<?= $key ?>-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="section-header text-center wow fadeInUp" data-wow-duration="0.5" data-wow-delay="0.3s">
                                    <div class="mt-3 text-white"><?= $value['terms'] ?></div>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="accordion custom--accordion wow fadeInUp" data-wow-duration="0.5" data-wow-delay="0.5s" id="faqAccordion-<?= $key ?>">
                            <div class="row g-3">
                                <? foreach($value['consistency'] as $nkey=>$mod): ?>
                                    <div class="col-lg-6">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="h-<?= $key.$nkey ?>">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c-<?= $key.$nkey ?>" aria-expanded="false" aria-controls="c-<?= $key.$nkey ?>">
                                                    <?= $mod->rule ?>
                                                </button>
                                            </h2>
                                            <div id="c-<?= $key.$nkey ?>" class="accordion-collapse collapse" aria-labelledby="h-<?= $key.$nkey ?>" data-bs-parent="#faqAccordion-<?= $key ?>">
                                                <div class="accordion-body">
                                                    <p><?= $mod->rule_ans ?></p>
                                                </div>
                                            </div>
                                        </div><!-- accordion-item-->
                                    </div>
                                <? endforeach ?>
                            </div>
                        </div>
                    </div>
                <? endforeach ?>
        </div>
    </div>
</section>
<!-- faq section end -->