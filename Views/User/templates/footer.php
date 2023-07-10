			
	
					</div>
				</div>
				<!-- CONTAINER END -->
			</div>
			<!-- FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center text-light">
							Copyright &copy; {datez|date(Y)} <a href="#" class="text-white">{site_name|title}</a>. -Powered by <a href="#" class="text-white">Berfam Capitals</a> Limited
						</div>
					</div>
				</div>
			</footer>
			</div>
			<!-- FOOTER END -->		
		</div>		
		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="user/assets/js/jquery-3.4.1.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="user/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="user/assets/plugins/bootstrap/js/popper.min.js"></script>
            <!-- SPARKLINE JS-->
            <script src="user/assets/js/jquery.sparkline.min.js"></script>

            <!-- CHART-CIRCLE JS-->
            <script src="user/assets/js/circle-progress.min.js"></script>

            <!-- RATING STARJS -->
            <script src="user/assets/plugins/rating/jquery.rating-stars.js"></script>

            <!-- EVA-ICONS JS -->
            <script src="user/assets/iconfonts/eva.min.js"></script>
            
            <!-- INPUT MASK JS-->
            <script src="user/assets/plugins/input-mask/jquery.mask.min.js"></script>
          <!-- SIDE-MENU JS-->
          <script src="user/assets/plugins/sidemenu/sidemenu.js"></script>
          
          <!-- PERFECT SCROLL BAR js-->
          <script src="user/assets/plugins/p-scroll/perfect-scrollbar.min.js"></script>
          <script src="user/assets/plugins/sidemenu/sidemenu-scroll.js"></script>

		<!-- CUSTOM SCROLLBAR JS-->
		<script src="user/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- STICKY JS -->
		<script src="user/assets/js/stiky.js"></script>

				<!-- INTERNAL  DATA TABLE JS-->
		<script src="user/assets/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="user/assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="user/assets/plugins/datatable/dataTables.responsive.min.js"></script>
        {if $page !== 'metrix'}
            <script src="user/assets/plugins/datatable/fileexport/dataTables.buttons.min.js"></script>
            <script src="user/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js"></script>
            <script src="user/assets/plugins/datatable/fileexport/jszip.min.js"></script>
            <script src="user/assets/plugins/datatable/fileexport/pdfmake.min.js"></script>
            <script src="user/assets/plugins/datatable/fileexport/vfs_fonts.js"></script>
            <script src="user/assets/plugins/datatable/fileexport/buttons.html5.min.js"></script>
            <script src="user/assets/plugins/datatable/fileexport/buttons.print.min.js"></script>
            <script src="user/assets/plugins/datatable/fileexport/buttons.colVis.min.js"></script>
        {endif}
		<script src="user/assets/plugins/datatable/datatable.js"></script>
        {if $page !== 'metrix'}
            <!-- INTERNAL  FILE UPLOADES JS -->
            <script src="user/assets/plugins/fileuploads/js/fileupload.js"></script>
            <script src="user/assets/plugins/fileuploads/js/file-upload.js"></script>

            <!-- INTERNAL SELECT2 JS -->
            <script src="user/assets/plugins/select2/select2.full.min.js"></script>
        {endif}

        {if $page == 'mail_compose'}
            <!-- INTERNAL   WYSIWYG Editor JS -->
    		<script src="user/assets/plugins/wysiwyag/jquery.richtext.js"></script>
    		<script src="user/assets/plugins/wysiwyag/wysiwyag.js"></script>
    		<script>
    		    document.addEventListener('input', updateValue);
                
                function updateValue(e) {
                  document.getElementById('mailbody').value = $('.richText-editor').html();
                }
            </script>
		{endif}
		
		<!-- SIDEBAR JS -->
		
		<script src="user/assets/plugins/sidebar/sidebar.js"></script>
		
		<!-- CUSTOM JS -->
		<script src="user/assets/js/custom.js"></script>
		
		<!-- Switcher JS -->
		<script src="user/assets/switcher/js/switcher.js"></script>	
		{if $page !== 'metrix'}
            <!--  BEGIN CUSTOM SCRIPTS FILE  -->
            <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>
            <script src="user/assets/plugins/custom-clipboard.js"></script>
        {endif}

            <!-- INTERNAL SWEET-ALERT JS -->
            <script src="user/assets/plugins/sweet-alert/sweetalert.min.js"></script>
            <script src="user/assets/js/sweet-alert.js"></script>
        
        {if $page == 'metrix'}
            <!-- INTERNAL TABS JS -->
            <script src="user/assets/plugins/tabs/jquery.multipurpose_tabcontent.js"></script>
            <script src="user/assets/plugins/tabs/tab-content.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/easytimer@1.1.3/src/easytimer.min.js"></script>
            <!-- TEMPLATING -->
            
    		<!-- INTERNAL APEXCHART JS -->
    		<!-- <script src="user/assets/js/apexcharts.js"></script> -->
            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            <script>
                const metData = JSON.parse({! metrixChartData !});
                const metCount = { metrixChartCount };
            </script>
    		<script src="user/assets/js/index1.js"></script>
        {endif}
        {if $page == 'plans'}
            <script src="common/design2/assets/js/pricing-slider.js"></script>
        {endif}
        {if $page == 'cart'}  
            {noparse}
                <script>
                    $(document).ready(function () {
                        $("#voucherCode").on('input',function (event) {
                            
                            $("#Tot").html($("#subTot").html());
                            
                            if($("#voucherCode").val() == "")$("#vresp").html('');
                            else{

                                    let formData = {
                                        vcode: $("#voucherCode").val(),
                                        id: $("#vid").val(),
                                    };
                                
                                    $.post("user/checkvoucher",formData).done(function (data) {
                                        data = JSON.parse(data);
                                        if (!data.success) {
                                            $("#vresp").html(
                                            '<div class="alert alert-danger mt-2 p-2">'+data.error+'</div>'
                                            );
                                        }else {
                                            $("#vresp").html(
                                            '<div class="alert alert-success mt-2 p-2">' + data.message + "</div>"
                                            );
                                            let sub_total = $("#subTot").html().replace(/[^0-9.]/g, '');
                                            let unit = $("#subTot").html().replace(/\d+./g, '');
                                            let discount = parseFloat(data.message);
                                            discount= Math.abs(discount);
                                            if(data.message.includes('%')){
                                                let new_total = sub_total - ((discount/100) * sub_total);
                                                new_total = parseFloat(new_total).toFixed(2);
                                                $("#Tot").html(unit+new_total);
                                            }else{
                                                let new_total = sub_total-discount;
                                                new_total = parseFloat(new_total).toFixed(2);
                                                $("#Tot").html(unit+new_total);
                                            }
                                        }
                                        
                                    })
                                    .fail(function (data) {
                                        $("#vresp").html(
                                        '<div class="alert alert-danger mt-2 p-2">Could not reach server, please try again later.</div>'
                                        );
                                    });
                            }
                        
                            event.preventDefault();
                        });
                    });
                </script>
            {/noparse}
        {endif}
		<script>
            {noparse}
                jQuery(document).ready(function($) {
                    $(".clickable-row").click(function() {
                        if ($(event.target).parents("td").hasClass("cred-btn") || $(event.target).hasClass("cred-btn")) {
                            // icon clicked
                            return;
                        }
                        window.location = $(this).data("href");
                    });
                });
            {/noparse}
		</script>
		
        {if $allow_deposit == 1}
            {if $enable_paystack == 1}
                <!-----Paystack--->
                <script src="https://js.paystack.co/v1/inline.js"></script>	 
                <script>
                    function payWithPaystack(){
                        $('#payModal').modal('hide');
                        let amount = document.getElementById("dep-amount").value * 100;
                        if(Number(amount) > 0){
                    	    var handler = PaystackPop.setup({
                    	      key: '{paystack_public_key}',
                    	      email: '{payEmail}',
                    	      amount: amount,
                    	      ref:'{payRef}',
                    	      metadata: {
                    	         custom_fields: [
                    	            {
                    	                site_ref: '{payRef}',
                    	                user_id: '{userID}',
                    	                amount: amount
                    	            }
                    	         ]
                    	      },
                    	      callback: function(response){
                    	      	  window.open('{base_url}/payment/paystack/'+response.reference+'/{userID}','_self');
                    	      },
                    	      onClose: function(){
                    	          alert('Transaction Cancelled');
                    	      }
                    	    });
                    	    handler.openIframe();
                        }else alert('Amount must be greater than 0');
            	    }
            	 </script>   
                <!-----/Paystack--->
            {endif}
            {if $enable_coinpayments == 1}
                <!-----Coinpayment--->
                <script>
                    function payWithCoinpayments(){
                        $('#payModal').modal('hide');
                        let amount = document.getElementById("dep-amount").value;
                        if(Number(amount) > 0){
                            document.getElementById("damount").value = amount;
                            document.getElementById("durl").value = window.location.href;
                            document.getElementById("durl2").value = window.location.href;
                            document.getElementById("cpaymt").click();
                        }else alert('Amount must be greater than 0');
            	    }
            	 </script> 
                    <form action="https://www.coinpayments.net/index.php" method="post">
                        <input type="hidden" name="cmd" value="_pay_simple">
                        <input type="hidden" name="reset" value="1">
                        <input type="hidden" name="merchant" value="{coinpayments_merchant_key}">
                        <input type="hidden" name="currency" value="{site_currency|upper}">
                        <input type="hidden" name="amountf" id="damount" value="">
                        <input type="hidden" name="custom" value="{userID}">
                        <input type="hidden" name="item_name" value="Wallet Funding">    
                        <input type="hidden" name="item_desc" value="Wallet deposit using Cryptocurrency/Coinpayments"> 
                        <input type="hidden" name="invoice" value="{payRef}">
                        <input type="hidden" name="cancel_url" id="durl" value="">
                        <input type="hidden" name="success_url"  id="durl2" value="">
                        <input type="hidden" name="ipn_url" value="{base_url}/payment/coinpayment/{userID}">
                        <input type="image" id="cpaymt" src="https://www.coinpayments.net/images/pub/buynow-grey.png" alt="Buy Now with CoinPayments.net" style="display: none;">
                    </form>  
                <!-----/Coinpayment--->
            {endif}
            <!--payment modal-->
                <!-- MESSAGE MODAL -->
                <div class="modal" id="payModal" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="example-Modal3">Fund your wallet</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="layout-top-spacing" id="val-form-response">{! infoPayment !}
                                            {if $infoPayment != null}
                                                {! infoPayment !}
                                            {endif}
                                    </div>
                                <form>
                                    <div class="form-group">
                                        <label for="dep-amount" class="form-control-label">Amount:</label>
                                        <input type="text" name="payAmount" class="form-control" id="dep-amount" placeholder="amount in {site_currency}" required>    
                                        <div class="mt-1 rateInfo" style="display:none;">
                                            <span class="badge badge-info">
                                                <small id="ex-rate" class="form-text mt-0">{site_currency|upper}/NGN Rate : {exchange_rate}</small>
                                            </span>
                                            <span class="badge badge-success float-right">
                                                <small class="form-text mt-0">{site_currency|upper} equivalent => <span id="ex-conversion"class="text-danger font-weight-bolder"></span></small>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <div class="panel panel-primary">
                                    <div class="form-group">
                                        <label for="" class="form-control-label">Payment method:</label>
                                    </div>
                                    <div class="tab-menu-heading">
                                        <div class="tabs-menu ">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li><a href="#tab0" class="active" data-toggle="tab">Select:</a></li>
                                                {if $enable_paystack == 1}<li><a href="#tab1" data-toggle="tab">Paystack</a></li>{endif}
                                                {if $enable_coinpayments == 1}<li><a href="#tab2" data-toggle="tab" class="">Coinpayments</a></li>{endif}
                                                {if $enable_bank == 1}<li><a href="#tab3" data-toggle="tab" class="">Bank</a></li>{endif}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body">
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab0">
                                            </div>
                                            {if $enable_paystack == 1}<div class="tab-pane" id="tab1">
                                                <p>{! paystack_description !}</p>
                                                <p><button type="button" onclick="payWithPaystack()" class="btn btn btn-primary btn-block">Pay with Paystack</button></p>
                                            </div>{endif}
                                            {if $enable_coinpayments == 1}<div class="tab-pane" id="tab2">
                                                <p>{! coinpayments_description !}</p>
                                                <p><button type="button" onclick="payWithCoinpayments()" class="btn btn btn-secondary btn-block">Pay with Coinpayments</button></p>
                                            </div>{endif}
                                            {if $enable_bank == 1}<div class="tab-pane" id="tab3">
                                                <p>{! bank_description !}</p>
                                                <ul class="list-group">
                                                    <li class="list-group-item pr-1">
                                                        <span style="line-height:40px;">Bank Name</span>
                                                        <div class="input-group w-50 float-right">
                                                            <input type="text" class="form-control" value="{bank_name}" disabled style="border: 0.01px solid #766f6f;background-color: transparent;">
                                                            <span class="input-group-append">
                                                                <button class="btn clipB" type="button" data-clipboard-text="{bank_name}"><i class="fa fa-copy text-white"></i></button>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item pr-1">
                                                        <span style="line-height:40px;">Account No</span>
                                                        <div class="input-group w-50 float-right">
                                                            <input type="text" class="form-control" value="{bank_account_no}" disabled style="border: 0.01px solid #766f6f;background-color: transparent;">
                                                            <span class="input-group-append">
                                                                <button class="btn clipB" type="button" data-clipboard-text="{bank_account_no}"><i class="fa fa-copy text-white"></i></button>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item pr-1">
                                                        <span style="line-height:40px;">Swift Code</span>
                                                        <div class="input-group w-50 float-right">
                                                            <input type="text" class="form-control" value="{bank_swift_code}" disabled style="border: 0.01px solid #766f6f;background-color: transparent;">
                                                            <span class="input-group-append">
                                                                <button class="btn clipB" type="button" data-clipboard-text="{bank_swift_code}"><i class="fa fa-copy text-white"></i></button>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item pr-1">
                                                        <form method="post" id="bank" action="user/finance/bank" enctype="multipart/form-data">
                                                            <input type="hidden" name="pay_id" value="{payRef}" required>
                                                            <div class="form-group">
                                                                <div class="form-label">Upload Payment Proof</div>
                                                                <div class=""><input class="" type="file" id="formFile" name="pproof"></div>
                                                            </div>
                                                        </form>
                                                    </li>
                                                </ul>
                                                <p><button type="button" id="payWithBank" class="btn btn btn-info btn-block">Pay with Bank</button></p>
                                            </div>{endif}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MESSAGE MODAL CLOSED -->
                <script>
                      if(window.location.hash) {
                        var hash = window.location.hash;
                        $(hash).modal('toggle');
                      }
                </script>
            <!-- MESSAGE MODAL -->
            {if $enable_bank == 1}
                <script src="https://malsup.github.io/jquery.form.js"></script> 
                {noparse}
                    <script>
                        $('.modal').on('click', '#payWithBank', function(){
                            if(Number($('#dep-amount').val()) > 0){
                                $("#bank").ajaxForm();
                                $("#bank").ajaxSubmit({
                                    type: "post",
                                    dataType: "html",
                                    url:"user/finance/bank",
                                    resetForm: false,
                                    data:{amount: $('#dep-amount').val()},
                                    success: (responseText, statusText, xhr, form) => {
                                        responseText = JSON.parse(responseText);
                                        if (responseText["status"]) {
                                             $("#bank")[0].reset();
                                             $('#dep-amount').val("");
                                        }
                                        $("#val-form-response").html(responseText["msg"]);
                                        $(window).scrollTop(0);
                                    },
                                });
                            }else alert('Amount must be greater than 0');
                        });
                    </script>
                {/noparse}
            {endif}
            {noparse}
                <script>
                    $("#payModal").on("shown.bs.tab", function (event) {
                        if(event.target.getAttribute("href") != "#tab1" && event.target.getAttribute("href") != "#tab3"){
                            $("#dep-amount").attr('placeholder', 'amount in {/noparse}{site_currency}{noparse}');
                            $(".rateInfo").hide();
                            $("#dep-amount").off();
                        }else{
                            $("#dep-amount").attr('placeholder', 'amount in NGN');
                            $(".rateInfo").show();
                            $("#ex-conversion").text(($("#dep-amount").val()/{/noparse}{exchange_rate}{noparse}).toFixed(2));
                            $("#dep-amount").on('input',function (event) {
                                $("#ex-conversion").text(($("#dep-amount").val()/{/noparse}{exchange_rate}{noparse}).toFixed(2));
                            });
                        }
                    });
                </script>
            {/noparse}
        {endif}
        
        <script>
            window.addEventListener('load',function(){
                let notifMessage = '{! announcement_signed_in_user_description !}';
                let siteName = '{site_name}'+'-In';
                let ssStorage = sessionStorage.getItem(siteName);
                if(notifMessage != "" && ssStorage == null){
                    swal({ 
                        title:'',
                        position: 'center',
                        type: 'warning',
                        text: notifMessage,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    });
                    sessionStorage.setItem(siteName, true);
                }
            });
        </script>
		
        {! close_body_tag_description !}
	</body>
</html>