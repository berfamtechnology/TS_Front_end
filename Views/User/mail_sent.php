	<!-- ROW-1 OPEN -->
                                        {if $info != null}
                                            {! info !}
                                        {endif}
			<div class="row">
				<div class="col-md-12 col-lg-3">
					<div class="card">
						<div class="list-group list-group-transparent mb-0 mail-inbox">
							<div class="mt-4 mb-4 ml-4 mr-4 text-center">
								<a href="user/mail/compose" class="btn btn-primary btn-lg btn-block">Compose</a>
							</div>
							<a href="user/mail/inbox" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-inbox"></i></span>Inbox {if $mail_inbox_count > 0}<span class="ml-auto badge badge-success">{mail_inbox_count}</span>{endif}
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
								<span class="icon mr-3"><i class="bx bxs-paper-plane"></i></span>Sent Mail
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-error-circle"></i></span>Important
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-star"></i></span>Starred
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-file-blank"></i></span>Drafts
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-purchase-tag"></i></span>Tags
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-trash"></i></span>Trash
							</a>
						</div>
					</div>
				</div><!-- COL-END -->
				<div class="col-md-12 col-lg-9">
					<div class="card">
						<div class="card-body p-6">
							<div class="inbox-body">
								<div class="mail-option">
									<div class="btn-group">
										<a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
											Sent
										</a>
									</div>
								</div>
								
								<div class="table-responsive">
									<table class="table table-inbox table-hover text-nowrap">
										<tbody>
										    {mail}
    											<tr  class='{read} clickable-row' data-href='{base_url}/user/mail/update/{id}'>
    												<td class="inbox-small-cells">
    													<label class="custom-control custom-checkbox">
    														<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
    														<span class="custom-control-label"></span>
    													</label>
    												</td>
												    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
    												<td class="view-message  dont-show">{short_subject|title}</td>
    												<td class="view-message ">{short_body|capitalize}</td>
    												<td class="view-message  text-right">{time}</td>
    											</tr>
											{/mail}
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div><!-- COL-END -->
			</div>
			<!-- ROW-1 CLOSED -->