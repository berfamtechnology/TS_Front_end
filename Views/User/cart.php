<script>
    function priceUpdate(){
        let valuez = document.getElementById("qQty").value;
        document.getElementById("subTot").textContent = valuez;
        document.getElementById("Tot").textContent = valuez;
        document.getElementById("price").value = valuez;
    }
</script>
	<!-- ROW-1 OPEN -->
			<div class="row">
				<div class="col-md-8">
                                        {if $info != null}
                                            {! info !}
                                        {endif}
					<div class="card cart">
						<div class="card-header">
							<h3 class="card-title">Checkout</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-vcenter text-wrap text-center">
									<thead>
										<tr>
											<th>Product</th>
											<th>Name</th>
											<th class="w-25">Price</th>
										</tr>
									</thead>
									<tbody>
                                        {item}
    										<tr>
    											<td>
    												<img src="offers/{image}" alt="" class="h-8">
    											</td>
    											<td>{name|title}</td>
    											<td>{price|title}</td>
    										</tr>
										{/item}
									</tbody>
								</table>
							</div><!--<br>
							<div class="row">
								<div class="col-6"><input class="productcart form-control" type="text" placeholder="Coupon Code"></div>
								<div class="col-6"><a href="#" class="btn btn-primary btn-md">Apply Coupon</a></div>
							</div>-->
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card cart">
                        {item}
							<div class="card-body">
								<ul class="list-group">
									<li class="list-group-item">
										Sub Total
										<span class="badgetext h4  mb-0 number-font1" id="subTot">{price}</span>
									</li>
									<!--<li class="list-group-item">
										Discount
										<span class="badgetext h4  mb-0 number-font1">n/a</span>
									</li>-->
									<li class="list-group-item">
										Total
										<span class="badgetext h4 font-weight-bold mb-0 number-font1" id="Tot">{price}</span>
									</li>
									<li class="list-group-item">
										<form method="post" id="voucher" action="user/products/checkout">
											<input type="hidden" name="id" value="{id}" id="vid" required>
											<input type="text" name="voucher" value="{voucher}" placeholder="voucher" class="form-control" id="voucherCode">
											<div id="vresp"></div>
										</form>
									</li>
								</ul>
							</div>
    						<div class="card-footer text-right" style="display:flex;justify-content:space-around">
    							<a href="user/plans" class="btn btn-warning"><i class="fa fa-arrow-left mr-1"></i>Back to Plans</a>
    							<button type="submit" form="voucher" class="btn btn-secondary">Check out<i class="fa fa-arrow-right ml-1"></i></button>
    						</div>
                        {/item}
					</div>
				</div>
			</div><!-- COL-END -->
			<!-- ROW-1 CLOSED -->