
			<!-- ROW-1 OPEN -->
			<div class="row row-deck">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Your Transaction Invoices</h3>
						</div>
						<div class="card-body">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							    
                                {invoice}
    								<div class="panel panel-default mt-2">
    									<div class="panel-heading " role="tab" id="heading{id}" {noparse}style="display: flex; justify-content: space-around;  background: linear-gradient(to left, #093028, #237a57);">{/noparse}
    									    <div>
        										<h4 class="panel-title">
        											{noparse}<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{/noparse}{id}{noparse}" aria-expanded="true" aria-controls="collapse{/noparse}{id}{noparse}" style="color:#fff;">Invoice #{/noparse}{inv}-0000{id}</a>
        										</h4>
    										</div>
    										<div>
        										<h4 class="panel-title">
        											{noparse}<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{/noparse}{id}{noparse}" aria-expanded="true" aria-controls="collapse{/noparse}{id}{noparse}" style="color:#fff;">{/noparse}{time}</a>
        										</h4>
    										</div>
    									</div>
    									<div id="collapse{id}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{id}">
    										<div class="panel-body">
                                    			<!-- ROW-1 OPEN -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="clearfix">
                                                                    <div class="float-left">
                                                                        <h3 class="card-title mb-0">{noparse}#{/noparse}{inv}-0000{id}</h3>
                                                                    </div>
                                                                    <div class="float-right">
                                                                        <p class="mb-1"><span class="font-weight-bold">Invoice Date :</span> {time}</p>
                                                                        <p class="mb-0"><span class="font-weight-bold">Due Date :</span> {time}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-lg-6 ">
                                                                        <p class="h3">Invoice From:</p>
                                                                        <address>
                                                                            {site_name|title}<br>
                                                                            { if !empty($phone)}{phone}{endif}<br>
                                                                            { if !empty($email)}{email}{endif}<br>
                                                                            { if !empty($address)}{address}{endif}<br>
                                                                        </address>
                                                                    </div>
                                                                    <div class="col-lg-6 text-right">
                                                                        <p class="h3">Invoice To:</p>
                                                                        <address>
                                                                            {uname}<br>
                                                                            { if !empty($uaddress)}{uaddress}{endif}<br>
                                                                            { if !empty($uphone)}{uphone}{endif}<br>
                                                                            {uemail}
                                                                        </address>
                                                                    </div>
                                                                </div>
                                                                <div class="table-responsive push">
                                                                    <table class="table table-bordered table-hover mb-0 text-nowrap">
                                                                        <tbody>
                                                                            <tr class=" ">
                                                                                <th class="text-center">S.No</th>
                                                                                <th>Plan</th>
                                                                                <th class="text-center">Quantity</th>
                                                                                <th class="text-right">Unit Price</th>
                                                                                <th class="text-right">Sub Total</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-center">1</td>
                                                                                <td>
                                                                                    <p class="font-w600 mb-1">{plan|title}</p>
                                                                                    <div class="text-muted">
                                                                                        <div class="text-muted">{plan_desc|capitalize}</div>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">1</td>
                                                                                <td class="text-right number-font1">{actual_amount}</td>
                                                                                <td class="text-right number-font1">{amount}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                            <div class="row mt-4" style="padding: 0px 50px;">
                                                                <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                                    <div class="inv--payment-info">
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-12">
                                                                                <h6 class=" inv-title">Payment Info:</h6>
                                                                            </div>
                                                                            <div class="col-sm-4 col-12">
                                                                                <p class=" inv-subtitle">Bank Name: </p>
                                                                            </div>
                                                                            <div class="col-sm-8 col-12">
                                                                                <p class="">{site_name|title} Wallet</p>
                                                                            </div>
                                                                            <div class="col-sm-4 col-12">
                                                                                <p class=" inv-subtitle">Txn Number : </p>
                                                                            </div>
                                                                            <div class="col-sm-8 col-12">
                                                                                <p class="">{ref_id}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                                    <div class="inv--total-amounts text-sm-right">
                                                                        <div class="row">
                                                                            <div class="col-sm-8 col-7">
                                                                                <p class="">Sub Total: </p>
                                                                            </div>
                                                                            <div class="col-sm-4 col-5">
                                                                                <p class="">{amount}</p>
                                                                            </div>
                                                                            <div class="col-sm-8 col-7 grand-total-title">
                                                                                <h4 class="">Grand Total : </h4>
                                                                            </div>
                                                                            <div class="col-sm-4 col-5 grand-total-amount">
                                                                                <h4 class="">{amount}</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {noparse}<div class="card-footer text-right">
                                                                <button type="button" class="btn btn-danger mb-1" onclick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
                                                            </div>{/noparse}
                                                        </div>
                                                    </div><!-- COL-END -->
                                                </div>
                                                <!-- ROW-1 CLOSED -->
    										</div>
    									</div>
    								</div>
                                {/invoice}
							</div>
							<!-- PANEL-GROUP -->
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-1 CLOSED -->