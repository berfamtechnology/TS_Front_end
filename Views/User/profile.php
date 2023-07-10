<!-- ROW-1 OPEN -->
<div class="row">
	<div class="col-lg-4">
		<div class="card">
			<div class="card-body">
				<div class="wideget-user text-center">
					<div class="wideget-user-desc">
						<div class="wideget-user-img">
							<img class="" src="users/{username|lower}/profile/{profile_pic}" alt="img">
						</div>
						<div class="user-wrap">
							<h4 class="mb-1">{username|title}</h4>
							<h6 class="text-muted mb-4">Member Since: {created}</h6>
							<div class="wideget-user-rating">
								<a href="#"><i class="fa fa-star text-warning"></i></a>
								<a href="#"><i class="fa fa-star text-warning"></i></a>
								<a href="#"><i class="fa fa-star text-warning"></i></a>
								<a href="#"><i class="fa fa-star text-warning"></i></a>
								<a href="#"><i class="fa fa-star text-warning"></i></a>
							</div>
							<div class="wideget-user-icons mb-4">
								<a href="{facebook}" class="bg-facebook text-white mt-0"><i class="fa fa-facebook"></i></a>
								<a href="{twitter}" class="bg-info text-white"><i class="fa fa-twitter"></i></a>
								<a href="{google}" class="bg-google text-white"><i class="fa fa-google"></i></a>
								<a href="{whatsapp}" class="bg-success text-white"><i class="fa fa-whatsapp"></i></a>
							</div>
							<a href="#" class="btn btn-primary mt-1 mb-1"><i class="fa fa-rss"></i> Follow</a>
							<a "mailto:{uemail|title}" class="btn btn-secondary mt-1 mb-1"><i class="fa fa-envelope"></i> E-mail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="float-left">
					<h3 class="card-title">Contact</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="card-body wideget-user-contact">
				<div class="media mb-5 mt-0">
					<div class="d-flex mr-3">
						<span class="user-contact-icon bg-primary"><i class="fa fa-envelope text-white"></i></span>
					</div>
					<div class="media-body">
						<a href="#" class="text-dark">Email</a>
						<div class="text-muted fs-14">{uemail|lower}</div>
					</div>
				</div>
				<div class="media mb-5 mt-0">
					<div class="d-flex mr-3">
						<span class="user-contact-icon bg-secondary"><i class="fa fa-globe text-white"></i></span>
					</div>
					<div class="media-body">
						<a href="#" class="text-dark">Address</a>
						<div class="text-muted fs-14">{uaddress}</div>
					</div>
				</div>
				<div class="media mb-0 mt-0">
					<div class="d-flex mr-3">
						<span class="user-contact-icon bg-warning"><i class="fa fa-phone text-white"></i></span>
					</div>
					<div class="media-body">
						<a href="#" class="text-dark">Contact</a>
						<div class="text-muted fs-14">{uphone}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-8">
		<div class="card">
			<div class="wideget-user-tab">
				<div class="tab-menu-heading">
					<div class="tabs-menu1">
						<ul class="nav">
							<li class=""><a href="#tab-51" class="active show" data-toggle="tab">Profile</a></li>
							<li><a href="#tab-61" data-toggle="tab" class="">Settings</a></li>
							{if $is_kyc}<li><a href="#tab-62" data-toggle="tab" class="">KYC</a></li>{endif}
						</ul>
					</div>
				</div>
			</div>
		</div>
		{if $infoSettings != null}
		{! infoSettings !}
		{endif}
		{if $infoUpload != null}
		{! infoUpload !}
		{endif}
		{if $infoPass != null}
		{! infoPass !}
		{endif}
		{if $infoKYC2 != null}
		{! infoKYC2 !}
		{endif}
		{if $info != null}
		{! info !}
		{endif}
		<div class="tab-content">
			<div class="tab-pane active show" id="tab-51">
				<div class="card">
					<div class="card-body">
						<div id="profile-log-switch">
							<div class="media-heading">
								<h5><strong>Personal Information</strong></h5>
							</div>
							<div class="table-responsive ">
								<table class="table row table-borderless">
									<tbody class="col-lg-12 col-xl-6 p-0">
										<tr>
											<td><strong>Full Name :</strong> {uname|title}</td>
										</tr>
										<tr>
											<td><strong>Date of Birth :</strong> {dob}</td>
										</tr>
										<tr>
											<td><strong>Languages :</strong> English</td>
										</tr>
									</tbody>
									<tbody class="col-lg-12 col-xl-6 p-0">
										<tr>
											<td><strong>Website :</strong> {site_name|title}</td>
										</tr>
										<tr>
											<td><strong>Email :</strong> {uemail|lower}</td>
										</tr>
										<tr>
											<td><strong>Phone :</strong> {uphone} </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="row profie-img">
								<div class="col-md-12">
									<div class="media-heading">
										<h5><strong>Biography</strong></h5>
									</div>
									<p>{bio}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="media-heading">
							<h5><strong>Referral</strong></h5>
						</div>
						<div class="row mt-5">
							<div class="col-md-6">
								<strong>Referral Code :</strong> {ref_link|lower}</td>
							</div>
							<div class="col-md-12">
								<div>
									<p></p><button class="mb-4 btn btn-info btn-sm btn-block clipB" href="javascript:void(0);" data-clipboard-text="{ref_link}" style="background: linear-gradient(to right, #2b5876 0%, #4e4376 100%);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
											<rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
											<path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
										</svg> Copy</button></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tab-61">
				<div class="card">
					<form method="post" action="user/profile/settings">
						<div class="card-header">
							<h3 class="card-title">Edit Profile</h3>
						</div>
						<div class="w-75 mx-auto mt-2">
							{if $infoSettings != null}
							{! infoSettings !}
							{endif}
						</div>
						<input type="hidden" name="{csrf_token}" value="{csrf_hash}" />
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<label for="exampleInputname">First Name</label>
										<input type="text" name="fname" class="form-control" id="exampleInputname" value="{first_name}" placeholder="First Name" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<label for="exampleInputname1">Last Name</label>
										<input type="text" name="lname" class="form-control" id="exampleInputname1" value="{last_name}" placeholder="Enter Last Name" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{uemail}" placeholder="email address" required>
							</div>
							<div class="form-group">
								<label for="exampleInputnumber">Phone Number</label>
								<input type="number" name="phone" class="form-control" id="exampleInputnumber" value="{uphone}" placeholder="phone number" required>
							</div>
							<div class="form-group">
								<label class="form-label">Address</label>
								<textarea class="form-control" name="address" rows="3" value="{uaddress}" required>My address is .........</textarea>
							</div>
							<div class="form-group">
								<label class="form-label">About Me</label>
								<textarea class="form-control" name="bio" rows="6" value="{bio}" required>My bio.........</textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Website</label>
								<input class="form-control" placeholder="{site_name|title}" readonly>
							</div>
							<div class="form-group">
								<label class="form-label">Date Of Birth</label>
								<div class="row">
									<div class="col-md-4">
										<select class="form-control select2" name="dobD" required>
											<option value="0" disabled>Date</option>
											<option value="{dobDate}">{dobDate2}</option>
											<option value="1">01</option>
											<option value="2">02</option>
											<option value="3">03</option>
											<option value="4">04</option>
											<option value="5">05</option>
											<option value="6">06</option>
											<option value="7">07</option>
											<option value="8">08</option>
											<option value="9">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
									</div>
									<div class="col-md-4">
										<select class="form-control select2" name="dobM" required>
											<option value="0" disabled>Month</option>
											<option value="{dobMonth}">{dobMonthName}</option>
											<option value="1">Jan</option>
											<option value="2">Feb</option>
											<option value="3">Mar</option>
											<option value="4">Apr</option>
											<option value="5">May</option>
											<option value="6">June</option>
											<option value="7">July</option>
											<option value="8">Aug</option>
											<option value="9">Sep</option>
											<option value="10">Oct</option>
											<option value="11">Nov</option>
											<option value="12">Dec</option>
										</select>
									</div>
									<div class="col-md-4">
										<select class="form-control select2" name="dobY" required>
											<option disabled>Year</option>
											<option>{dobYear}</option>
											<option>2021</option>
											<option>2020</option>
											<option>2019</option>
											<option>2018</option>
											<option>2017</option>
											<option>2016</option>
											<option>2015</option>
											<option>2014</option>
											<option>2013</option>
											<option>2012</option>
											<option>2011</option>
											<option>2010</option>
											<option>2009</option>
											<option>2008</option>
											<option>2007</option>
											<option>2006</option>
											<option>2005</option>
											<option>2004</option>
											<option>2003</option>
											<option>2002</option>
											<option>2001</option>
											<option>1999</option>
											<option>1998</option>
											<option>1997</option>
											<option>1996</option>
											<option>1995</option>
											<option>1994</option>
											<option>1993</option>
											<option>1992</option>
											<option>1991</option>
											<option>1990</option>
											<option>1989</option>
											<option>1987</option>
											<option>1986</option>
											<option>1985</option>
											<option>1984</option>
											<option>1983</option>
											<option>1982</option>
											<option>1981</option>
											<option>1980</option>
											<option>1979</option>
											<option>1978</option>
											<option>1977</option>
											<option>1976</option>
											<option>1975</option>
											<option>1974</option>
											<option>1973</option>
											<option>1972</option>
											<option>1971</option>
											<option>1970</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer text-right">
							<button type="submit" class="btn btn-primary">Update</button>
							<button type="submit" class="btn btn-danger">Cancel</button>
						</div>
					</form>
				</div>
				<div class="card">
					<form method="post" action="user/profile/settings/picture" enctype="multipart/form-data">
						<div class="card-header">
							<div class="card-title">Edit Profile Picture</div>
						</div>
						<div class="w-75 mx-auto mt-2">
							{if $infoUpload != null}
							{! infoUpload !}
							{endif}
						</div>
						<input type="hidden" name="{csrf_token}" value="{csrf_hash}" />
						<div class="card-body">
							<div class="d-flex mb-3">
								<div class="ml-auto mt-xl-2 mt-lg-0 ml-lg-2">
									<input type="file" name="profile_image" class="dropify rounded-circle avatar-lg mr-2" data-max-file-size="3M" data-default-file="users/{username}/profile/{profile_pic}" data-height="90">
								</div>
							</div>
						</div>
						<div class="card-footer text-right">
							<button type="submit" class="btn btn-primary">Update</button>
							<button type="submit" class="btn btn-danger">Cancel</button>
						</div>
					</form>
				</div>
				<div class="card">
					<form method="post" action="user/profile/settings/password">
						<div class="card-header">
							<div class="card-title">Edit Password</div>
						</div>
						<div class="w-75 mx-auto mt-2">
							{if $infoPass != null}
							{! infoPass !}
							{endif}
						</div>
						<input type="hidden" name="{csrf_token}" value="{csrf_hash}" />
						<div class="card-body">
							<div class="form-group">
								<label class="form-label">Old Password</label>
								<input type="password" name="old" class="form-control" placeholder="password" required>
							</div>
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" name="password" class="form-control" placeholder="password" required>
							</div>
							<div class="form-group">
								<label class="form-label">Confirm Password</label>
								<input type="password" name="cpassword" class="form-control" placeholder="password" required>
							</div>
						</div>
						<div class="card-footer text-right">
							<button type="submit" class="btn btn-primary">Update</button>
							<button type="button" class="btn btn-danger">Cancel</button>
						</div>
					</form>
				</div>
			</div>
			<div class="tab-pane" id="tab-62">
				<div class="card">
					<form method="post" action="user/profile/settings/kyc" enctype="multipart/form-data">
						<div class="card-header">
							<div class="card-title">Fulfill KYC</div>
						</div>
						<div class="w-75 mx-auto mt-2">
							{if $infoKYC2 != null}
							{! infoKYC2 !}
							{endif}
							{if $infoKYC != null}
							{! infoKYC !}
							{endif}
						</div>
						<input type="hidden" name="{csrf_token}" value="{csrf_hash}" />
						<div class="card-body">
							<div class="form-group">
								<label>KYC Document Type</label>
								<select class="form-control mb-4" id="s-from1" name="kyc_doc" required>
									<option value="0">Select a document type</option>
									<option value="3">Valid Passport</option>
									<option value="1">National ID</option>
									<option value="2">Drivers Licence</option>
									<option value="4">Utility Bill</option>
								</select>
							</div>
							<div class="form-group">
								<label>Front</label>
								<input type="file" name="kyc_front" class="dropify rounded-circle avatar-lg mr-2" data-max-file-size="3M" data-height="90">
							</div>
							<div class="form-group">
								<label>Back</label>
								<input type="file" name="kyc_back" class="dropify rounded-circle avatar-lg mr-2" data-max-file-size="3M" data-height="90">
							</div>
							<div class="form-group">
								<label>Selfie</label>
								<input type="file" name="kyc_selfie" class="dropify rounded-circle avatar-lg mr-2" data-max-file-size="3M" data-height="90">
							</div>
						</div>
						<div class="card-footer text-right">
							<button type="submit" class="btn btn-primary">Update</button>
							<button type="submit" class="btn btn-danger">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!-- COL-END -->
</div>
<!-- ROW-1 CLOSED -->