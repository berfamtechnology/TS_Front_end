

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="card-title">Fees & Info</h3>
                        </div>
                        <div class="">
                            <div class="grid-margin">
                                <div class="">
                                    <div class="table-responsive text-center">
                                        <table class="table card-table table-vcenter text-nowrap mb-0  align-items-center mb-0 table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Method</th>
                                                    <th>Currency</th>
                                                    <th>Charge</th>
                                                    <th>Minimum</th>
                                                    <th>Maximum</th>
                                                    <th>Delay</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {withdraw_method}
                                                    <tr>
                                                        <td>{method|capitalize}</td>
                                                        <td>{currency|lower}</td>
                                                        <td>{charge}</td>
                                                        <td>{min}</td>
                                                        <td>{max}</td>
                                                        <td>{delay}</td>
                                                    </tr>
                                                {/withdraw_method}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-2 CLOSED -->
            <!-- ROW-2 -->
            <div class="row">
                <div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="mb-0 card-title">Withdrawal form</h3>
						</div>
						<div class="card-body">
                            <form method="post" action="user/withdraw">
                                            {if $info != null}
                                                {! info !}
                                            {endif}
                                            <input type="hidden" name="{csrf_token}" value="{csrf_hash}" />
    							<div class="row">
    								<div class="col-md-6">
    									<div class="form-group">
    										<label class="form-label">Amount</label>
    										<input type="text" class="form-control" name="amount" placeholder="Amount" required>
    									</div>
    								</div>
    								<div class="col-md-6">
    									<div class="form-group">
    										<label class="form-label">Method</label>
                                            <select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" name="method" required>
                                            <option selected="selected">Select</option>
                                            {withdraw_method}
                                                <option value="{id}">{method|capitalize}</option>
                                            {/withdraw_method}
                                            </select>
    									</div>
    								</div>
    								<div class="col-md-12 ">
    									<div class="form-group mb-0">
    										<label class="form-label">Payment Info</label>
    										<textarea class="form-control"  name="info" rows="4" placeholder="text here.."></textarea>
    									</div>
    								</div>
    								<div class="col-md-12 text-center">
    									<div class="form-group">
    									   <div>
                                                <input type="submit" class="btn btn-primary mt-5">
                                            </div> 
    									</div>
    								</div> 
    							</div>
                            </form>
						</div>
					</div>
				</div><!-- COL END -->
            </div>
            <!-- ROW-2 CLOSED -->