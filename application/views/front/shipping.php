<style type="text/css">
	.shipping_info p{color:red;font-weight: bold;font-size: 12px}
</style>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url();?>">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step2</h2>
			</div>
		
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<h5 class="shipping_info">
                   			 <?php echo validation_errors();?>
			              </h5>
							<p>Shipping Address</p>
							<div class="form-two">
								<form action="<?php echo base_url()?>insert-shipping" method="post" name="shiping_info">
									<input type="text" placeholder="Name" name="cus_name">
									
									<input type="hidden" name="shipping_id" value="">
									<input type="text" placeholder="Email*" name="cus_email">
									<input type="text" placeholder="Mobile" name="cus_mobile">
									<input type="text" placeholder="Address*" name="cus_address">
									<input type="text" placeholder="City" name="cus_city">
									<select name="cus_province">
										<option>-- Province --</option>
										<option>Jawa Timur</option>
										<option>Jawa Tengah</option>
										<option>Jawa Barat</option>
										<option>Bali</option>
										<option>Jakarta</option>
									</select>
									<input type="text" placeholder="Zip" name="cus_zip">
									<input type="text" placeholder="Fax" name="cus_fax">
									<input type="submit" value="Save & Continue" class="btn btn-primary">
								</form>
							</div>
							
						</div>
					</div>
					<div class="col-sm-2">
						
					</div>					
				</div>
			</div>
			
		</div>
	</section> <!--/#cart_items-->
	<script type="text/javascript">
		
		

	</script>