	<!-- ROW-1 OPEN -->
			<div class="row">
				<div class="col-md-12 col-lg-3">
					<div class="card">
						<div class="list-group list-group-transparent mb-0 mail-inbox">
							<div class="mt-4 mb-4 ml-4 mr-4 text-center">
								<a href="user/mail/inbox" class="btn btn-primary btn-lg btn-block">Inbox</a>
							</div>
							{mail}
    							{noparse}<a href="user/mail/inbox" class="list-group-item list-group-item-action d-flex align-items-center {/noparse}{inbox_owner}{noparse}">
    								<span class="icon mr-3"><i class="bx bxs-inbox"></i></span>Inbox {/noparse}{if $mail_inbox_count > 0}{noparse}<span class="ml-auto badge badge-success">{/noparse}{mail_inbox_count}</span>{endif}{noparse}
    							</a>
    							<a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center{/noparse} {sent_owner}{noparse}">
    								<span class="icon mr-3"><i class="bx bxs-paper-plane"></i></span>Sent Mail
    							</a>{/noparse}
							{/mail}
							<a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-error-circle"></i></span>Important
							</a>
							<a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-star"></i></span>Starred
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-file-blank"></i></span>Drafts
							</a>
							<a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-purchase-tag"></i></span>Tags
							</a>
							<a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-trash"></i></span>Trash
							</a>
						</div>
					</div>
				</div><!-- COL-END -->
				<div class="col-lg-9 col-md-12 col-sm-12">
					<div class="card">
					    {mail}
    						<div class="card-body">
    							<div class="media mt-0">
    								<div class="mr-3">
    									<img alt="avatar" class="avatar avatar-md brround" src="users/{username}/profile/{profile_pic}">
    								</div>
    								<div class="media-body tx-inverse">
    									<div class="float-right d-none d-md-flex fs-15 mt-4">
    										<small class="mr-2"><i class="fe fe-paperclip mr-2"></i>{time}</small>
    									</div>
    									<div class="media-title font-weight-semiblod mt-2">{fullname|title}
    										<p class="mb-0 text-muted">{payEmail|lower} </p>
    										<small class="mr-2 d-md-none">{time}</small>
    									</div>
    								</div>
    							</div>
    						</div>
    						<div class="card-body">
    							<div class="eamil-body">
    								<h4 class="mb-3">{subject|title} </h4>
    								<p> {! body !}</p>
    							</div>
    						</div>
    						<div class="card-footer">
    							<div class="btn-list text-right">
    								<a class="btn btn-primary mt-1 mb-1" href="user/mail/compose"><i class="fa fa-reply"></i> Reply</a>
    								<a class="btn btn-danger mt-1 mb-1" href="user/mail/delete/{id}"><i class="fa fa-trash"></i> Delete</a>
    							</div>
    						</div>
					    {/mail}
					</div>
				</div><!-- COL-END -->
			
			</div>
			<!-- ROW-1 CLOSED -->