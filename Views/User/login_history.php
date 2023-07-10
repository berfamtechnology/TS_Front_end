

			<!-- ROW-4 OPEN -->
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xl-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Your Login History</h3>
						</div>
						<div class="card-body text-center">
							<div class="table-responsive">
								<table class="table table-bordered table-hover  mb-0 text-nowrap table-striped">
									<thead>
										<tr>
											<th>Country</th>
											<th>Browser</th>
											<th>IP</th>
											<th>Time</th>
											<th>Location</th>
										</tr>
									</thead>
									<tbody>
                                        {login_history}
                                            <tr>
                                                <td><img src="user/assets/images/flags/{code|lower}.svg" class="w-5 h-5 mr-2" alt=""></td>
                                                <td>{browser|capitalize}</td>
                                                <td>{ip}</td>
                                                <td>{time}</td>
                                                <td>{location|title}</td>
                                            </tr>
                                        {/login_history}
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- COL END -->
			</div>
			<!-- ROW-4 CLOSED -->