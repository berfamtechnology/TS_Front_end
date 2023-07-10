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
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
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
				<div class="col-lg-9 col-md-12 col-sm-12">
						<div class="card">
							<div class="inbox card-body">
								<form method="post" action="user/mail/compose" id="mailCompose">
									<div class="form-row mb-4">
										<label class="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">Subject</label>
										<div class="col-9 col-sm-10 col-md-9 col-lg-10">
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Type Subject" required>
											<input type="hidden" id="mailbody" class="form-control" name="body">
										</div>
									</div>
								</form>
								<div class="row">
									<div class="col-sm-10 ml-auto col-md-12 col-lg-10">
										<textarea class="content" name="example"></textarea>
										<div class="mt-3">
											<div class="row">
												<div class="col-lg-12 mb-0 col-md-12 col-sm-12 text-right">
													<button type="button" class="btn btn-secondary btn-space mt-2 mr-2">Cancel</button>
													<button type="submit" class="btn btn-primary btn-space mt-2"  form="mailCompose">Send message</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				
			</div>
			<!-- ROW-1 CLOSED -->