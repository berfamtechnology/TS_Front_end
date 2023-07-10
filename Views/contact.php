
<!-- contact section start -->
<section class="contact-section overflow-hidden">
   <div class="map-area bg_img" style="background-image: url('common/assets/templates/basic/images/bg/map.jpg');">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-5 text-lg-start text-center">
               <h2 class="section-title text-white">Get in Touchz</h2>
               <p class="text-white-75">Amet consectetur adipisicing elit. Odit ipsa, blanditiis corrupti ut dolorem dolore consequatur quod inventore illum sapiente odio eius.</p>
            </div>
            <div class="col-lg-5 text-lg-end text-center mceNonEditable" contenteditable="false">
               <div class="map-info-box">
                  <div class="map-info rounded-3">
                     <p class="text-white-75"><strong class="fw-bold">Location : </strong>Syed Mahbub Morshed Avenue Sher-E-Bangla Nagar, Dhaka 1207 Bangladesh</p>
                     <p><a href="https://goo.gl/maps/zL1MU325Qmb9e4kX9" target="_blank" class="text--base fs--14px">See on google map</a></p>
                  </div>
                  <div class="map-icon">
                     <i class="las la-map-marker"></i>
                     <div class="map-pointer-shadow"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- map-area end -->
   <div class="contact-area pb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="contact-wrapper section--bg d-flex flex-wrap">
                  <div class="contact-wrapper__left">
                     <?= $info ?>
                     <form class="transparent-form" method="post" action="contact">
                        <div class="row">
                            <div class="col-xl-6 form-group">
                               <label>Name <sup class="text--danger">*</sup></label>
                               <div class="custom-icon-field">
                                  <i class="las la-user"></i>
                                  <input name="name" type="text" class="form--control" value="  "  required>
                               </div>
                            </div>
                            <div class="col-xl-6 form-group">
                               <label>Email <sup class="text--danger">*</sup></label>
                               <div class="custom-icon-field">
                                  <i class="las la-envelope"></i>
                                  <input name="email" type="text" class="form--control" value="  "  required>
                               </div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                           <label>Subject <sup class="text--danger">*</sup></label>
                           <div class="custom-icon-field">
                              <i class="las la-sticky-note"></i>
                              <input name="subject" type="text" class="form--control" value="" required>
                           </div>
                        </div>
                        <div class="col-12 form-group">
                           <label>Message <sup class="text--danger">*</sup></label>
                           <div class="custom-icon-field">
                              <i class="las la-envelope-square"></i>
                              <textarea name="text" wrap="off" class="form--control"></textarea>
                           </div>
                        </div>
						<!--<div class="col-md-12 form-group">
                            <? if ($enable_captcha): ?>
                                <div class="form-group text-center">
                                    <div class="g-recaptcha" data-sitekey="{captcha_public_key}" style="display: inline-block;"></div>
                                </div>
                            <? endif ?>
						</div>-->
                        <div class="col-12">
                           <button type="submit" class="btn btn--base w-100">Send Message</button>
                        </div>
                     </form>
                  </div>
                    <div class="contact-wrapper__right">
                  <div class="mb-4">
                     <h4 class="mb-4">Contact Info</h4>
                     <ul class="contact-info-list">
                        <li class="contact-info-single">
                           <i class="las la-phone"></i>                            
                           <p>+123645678915</p>
                        </li>
                        <li class="contact-info-single">
                           <i class="far fa-envelope"></i>                            
                           <p><a href="https://script.viserlab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="99eaece9e9f6ebedd9fdfcf4f6faf6f4e9f8f7e0b7faf6f4">[email&#160;protected]</a></p>
                        </li>
                        <li class="contact-info-single">
                           <i class="fas fa-map-marker-alt"></i>                            
                           <p>Syed Mahbub Morshed Avenue Sher-E-Bangla Nagar, Dhaka 1207 Bangladesh</p>
                        </li>
                     </ul>
                  </div>
               </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<!-- contact section end -->