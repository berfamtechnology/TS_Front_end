<div class="row">
	{if $info_cart != null}
    <div class="col-12">
	{! info_cart !}
    </div>
	{endif}
	<div class="col-xl-3 col-sm-6">
		<div class="card">
			<div class="card-body">
				<div class="row mb-1">
					<div class="col-auto mb-0 order-2 order-md-1">
						<div class="dash-icon" style="background:rgba(70, 144, 239, 0.2);">
							<i class="bx bxs-wallet" style="color:rgba(76, 145, 255, 1);"></i>
						</div>
					</div>
					<div class="col order-1 order-md-2">
						<p class="mb-1 mt-2 font-weight-bold h4">Withdrawn</p>
					</div>
					<div class="col-12 order-3">
						<h3 class="mb-0 number-font mt-3">{withdraw}</h3>
					</div>
				</div>
				<span class="fs-12 text-muted"> <strong>%</strong><i class="mdi mdi-arrow-up"></i> <span class="text-muted fs-12 ml-0 mt-1"></span>all time withdrawals</span>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6">
		<div class="card">
			<div class="card-body">
				<div class="row mb-1">
					<div class="col-auto mb-0 order-2 order-md-1">
						<div class="dash-icon text-warning">
							<i class="bx bxs-badge-dollar"></i>
						</div>
					</div>
					<div class="col order-1 order-md-2">
						<p class="mb-1 mt-2 font-weight-bold h4">Profit</p>
					</div>
					<div class="col-12 order-3">
						<h3 class="mb-0 number-font mt-3">{profit}</h3>
					</div>
				</div>
				<span class="fs-12 text-muted"> <strong>%</strong><i class="mdi mdi-arrow-up"></i> <span class="text-muted fs-12 ml-0 mt-1"></span>all time profits</span>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6">
		<div class="card">
			<div class="card-body">
				<div class="row mb-1">
					<div class="col-auto mb-0 order-2 order-md-1">
						<div class="dash-icon text-secondary">
							<i class="bx bxs-credit-card-front"></i>
						</div>
					</div>
					<div class="col order-1 order-md-2">
						<p class="mb-1 mt-2 font-weight-bold h4">Referral</p>
					</div>
					<div class="col-12 order-3">
						<h3 class="mb-0 number-font mt-3">{referral}</h3>
					</div>
				</div>
				<span class="fs-12 text-muted"> <strong>%</strong><i class="mdi mdi-arrow-up"></i> <span class="text-muted fs-12 ml-0 mt-1">all time referrals</span></span>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6">
		<div class="card">
			<div class="card-body">
				<div class="row mb-1">
					<div class="col-auto mb-0 order-2 order-md-1">
						<div class="dash-icon text-danger" style="background:rgba(70, 0, 0, 1);">
							<i class="bx bxs-wallet" style="color:rgba(240, 160, 160, 1);"></i>
						</div>
					</div>
					<div class="col order-1 order-md-2">
						<p class="mb-1 mt-2 font-weight-bold h4">Wallet</p>
					</div>
					<div class="col-12 order-3">
						<h3 class="mb-0 number-font mt-3">{wallet}</h3>
					</div>
				</div>
				<span class="fs-12 text-muted"> <strong>%</strong><i class="mdi mdi-arrow-up"></i> <span class="text-muted fs-12 ml-0 mt-1">current wallet balance</span></span>
			</div>
		</div>
	</div>
	{if 1==2}
	<div class="col-xl-3 col-sm-6">
		<div class="card">
			<div class="card-body">
				<div class="row mb-1">
					<div class="col-auto mb-0">
						<div class="dash-icon text-danger" style="background:rgba(70, 0, 0, 1);">
							<i class="bx bxs-wallet" style="color:rgba(240, 160, 160, 1);"></i>
						</div>
					</div>
					<div class="col">
						<p class="mb-1 mt-2 font-weight-bold h4">Wallet</p>
						<h3 class="mb-0 number-font">{wallet}</h3>
					</div>
				</div>
				<span class="fs-12 text-muted"> <strong>%</strong><i class="mdi mdi-arrow-up"></i> <span class="text-muted fs-12 ml-0 mt-1">current wallet balance</span></span>
			</div>
		</div>
	</div>
	{endif}
</div>

<div class="row">
	{products}
	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
		<div class="card">
			<div class="card-body text-center">
				<h2 class="mt-4 mb-2">{name|title}</h2>
				<a href="user/plans" class="btn btn-secondary mt-4">Purchase</a>
			</div>
		</div>
	</div>
	{/products}
</div>

<!-- ROW-3 OPEN -->
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="card">
			<div class="card-header bg-transparent border-0">
				<h3 class="card-title">My Challenges</h3>
			</div>
			<div class="mb-5 mx-5">

				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default mb-4">
						<div class="panel-heading1" style="border-radius:20px;">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" style="border-radius:20px;">Active</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse show" role="tabpanel" aria-expanded="false">
							<div class="panel-body">
								<div class="grid-margin">
									<div class="">
										<div class="table-responsive">
											<table class="table card-table table-vcenter text-nowrap mb-0 table-primary align-items-center mb-0 text-center">
												<thead class="bg-info text-white">
													<tr style="background: linear-gradient(140deg, #1B2926 0%, #FFFFFF00 85%);">
														<th class="text-white">Purchased</th>
														<th class="text-white">Plan</th>
														<th class="text-white">-+-</th>
														<!-- <th class="text-white">Start</th> -->
														<!-- <th class="text-white">Price</th> -->
														<th class="text-white">Profit</th>
														<!-- <th class="text-white">End</th> -->
														<th class="text-white">Withdrawable</th>
														<th class="text-white">Stage</th>
														<th class="text-white">Status</th>
														<th class="text-white">Credentials</th>
													</tr>
												</thead>
												<tbody style="color: #fff;background: linear-gradient(140deg, #1B2926 0%, #FFFFFF00 85%);">
													{investments2}
													<tr {! link !}>
														<td>{time}</td>
														<td>{plan|title}</td>
														<td>
															<img alt="Image placeholder" class="rounded-circle" src="offers/{image}" width="32px" height="32px">
														</td>
														<!-- <td>{time_started}</td> -->
														<!-- <td>{amount}</td> -->
														<td>{profit2}</td>
														<!-- <td>{time_ended}</td> -->
														<td>{withdrawable}</td>
														<td>{! stage !}</td>
														<td>{! status !}</td>
														<td class="cred-btn">
															<div class="btn-group">
																<button type="button" class="btn btn-outline-default dropdown-toggle" data-toggle="dropdown">
																	Action <span class="caret"></span>
																</button>
																<ul class="dropdown-menu px-2" role="menu">
																	<li class="dropdown-plus-title">
																		Access Details
																		<b class="fa fa-angle-up" aria-hidden="true"></b>
																	</li>
																	<li><span class="text-warning">Login ID:</span> { login_id }</li>
																	<li><span class="text-warning">Password:</span> { login_pass }</li>
																	<li><span class="text-warning">Server:</span> { login_server }</li>
																	<li class="divider"></li>
																	<li><span class="text-warning">Broker:</span> { login_broker }</li>
																	<li><span class="text-warning">Platform:</span> { login_platform }</li>
																</ul>
															</div>
														</td>
													</tr>
													{/investments2}
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default mb-4">
						<div class="panel-heading1" style="border-radius:20px;">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" style="border-radius:20px;">Waiting</a>
							</h4>
						</div>
						<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body">
								<div class="grid-margin">
									<div class="">
										<div class="table-responsive">
											<table class="table card-table table-vcenter text-nowrap mb-0 table-primary align-items-center mb-0 text-center">
												<thead class="bg-warning text-white">
													<tr style="background: linear-gradient(140deg, #1B2926 0%, #FFFFFF00 85%);">
														<th class="text-white">Purchased</th>
														<th class="text-white">Plan</th>
														<th class="text-white">-+-</th>
														<!-- <th class="text-white">Start</th> -->
														<th class="text-white">Price</th>
														<th class="text-white">Profit</th>
														<!-- <th class="text-white">End</th> -->
														<th class="text-white">Withdrawable</th>
														<th class="text-white">Stage</th>
														<th class="text-white">Status</th>
													</tr>
												</thead>
												<tbody style="color: #fff;background: linear-gradient(140deg, #1B2926 0%, #FFFFFF00 85%);">
													{investments3}
													<tr {! link !}>
														<td>{time}</td>
														<td>{plan|title}</td>
														<td>
															<img alt="Image placeholder" class="rounded-circle" src="offers/{image}" width="32px" height="32px">
														</td>
														<!-- <td>{time_started}</td> -->
														<td>{amount}</td>
														<td>{profit2}</td>
														<!-- <td>{time_ended}</td> -->
														<td>{withdrawable}</td>
														<td>{! stage !}</td>
														<td>{! status !}</td>
													</tr>
													{/investments3}
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading1" style="border-radius:20px;">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" style="border-radius:20px;">Inactive</a>
							</h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body">
								<div class="grid-margin">
									<div class="">
										<div class="table-responsive">
											<table class="table card-table table-vcenter text-nowrap mb-0 table-primary align-items-center mb-0 text-center">
												<thead class="bg-danger text-white">
													<tr style="background: linear-gradient(140deg, #1B2926 0%, #FFFFFF00 85%);">
														<th class="text-white">Purchased</th>
														<th class="text-white">Plan</th>
														<th class="text-white">-+-</th>
														<!-- <th class="text-white">Start</th> -->
														<th class="text-white">Initial</th>
														<th class="text-white">Profit</th>
														<!-- <th class="text-white">End</th> -->
														<th class="text-white">Withdrawable</th>
														<th class="text-white">Stage</th>
														<th class="text-white">Status</th>
													</tr>
												</thead>
												<tbody style="color: #fff;background: linear-gradient(140deg, #1B2926 0%, #FFFFFF00 85%);">
													{investments1}
													<tr {! link !}>
														<td>{time}</td>
														<td>{plan|title}</td>
														<td>
															<img alt="Image placeholder" class="rounded-circle" src="admin/offers/{image}" width="32px" height="32px">
														</td>
														<!-- <td>{time_started}</td> -->
														<td>{amount}</td>
														<td>{profit2}</td>
														<!-- <td>{time_ended}</td> -->
														<td>{withdrawable}</td>
														<td>{! stage !}</td>
														<td>{! status !}</td>
													</tr>
													{/investments1}
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div><!-- COL END -->
</div>
<!-- ROW-3 CLOSED -->