
				<!-- ROW-4 -->
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Your Withdrawal History</h3>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100 table-striped  table-hover">
										<thead class="text-center">
											<tr>
                                                <th>s/n</th>
                                                <th>Time</th>
                                                <th>Amount</th>
                                                <th>Currency</th>
                                                <th>Method</th>
                                                <th>Txn-id</th>
                                                <th>Status</th>
                                                <th>Desc</th>
                                            </tr>
										</thead>
										<tbody>
                                            {withdraw_history}
                                                <tr>
                                                    <td class="text-center">{sn}</td>
                                                    <td class="text-center">{time}</td>
                                                    <td class="text-center">{amount}</td>
                                                    <td class="text-center">{currency|upper}</td>
                                                    <td class="text-center">{method|capitalize}</td>
                                                    <td class="text-center">{txn_id|lower}</td>
                                                    <td class="text-center">{! status !}</td>
                                                    <td class="text-center">{admin_note}</td>
                                                </tr>
                                            {/withdraw_history}
										    
										</tbody>
									</table>
									<style>
									    tbody > tr td {
                                            border-right: none !important;
                                        }
									</style>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ROW-4 CLOSED-->